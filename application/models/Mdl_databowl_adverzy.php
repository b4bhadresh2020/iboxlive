<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_databowl_adverzy extends CI_Model {

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


    function AddUserDataToDataBowlAdvLeads($emailId,$language,$ipAddress,$mobile = '',$name = '',$lastName,$adverzyIndex){

        //get cid and sid
        $getIds = $this->getCIdAndSId($adverzyIndex,$language);
        $cid = $getIds['cid'];
        $sid = $getIds['sid'];

        $url = 'https://adverzy.databowl.com/api/v1/lead';
        $params = array(
                'cid' => $cid,
                'sid' => $sid,
                'f_1_email' => $emailId,
                'f_3_firstname' => $name,
                'f_4_lastname' => $lastName,
                'f_15_mobile' => $mobile,
                'f_17_ipaddress' => $ipAddress
        );
        return $this->MakePostRequest($url, $params);
    }  


    function getCIdAndSId($adverzyIndex,$language){

        $arr = array( 
            '0' => array(
                'DK' => array(
                            'cid' => 1125, 
                            'sid' => 133 
                        ), 
                'FI' => array(
                            'cid' => 1126, 
                            'sid' => 133 
                        ), 
                'NO' => array(
                            'cid' => 1123, 
                            'sid' => 133 
                        ), 
                'SE' => array(
                            'cid' => 1124, 
                            'sid' => 133 
                        ) 
                )
        );

        return $arr[$adverzyIndex][$language];
    } 


    
}