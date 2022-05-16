<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_liveurl_repost extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {
        //get liveurl repost data
        $condition = array(
            'status' => 0
        );
        $limit = 1;
        $is_single = false;
        $liveReposts = JoinData(LIVEURL_REPOST,$condition,USER,"userId","userId","",$is_single,array(),"liveurl_repost.*,user.transactionId",$limit);   

        foreach($liveReposts as $liveRepost){
            //get live url data
            $transactionId = $liveRepost['transactionId'];
            $condition = array('campaignId' => $liveRepost['campaignId']);
            $order_by = array('liveurlid' => 'Desc');
            $is_single = true;
            $getLiveurl = GetAllRecord(LIVEURL,$condition,$is_single,array(),array(),array($order_by));
            if(empty($transactionId)){
                $transactionId = null;
            }
            $liveUrlResponse = getLiveurlResponse($getLiveurl,$liveRepost['userId'],$transactionId);
            
            // update data : history for send data to provider
            $liveRepostCondition = array('liveUrlRepostId' => $liveRepost['liveUrlRepostId']);
            $is_insert = false;
            $liveRepostArr = array(
                'status'     => 1
            );
            ManageData(LIVEURL_REPOST,$liveRepostCondition,$liveRepostArr,$is_insert);
            
            // update data : history for send data to provider
            $historyCondition = array('historyId' => $liveRepost['historyId']);
            $is_insert = false;
            $historyArr = array(
                'response'     => json_encode($liveUrlResponse),
                'status'      => ($liveUrlResponse['approved'] == true) ? 1 : 0,            
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s')
            );
            ManageData(HISTORY_SEND_DATA_TO_PROVIDER,$historyCondition,$historyArr,$is_insert);       
            
            //  Log of liveurl repost
            $data = array(
                'liveUrlRepostId' => $liveRepost['liveUrlRepostId'],
                'historyId'       => $liveRepost['historyId'],
                'campaignId'      => $liveRepost['campaignId'],
                'userId'          => $liveRepost['userId'],
                'response'        => json_encode($liveUrlResponse),
                'transactionId'   => $transactionId
            );
            $logPath    = FCPATH . "log/liveurl_repost/";
            $fileName   = date("Y-m-d").".txt"; 
            $logFile    = fopen($logPath.$fileName,"a");
            $logData    =  json_encode($data) . "\ntimestamp:". time()."\n--------------------\n";
            fwrite($logFile,$logData);
            fclose($logFile);
        }
    }
}