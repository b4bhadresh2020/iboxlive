<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_egoi extends CI_Model {

	public function __construct() {
        parent::__construct();
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
        return array ("Accept: application/json; charset=utf-8");
    }

    private function DecodeResult ($input = '')
    {
        return json_decode($input, TRUE);
    }
    

    function AddUserDataToEgoiSubs($emailId,$language,$ipAddress,$mobileNumber,$firstName,$lastName,$eGoiIndex){

        $url = 'http://api.e-goi.com/v2/rest.php';
        $listID = $this->getListId($eGoiIndex,$language);

        $phone = '';

        if (@$mobileNumber != '') {
            $country_code = $this->get_country_code($language);
            $phone = $country_code.'-'.$mobileNumber;
        }

        $params = array(
                'method' => 'addSubscriber',
                'type' => 'json',
                'functionOptions[apikey]' => '4f3d8708f731bbd49da618fa1ec36e67283e5ee3',
                'functionOptions[listID]' => $listID,
                'functionOptions[email]' => $emailId,
                'functionOptions[first_name]' => $firstName,
                'functionOptions[last_name]' => $lastName,
                'functionOptions[cellphone]' => $phone
        );
        return $this->MakePostRequest($url, $params);
    }

    private function getListId($eGoiIndex,$country){
        
        $ctry = array( 
            '0' => array('DK' => 2, 'SE' => 6, 'NO' => 5, 'FI' => '', 'UK' => '', 'DE' => '', 'CA' => '', 'AU' => '') 
        );

        return $ctry[$eGoiIndex][$country];

    }


    private function get_country_code($country){
        $countriesWithCode = array('DK'=>'45','SE'=>'46','NO'=>'47','FI'=>'358','UK'=>'44','AU'=>'43','DE' => '49','CA' => '1');
        return $countriesWithCode[$country];
    }



}