<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aweber_email_platform extends CI_Model {

    public function __construct() {
        parent::__construct();
        require_once(FCPATH.'vendor/autoload.php');
    }

    
    function AddEmailToAweberSubscriberList($emailId,$language,$ipAddress,$mobile = '',$name = '',$aweberListId){

        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();

            if ($aweberListId == 1 || $aweberListId == 2 || $aweberListId == 5 || $aweberListId == 6 || $aweberListId == 7 || $aweberListId == 14) {
                $account = "1";
            }else if($aweberListId == 3 || $aweberListId == 4 || $aweberListId == 8){
                $account = "2";
            }else if($aweberListId == 10 || $aweberListId == 15){
                $account = "3";
            }else if($aweberListId == 9 || $aweberListId == 11 || $aweberListId == 13){
                $account = "4";
            }else if($aweberListId == 12){
                $account = "5";
            }

            // Get account Information
            $condition = array("id" => $account);
            $is_single = true;
            $accountData = GetAllRecord(AWEBER_ACCOUNTS,$condition,$is_single);

            //below both use everywhere        
            $list_id = getListIdForAllAweber($aweberListId,$language);
            $account_id = $accountData['account_id'];
            $accessToken = $accountData['accessToken'];

            $newsubscriberUrl = AWEBER_API_PATH.'accounts/'.$account_id.'/lists/'.$list_id.'/subscribers';

            $data = array(
                'ad_tracking' => generateRandomString(10),
                'email' => $emailId,
                'name' => $name,
                'ip_address' => $ipAddress,
                'custom_fields' => array('phone no' => $mobile)
            );
            $body = $client->post($newsubscriberUrl, [
                    'json' => $data, 
                    'headers' => ['Authorization' => 'Bearer ' . $accessToken]
            ]);
            
            $responseCode = $body->getStatusCode();                
            if ($responseCode == 201) {
                $subscriberUrl = $body->getHeader('Location')[0];
                $subscriberResponse = $client->get($subscriberUrl,
                    ['headers' => ['Authorization' => 'Bearer ' . $accessToken]])->getBody();
                $subscriber = json_decode($subscriberResponse, true);
                $subscriber_id = $subscriber['id'];    
                return array("result" => "success","data" => array("id" => $subscriber_id));
            } else {
                return array("result" => "error","error" => array("msg" => "Bad Request or duplicate email Id"));
            }
        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $statusCode = $e->getResponse()->getStatusCode();
            if($statusCode == "400"){
                return array("result" => "error","error" => array("msg" => $statusCode." - Subscriber already subscribed"));
            }else{
                return array("result" => "error","error" => array("msg" => $statusCode." - Bad Request"));
            }
        }
    }
}