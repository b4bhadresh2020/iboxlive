<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Email_platform extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    

    private function MakeGetRequest ($url = "", $fields = array())
    {
        // open connection
        $ch = curl_init();
        if(!empty($fields))
        {
            $url .= "?" . http_build_query($fields, '', '&');
        }
        // set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->GetHTTPHeader());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // disable for security
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        
        // execute post
        $result = curl_exec($ch);
        
        // close connection
        curl_close($ch);
//      return $result;
        return $this->DecodeResult($result);
    }

    private function MakePostRequest ($url = "", $fields = array())
    {

        try
        {
            // open connection
            $ch = curl_init();
            
            // add the setting to the fields
			// $data = array_merge($fields, $this->settings);
            $encodedData = http_build_query($fields, '', '&');
            
            // set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->GetHTTPHeader());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
            // disable for security
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            
            // execute post
            $result = curl_exec($ch);
            
            // close connection
            curl_close($ch);
            return $this->DecodeResult($result);
        }
        catch(Exception $error)
        {
            return $error->GetMessage();
        }
    }


    private function GetHTTPHeader ()
    {
        $settings = $this->getSettings();

        switch($settings["format"])
        {
            case "xml":
                return array (
                        "Accept: application/xml; charset=utf-8",
                        "ApiUsername: " . $settings['username'],
                        "ApiToken: " . $settings['token']
                );
            break;
            case "serialized":
                return array (
                        "Accept: application/vnd.php.serialized; charset=utf-8",
                        "ApiUsername: " . $settings['username'],
                        "ApiToken: " . $settings['token']
                );
            break;
            case "php":
                return array (
                        "Accept: application/vnd.php; charset=utf-8",
                        "ApiUsername: " . $settings['username'],
                        "ApiToken: " . $settings['token']
                );
            break;
            case "csv":
                return array (
                        "Accept: application/csv; charset=utf-8",
                        "ApiUsername: " . $settings['username'],
                        "ApiToken: " . $settings['token']
                );
            break;
            default:
                return array (
                        "Accept: application/json; charset=utf-8",
                        "ApiUsername: " . $settings['username'],
                        "ApiToken: " . $settings['token']
                );
            break;
        }
    }

    private function DecodeResult ($input = '')
    {
        $settings = $this->getSettings();
        switch($settings["format"])
        {
            case "xml":
                // @todo implement parser
                return $input;
            break;
            case "serialized":
                // @todo implement parser
                return $input;
            break;
            case "php":
                // @todo implement parser
                return $input;
            break;
            case "csv":
                // @todo implement parser
                return $input;
            break;
            default:
                return json_decode($input, TRUE);
            break;
        }
    }

    private function getSettings(){

        $settings = array();
        // username from MailPlatform to access the API
        $settings['username'] = USERNAME;

        // token from MailPlatform to access the API
        $settings['token'] = TOKEN;

        // the responce format that is returned (json, xml)
        $settings['format'] = FORMAT;

        return $settings;
    }

    public function GetLists(){

        $url = URL . '/Users/GetLists';
        $params = array ();
        return $this->MakeGetRequest($url, $params);
    }

    public function CreateList($listName = false, $descriptiveName = false, $mobile_prefix = false, $contact_fields = array()) {

        $url = URL . '/Lists/CreateList';

        if($listName && $descriptiveName)
        {
            $params = array(
                    'listName' => $listName,
                    'descriptiveName' => $descriptiveName,
                    'mobile_prefix' => $mobile_prefix,
                    'contact_fields' => $contact_fields
            );
            return $this->MakePostRequest($url, $params);
        }
        return "Unsuccessful request";
    }

    public function AddSubscriberToList($listid = false, $emailaddress = false, $mobile = false, $mobilePrefix = false, $contactFields = array(), $add_to_autoresponders = true, $skip_listcheck = false, $confirmed = true)
    {
        $url = URL . '/Subscribers/AddSubscriberToList';
        if(($emailaddress || ($mobile && $mobilePrefix)) && $listid)
        {
            $params = array(
                    'listid' => $listid,
                    'emailaddress' => $emailaddress,
                    'mobile' => $mobile,
                    'mobilePrefix' => $mobilePrefix,
                    'contactFields' => $contactFields,
                    'add_to_autoresponders' => $add_to_autoresponders,
                    'skip_listcheck' => $skip_listcheck,
                    'confirmed' => $confirmed
            );
            return $this->MakePostRequest($url, $params);
        }
        return "Unsuccessful request";
    }


    
}