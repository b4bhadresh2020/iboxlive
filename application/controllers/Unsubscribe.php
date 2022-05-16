<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unsubscribe extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    

    function manage($campaignBackUrl = '') {

        $urlInParts = explode('-', $campaignBackUrl);
        $getLastTwoElementInArr = array_slice($urlInParts,-2,2);
        $randomStr  = $getLastTwoElementInArr[0];
        $campaignId = $getLastTwoElementInArr[1];
        
        $condition = array(
            'campaignId' => $campaignId,
            'randomStr'  => $randomStr
        );
        $is_single = true;
        $getCampaignId = GetAllRecord(CAMPAIGN,$condition,true,array(),array(),array(),'campaignId,language,appNameIndex');

        if (count($getCampaignId) > 0) {

            $campaignId     = $getCampaignId['campaignId'];
            $language       = $getCampaignId['language'];
            $callbackParam  = $campaignId.'_'.$language; // Because I want to pass 2 variables in callback function
            $appNameIndex   = $getCampaignId['appNameIndex'];

            if ($appNameIndex == 0) {
                $placeHolder = 'Email Id *';
            }else if($appNameIndex == 1){
                $placeHolder = 'Mobile Number *';
            }else if($appNameIndex == 2){
                $placeHolder = 'Mobile Number *';
            }


            if (@$this->input->post('submit')) {

                if ($appNameIndex == 0) {
                    
                    $this->form_validation->set_rules('emailId', '', 'callback_email_validation['.$callbackParam.']');

                }else if($appNameIndex == 1){

                    $this->form_validation->set_rules('emailId', '', 'callback_mobile_validation['.$callbackParam.']');

                }else if($appNameIndex == 2){

                    $this->form_validation->set_rules('emailId', '', 'callback_mobile_validation['.$callbackParam.']');
                    
                }


                if ($this->form_validation->run() != FALSE) {

                    //add record in unsubscription table
                    $emailId = $mobileNumber = $this->input->post('emailId');

                    //make user as unsubscribed with use of campaignId and emailId
                    $condition = array(
                        'campaignId' => $campaignId,
                        'emailId' => $emailId
                    );
                    $is_add = false;   
                    $udpateArr = array('isUnsubscribed' => 1);
                    $updateResponse = ManageData(USER,$condition,$udpateArr,$is_add);

                    if ($updateResponse == 1) {

                        $errorCode = $language.'_Unsubscribed';
                        $unsubscribedError = $this->getErrorInOtherLanguage($language,$errorCode);
                        SetMsg('suc_msg',$unsubscribedError);

                    }else{

                        $errorCode = $language.'_Sys_Pro';
                        $sysProblemError = $this->getErrorInOtherLanguage($language,$errorCode);
                        SetMsg('error_msg',$sysProblemError);
                    }

                    redirect('unsubscribe/manage/'.$campaignBackUrl);

                }
            }

            $data['campaignBackUrl']  = $campaignBackUrl;
            $data['pageDisplayTitle'] = 'Unsubscribe';
            $data['suc_msg'] = GetMsg('suc_msg');
            $data['error_msg'] = GetFormError();
            $data['placeHolder'] = $placeHolder;

            $this->load->view('unsubscribe/addEdit',$data);

        }else{
            $data['pageDisplayTitle'] = '404 Error';
            $data['error_msg'] = 'No campaign Found';
            $this->load->view('errors/html/ex_404',$data); 
        }

    }



    function email_validation($emailId,$callbackParam){
        
        $splitParam = explode('_', $callbackParam);
        $campaignId = $splitParam[0];
        $language   = $splitParam[1];

        if ($emailId == '') {

            $errorCode = $language.'_Empty_Email';
            $emailBlankError = $this->getErrorInOtherLanguage($language,$errorCode); 
            $this->form_validation->set_message('email_validation',$emailBlankError);
            return FALSE;

        }else{

            if (!filter_var(trim($emailId), FILTER_VALIDATE_EMAIL)) {

                $errorCode = $language.'_Valid_Email';
                $emailValidError = $this->getErrorInOtherLanguage($language,$errorCode);
                $this->form_validation->set_message('email_validation', $emailValidError);
                return false;

            }else{
                //check user is registred or not
                $condition = array(
                    'campaignId' => $campaignId,
                    'emailId' => $emailId
                );
                $is_single = true;
                $checkUserRegisteredOrNot = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'userId');

                if (count($checkUserRegisteredOrNot) > 0) {
                    return true;
                }else{

                    $errorCode = $language.'_UnReg';
                    $notRegistredError = $this->getErrorInOtherLanguage($language,$errorCode); 
                    $this->form_validation->set_message('email_validation', $notRegistredError);
                    return false;
                }
            } 
        }
    }



    function mobile_validation($mobileNumber,$callbackParam){
        
        $splitParam = explode('_', $callbackParam);
        $campaignId = $splitParam[0];
        $language   = $splitParam[1];

        if ($mobileNumber == '') {

            $errorCode = $language.'_Empty_Mobile';
            $mobileBlankError = $this->getErrorInOtherLanguage($language,$errorCode); 
            $this->form_validation->set_message('mobile_validation',$mobileBlankError);
            return FALSE;

        }else{

            
            //check user is registred or not
            $condition = array(
                'campaignId' => $campaignId,
                'emailId' => $mobileNumber
            );
            $is_single = true;
            $checkUserRegisteredOrNot = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'userId');

            if (count($checkUserRegisteredOrNot) > 0) {
                return true;
            }else{

                $errorCode = $language.'_UnReg';
                $notRegistredError = $this->getErrorInOtherLanguage($language,$errorCode); 
                $this->form_validation->set_message('mobile_validation', $notRegistredError);
                return false;
            }
            
        }
    }



    function getErrorInOtherLanguage($errorLanguage,$errorCode){

        $condition = array(
            'errorLanguage' => $errorLanguage,
            'errorCode' => $errorCode
        );
        $is_single = true;
        $errorMsg = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');

        return $errorMsg['errorInOther'];
    }

}
