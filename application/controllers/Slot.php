<?php
use function GuzzleHttp\json_decode;
defined('BASEPATH') OR exit('No direct script access allowed');

class Slot extends CI_Controller {

    public function __construct() {
        parent::__construct();
        require_once(FCPATH.'vendor/autoload.php');
    }


    function userRegistration(){
        
        $transactionId = $this->input->post('transactionId');
        $campaignId = decrypt($this->input->post('campaignId'));
        $mobileNumber = $this->input->post('mobileNumber');
        $userInfoTextVal = $this->input->post('userInfoTextVal');
        $ipAddress = $this->input->post('ipAddress');
        $browser = $this->input->post('browser');
        $device = $this->input->post('device');
        $os = $this->input->post('os');
        $hostName = $this->input->post('hostName');
        $areaCode = $this->input->post('areaCode');
        $isWinningLosingForm = 0;
        $emailId = '';
        $emailArrInAllLang = getEmailArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$emailArrInAllLang)) {
                $emailId = $textValue['value'];
                break;
            }
        }
     
        /**
            - Below code is for search option in admin panel
            - It's hard to manage search in json in db as we stored all data in json string in db.
            - So I simply make one more field in db and store all the data in normal string format for
                easy to search.
        */
        $userInfoStrFormat = '';
        $firstNameInAllLang = getFirstNameArr();
        $firstname = "";
        foreach ($userInfoTextVal as $userInfo) {

            if ($userInfo['value'] != '') {
                if(in_array($userInfo['name'], $firstNameInAllLang)) {
                    $firstname = $userInfo['value'];
                }
                if ($userInfoStrFormat == '') {
                    $userInfoStrFormat .= $userInfo['value'];
                }else{
                    $userInfoStrFormat .= '+' . $userInfo['value'];
                }    
            }
        }
        
       
        /* end search option string format*/

        //check first if user lead limit exceed or not
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $getCampaingDetail = GetAllRecord(CAMPAIGN,$condition,$is_single);
        
        $registrations = $getCampaingDetail['registrations'];
        $numberOfLeads = $getCampaingDetail['numberOfLeads'];
        $isUnlimitedLeads = $getCampaingDetail['isUnlimitedLeads'];
        $language = $getCampaingDetail['language'];
        $country = $getCampaingDetail['country'];
        $isLiveApiOn = $getCampaingDetail['isLiveApiOn'];
        $campaignName = $getCampaingDetail['campaignName'];    
        $isEnableIntegromat = $getCampaingDetail['isEnableIntegromat'];    

        /* $is_single = true;
        $condition = array('countryName' => $getCampaingDetail['country']);
        $countryData = GetAllRecord(COUNTRIES,$condition,true);

        if(count($countryData) > 0 && $countryData['countryCode'] !=""){
            $mobileNumber = $countryData['countryCode'].$mobileNumber;
        } */

        if (($registrations == $numberOfLeads || $registrations > $numberOfLeads) && $isUnlimitedLeads != 1) {
            //Registration limit has been exceeded.
            echo 3; // limit exceeded
        }else{

            // Now do registration

            //check if mobile number is exist or not

            /**
            	here I have given value of mobile number to email field
            	- because in scratch, email id is unique for user and 
            		in slot mobile number is unique so I did not make a separate field for each.
            	- so in both case I have use email id in table.
            	- It's too late when I think about change the name of the field. so I didnt changed.  
            */

            $condition = array('campaignId' => $campaignId,'emailId' => $emailId);
            $is_single = true;
            $getRecord = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'userId');


            // Below is code for check mobile validation live (use this if condition in below else if)
            if(!empty($mobileNumber)){
                $isValidMobileNumber = IsValidMobileNumber($mobileNumber,$country,$isLiveApiOn);      
            }

            if (count($getRecord) > 0) {
                echo 1; // email is already exist
            }else if ($country == "NL" && !empty(($mobileNumber) && $isValidMobileNumber['status'] == 0)){
                echo 4; // mobile number is not valid as per API
            }else{
                if($country == "CA" && !empty($mobileNumber)){
                    $fullMobileNumber = $areaCode.$mobileNumber;
                    $mobileArrInAllLang = getMobileArr();
                    foreach ($userInfoTextVal as $index => $textValue) {
                        if (in_array($textValue['name'],$mobileArrInAllLang)) {
                            $userInfoTextVal[$index]['value'] = $fullMobileNumber;
                            break;
                        }
                    }
                }
                $other = json_encode($userInfoTextVal);
                //insert record
                $condition = array();
                $is_insert = true;
                $insertArr = array(
                    'campaignId'=> $campaignId,
                    'emailId'   => $emailId,
                    'other'     => $other,
                    'otherInString' => $userInfoStrFormat,
                    'ipAddress' => $ipAddress,
                    'browser' => $browser,
                    'device' => $device,
                    'os' => $os,
                    'hostName'  => $hostName,
                    'transactionId' => $transactionId
                );
                $insertedId = ManageData(USER,$condition,$insertArr,$is_insert);

                if ($insertedId > 0) {
                    // get detail of live url from motherdb
                    $county = $getCampaingDetail['country'];
                    if($county == 'NO') {
                        $county = 'NOR';
                    }
                    try {
                        // create guzzle client 
                        $client = new GuzzleHttp\Client();
                        $motherdbUrl = "https://suprdat.dk/Api_get_liveurl?country=".$county."&dataSourceType=1";
                        $body = $client->get($motherdbUrl);
                        $response = $body->getBody()->getContents();
                        $dResponse = json_decode($response);

                        if(!empty($dResponse)){
                            $apikey = $dResponse->apikey;
                            if(!empty($apikey)) {
                                try{
                                    $signupDate = date('Y-m-d');
                                    $source = 'inboxgame(slot)';

                                    $liveDeliveryUrl = "https://suprdat.dk/live_delivery_api/rest?apikey=".$apikey."&emailId=".$emailId."&name=".$firstname."&signupDate=".$signupDate."&ip=".$ipAddress."&source=".$source."&country=".$county;
                                    $liveDeliveryBody = $client->get($liveDeliveryUrl);
                                    $result = $liveDeliveryBody->getBody()->getContents();
                                    $inbox_fblead = (array)(json_decode($result));
                                    if($inbox_fblead['inbox_fblead']->result == 'success') {
                                        $is_insert = false;
                                        $condition = array('userId' => $insertedId);
                                        $updateArr = array('isSendToMotherdb' => 1);

                                        ManageData(USER,$condition,$updateArr,$is_insert);
                                    }
                                } catch(\GuzzleHttp\Exception\ClientException $e) {
                                    return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
                                }
                            }
                        }
                    } catch(\GuzzleHttp\Exception\ClientException $e) {
                        return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
                    }
                    
                    // send data to integromat  
                    if($isEnableIntegromat){
                        sendLeadInIntegromat($insertedId,$firstname,$emailId,$country); 
                    }

                    /* count +1 in registrations and update it */
                    $is_insert = false;
                    $newCount  = $registrations + 1;
                    $condition = array('campaignId' => $campaignId);
                    $updateArr = array('registrations' => $newCount);
                    
                    ManageData(CAMPAIGN,$condition,$updateArr,$is_insert);

                    //user from data language wise store in arr
                    $userInfo = $this->getLanguageCheckRegisterData($userInfoTextVal);

                    //send details to third party website

                    $thirdPartyMailMarketing = $getCampaingDetail['thirdPartyMailMarketing'];

                    if ($thirdPartyMailMarketing != '') {
                        
                        $thirdPartyMailMarketing = \json_decode($thirdPartyMailMarketing,TRUE);

                        $thirdPartyMailNameArr = array( 
                            '0' => 'emailPlatformResponse',
                            '1' => 'aweberResponse',
                            '2' => 'aweberSplitResponse',
                            '3' => 'aweberFelinaFinansResponse',
                            '4' => 'aweberUnelmalainaResponse',
                            '5' => 'dkFreeCasinoDealNSplitResponse',
                            '6' => 'noFreeCasinoDealNSplitResponse',
                            '7' => 'fiFreeCasinoDealNSplitResponse',
                            '8' => 'aweberVelkomstgavenResponse',
                            '9' => 'aweberNoGetspinnResponse',
                            '10' => 'aweberSeFrejasmailResponse',
                            '11' => 'aweberCaGetspinnResponse',
                            '12' => 'aweberCaAbbieResponse',
                            '13' => 'aweberNzGetspinnResponse',
                            '14' => 'aweberNzFreeCasinoDealResponse',
                            '15' => 'aweberDkSignesmailResponse',
                            '16' => 'mp_se_gratispresent',
                            '17' => 'mp_no_velkomstgaven',
                            '18' => 'mp_dk_velkomstgaven',
                            '19' => 'mp_fi_unelmalaina',
                            '20' => 'mp_freecasinodeal_ca',
                            '21' => 'mp_freecasinodeal_fi',
                            '22' => 'mp_freecasinodeal_no',
                            '23' => 'mp_freecasinodeal_no',
                            '24' => 'mailjet_velkomstgaven_dk',
                            '25' => 'mailjet_gratispresent_SE',
                            '26' => 'mailjet_velkomstgaven_nor',
                            '27' => 'ac_velkomstgaven_no',
                            '28' => 'ontraport_gratispresentmail_se',
                            '29' => 'ontraport_freecasinodeal1_no',
                            '30' => 'ontraport_freecasinodeal1_fi',
                            '31' => 'ontraport_velkomstgavenmail_dk',
                            '32' => 'ontraport_freecasinodeal1_ca',
                            '33' => 'ontraport_freecasinodeal1_nz',
                            '34' => 'ac_gratispresent_se',
                            '35' => 'ac_frejasmail_se',
                            '36' => 'ac_unelmalaina_fi',
                            '37' => 'ac_signesmail_nor',
                            '38' => 'ac_katariinasmail_fi',
                            '39' => 'ac_velkomstgaven_dk',
                            '40' => 'ac_signesmail_dk',
                            '41' => 'es_abbiesmail2com_ca',
                            '42' => 'es_ashleysmail1com_nz',
                            '43' => 'es_felinafinans_se',
                            '44' => 'es_frejasmail2_se',
                            '45' => 'es_katariinasmail1com_fi',
                            '46' => 'es_signesmail1_dk',
                            '47' => 'es_signesmail2com_no',
                            '48' => 'es_kaare_no_freecasinodeal',
                            '49' => 'es_kaare_fi_freecasinodeal',
                            '50' => 'es_kaare_ca_freecasinodeal',
                            '51' => 'es_kaare_nz_freecasinodeal',
                            '52' => 'es_kaare_ca_getspinn',
                            '53' => 'es_kaare_nz_getspinn',
                            '54' => 'es_kaare_no_getspinn',
                            '55' => 'es_kaare_gratispresentmail_se',
                            '56' => 'es_kaare_unelmalainamail_fi',
                            '57' => 'es_kaare_velkomstgaven_no',
                            '58' => 'es_kaare_dk_velkomstgaven',
                            '59' => 'cr_velkomstgaven_dk',
                            '60' => 'cr_cathrinesmail_ca',
                            '61' => 'cr_cathrinesmail_dk',
                            '62' => 'cr_cathrinesmail_fi',
                            '63' => 'cr_cathrinesmail_no',
                            '64' => 'cr_cathrinesmail_nz',
                            '65' => 'cr_cathrinesmail_se',
                            '66' => 'cr_velkomstgaven_no',
                            '67' => 'cr_gratispresent_se',
                            '68' => 'cr_unelmalaina_fi',
                            '69' => 'os_se_gratispresent',
                            '70' => 'os_no_velkomstgaven',
                            '71' => 'os_fi_unelmalaina',
                            '72' => 'os_dk_velkomstgaven',
                            '73' => 'mailjet_signesmail_dk',
                            '74' => 'mailjet_signesmail2_no',
                            '75' => 'mailjet_produkttest_se',
                            '76' => 'ac_velkomstgaven1_no',
                            '77' => 'ontraport_velkomstgaven_dk',
                            '78' => 'ontraport_velkomstgaven_com',
                            '79' => 'ontraport_gratispresent_se',
                            '80' => 'ontraport_unelmalaina_fi',
                            '81' => 'ac_gratisprodukttester_com_no',
                            '82' => 'ac_dagenspresent_se',
                            '83' => 'ontraport_velkomst_dk',
                            '84' => 'ontraport_signe_dk',
                            '85' => 'ontraport_dagens_se',
                            '86' => 'ontraport_felina_se',
                            '87' => 'ontraport_venla_fi',
                            '88' => 'ontraport_katariina_fi',
                            '89' => 'ontraport_allfree_ca',
                            '90' => 'ontraport_abbie_ca',
                            '91' => 'ontraport_ashley_nz',
                            '92' => 'ontraport_produkt_no',
                            '93' => 'mailjet_dagenspresent_se',
                            '94' => 'mailjet_velkomstgavenvip_dk',
                            '95' => 'mailjet_velkomstgavenvip_no',
                            '96' => 'ac_gratispresent1_com',
                            '97' => 'sendgrid_ca_abbiesmail',
                            '98' => 'sendgrid_nz_ashleysmail',
                            '99' => 'sendgrid_nz_allfreeca',
                            '100' => 'sendgrid_ca_allfreeca',
                            '101' => 'sendgrid_katariinasmail',
                            '102' => 'sendgrid_velkomstgaven_no',
                            '103' => 'sendgrid_gratispresent_se',
                            '104' => 'sendgrid_signesmail_no',
                            '105' => 'sendgrid_dagenspresent_se',
                        );
                        foreach ($thirdPartyMailMarketing as $value) {
                            $providerDetail = explode("_",$value);
                            if($value != "0"){
                                $provider = $providerDetail[1]; // providerID
                                $tag = $this->getTagNameByProvider($campaignId,$provider);
                            }

                            if($providerDetail[0] == MARKETING_PLATFORM) {
                                // send data to marketing platform
                                //$provider = $providerDetail[1]; // providerID
                                // $response = $this->addEmailToMarketingPlatform($userInfoTextVal,$emailId,$provider);
                                //$response = json_encode(array("result" => "error","error" => array("msg" => "Account Removed")));
                                $providerListId = 11;
                                $value = getMarketingPlatformResponseID($provider);
                            } else if($providerDetail[0] == MAILJET) {
                                // send data to mailjet
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToMailjet($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 9;
                                $value = getMailjetResponseID($provider);
                            } else if($providerDetail[0] == ACTIVE_CAMPAIGN) {
                                // send data to active campaign
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToactiveCampaign($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 13;
                                $value = getActiveCampaignResponseID($provider);
                            } else if($providerDetail[0] == ONTRAPORT) {
                                // send data to ontraport
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToOntraport($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 12;
                                $value = getOntraportResponseID($provider);
                            } else if($providerDetail[0] == EXPERT_SENDER) {
                                // send data to expert sender
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToExpertSender($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 14;
                                $value = getExpertSenderResponseID($provider);
                            } else if($providerDetail[0] == CLEVER_REACH) {
                                // send data to clever reach
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToCleverReach($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 15;
                                $value = getCleverReachResponseID($provider);
                            } else if($providerDetail[0] == OMNISEND) {
                                // send data to omnisend
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToOmnisend($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 16;
                                $value = getOmnisendResponseID($provider);
                            }  else if($providerDetail[0] == SENDGRID) {
                                // send data to sendgrid
                                // $provider = $providerDetail[1]; // providerID
                                // //get tag name by provider
                                // $tag = $this->getTagNameByProvider($campaignId,$provider);
                                // $response = $this->addEmailToSendgrid($userInfoTextVal,$emailId,$provider,$tag);
                                $providerListId = 5;
                                $value = getSendgridResponseID($provider);
                            } else if ($value == "0") {
                                //send email to eMailPlateform (third party website)
                                $response = $this->addEmailToSubscriber($emailId,$language);    
                            }else{
                                // $response = $this->addEmailToAweber($userInfoTextVal,$emailId,$language,$ipAddress,$value);
                                $response = json_encode(array("result" => "error","error" => array("msg" => "Account Removed")));
                            } 

                            /** check provider to send data value not 0
                             *   value 0 sent data to email platform
                             */
                            if($value != "0"){
                                /** insert data : queue for send data to provider */
                                $this->addProviderSendDataInQueue($insertedId,$providerListId,$provider,$value,$userInfo,$emailId,$tag);
                            }else{
                                /** update response in user table */
                                $updateArr = array(
                                    $thirdPartyMailNameArr[$value] => $response
                                );
                                $decodedResponse = \json_decode($response,TRUE);
    
                                if ($decodedResponse['result'] == 'success') {
                                    $updateArr['isEmailAddedInThirdParty'] = 1;    
                                    $updateArr['mailResponse'] = $decodedResponse['data']['id'];
                                }else{
                                    $updateArr['isEmailAddedInThirdParty'] = 0;
                                    $updateArr['mailResponse'] = $decodedResponse['error']['msg'];
                                }
                                
                                $updateArr['thirdPartyName'] = $value;
    
                                //update Response in user table
                                $condition = array('userId' => $insertedId);
                                $is_insert = FALSE;
                                ManageData(USER,$condition,$updateArr,$is_insert);
                            }

                        }
                    }

                    // //send detail to Databowl Adverzy
                    // $dataBowlAdverzy = $getCampaingDetail['dataBowlAdverzy'];

                    // if ($dataBowlAdverzy != '') {
                    //     $dataBowlAdverzy = json_decode($dataBowlAdverzy,TRUE);

                    //     //taking forloop for future updation
                    //     foreach ($dataBowlAdverzy as $value) {

                    //         if ($value == 0) {
                                
                    //             $dataBowlAdverzyResponse = $this->addUserDataToDataBowlAdverzy($userInfoTextVal,$language,$ipAddress,$fullMobileNumber,$value);    

                    //             //update response in user table
                    //             $condition = array('userId' => $insertedId);
                    //             $updateArr = array('dataBowlAdverzyResponse' => $dataBowlAdverzyResponse);
                    //             $is_insert = FALSE;
                    //             ManageData(USER,$condition,$updateArr,$is_insert);
                    //         }
                    //     }
                    // }


                    // //send detail to E-goi
                    // $eGoi = $getCampaingDetail['eGoi'];

                    // if ($eGoi != '') {

                    //     $eGoi = json_decode($eGoi,TRUE);

                    //     //taking forloop for future updation
                    //     foreach ($eGoi as $value) {

                    //         if ($value == 0) {
                                
                    //             $eGoiResponse = $this->addUserDataToeGoi($userInfoTextVal,$language,$ipAddress,$fullMobileNumber,$value);    

                    //             //update response in user table
                    //             $condition = array('userId' => $insertedId);
                    //             $updateArr = array('eGoiResponse' => $eGoiResponse);
                    //             $is_insert = FALSE;
                    //             ManageData(USER,$condition,$updateArr,$is_insert);
                    //         }
                    //     }
                    // }

                    // START:: send data to provider - DAB
                    // get liveurl from campaign
                    $condition = array('campaignId' => $campaignId);
                    $order_by = array('liveurlid' => 'Desc');
                    $is_single = true;
                    $getLiveurl = GetAllRecord(LIVEURL,$condition,$is_single,array(),array(),array($order_by));
                    
                    $returnData['is_liveurl_enable'] = (!empty($getLiveurl) && $getLiveurl['is_liveurl_enable'] == 1) ? $getLiveurl['is_liveurl_enable'] : 0;
                    $returnData['campaignId'] = $campaignId;
                    $returnData['userId'] = $insertedId;
                    $returnData['transactionId'] = $transactionId;
                    $returnData['campaignName'] = $campaignName;
                    // END:: send data to provider - DAB
                    echo json_encode($returnData);
                }else{
                    echo 2;    // system problem
                }
            }
        }
    }


    function getSlotStuff(){

        $campaignId = decrypt($this->input->post('campaignId'));
        $emailId = $this->input->post('emailId');
        $isWinningLosingForm = 0;

        if ($emailId != '') {
            
            //check mobile number is available or not
            $condition = array('emailId' => $emailId,'campaignId' => $campaignId);
            $is_single = true;
            $getUserDetail = GetAllRecord(USER,$condition,$is_single);

            if (count($getUserDetail) > 0) {
                
                //check if campaign has extra chance facility
                
                //get campaign detail
                $condition = array('campaignId' => $campaignId);
                $is_single = true;
                $getCampaingDetail = GetAllRecord(CAMPAIGN,$condition,$is_single);
                $secondChancePercentage = 0;

                //check if extra chance percentage is grater than 0 or not.
                $slotGameExtraChanceSeqJson = $getCampaingDetail['slotGameExtraChanceSeq'];

                if ($slotGameExtraChanceSeqJson != '') {

                    $slotExtraChanceSeq = json_decode($slotGameExtraChanceSeqJson,TRUE);

                    if (count($slotExtraChanceSeq) > 0) {
                        if ($slotExtraChanceSeq[3] > 0 ) {
                            $secondChancePercentage = $slotExtraChanceSeq[3]; 
                        }
                    }
                }

                if ($secondChancePercentage > 0) {

                    /*
                        1. check if user is eligible for extra chance or not
                            - If yes then make one random number and check eligibility
                        2. check if user has taken already its second chance or not
                        3. check if hacker is trying to get the second chance or not
                    */
                    

                    if ($getUserDetail['chanceAttempted'] == 0) {
                        
                        //update count 1 in chanceAttempted
                        $condition = array('emailId' => $emailId,'campaignId' => $campaignId);
                        $is_insert = false;
                        $updateArr = array('chanceAttempted' => 1);
                        $updateUserTable = ManageData(USER,$condition,$updateArr,$is_insert);

                        //make one random number between 1 to 100
                        $secondChanceRandom = mt_rand(1,100);

                        //now check if random number is lesser or equal than secondChance percentage

                        if ($secondChanceRandom <= $secondChancePercentage) {

                            //update chance attempted counter as 1 for current user
                            $condition = array('emailId' => $emailId, 'campaignId' => $campaignId);
                            $is_insert = false;
                            $updateArr = array('chanceAttempted' => 1);

                            $updateChance = ManageData(USER,$condition,$updateArr,$is_insert);

                            //make array of second chance
                            $returnData = array('isSecondChance' => 1,'isConfettiOn' => $getCampaingDetail['isConfettiOnSecondChance'],'slotExtraChanceSeq' => $slotExtraChanceSeq);

                            echo json_encode($returnData);

                        }else{
                            //give winning form stuff
                            $isWinningLosingForm = 1;
                        }

                    }else if($getUserDetail['chanceAttempted'] == 1){

                        //update count 2 in chanceAttempted
                        $condition = array('emailId' => $emailId,'campaignId' => $campaignId);
                        $is_insert = false;
                        $updateArr = array('chanceAttempted' => 2);
                        $updateUserTable = ManageData(USER,$condition,$updateArr,$is_insert);

                        $isWinningLosingForm = 1;

                    }else{
                        echo 0; //reload
                    }

                }else{
                    //give winning/losing form stuff
                    $isWinningLosingForm = 1;
                }

                //get winning/losing form data

                if ($isWinningLosingForm == 1) {

                    $slotWinningLosingFormData = $this->getSlotWinningLosingStuff($campaignId);
                    $returnData = array('isSecondChance' => 0,'slotWinLoseFormData' => $slotWinningLosingFormData);
                    
                    echo json_encode($returnData);

                    //if user wins then update in user table
                    if ($slotWinningLosingFormData['state'] == 'win') {
                        $this->declareUserWin($campaignId,$emailId);
                    }
                }


            }else{
                echo 0; //reload
            }

        }else{
            echo 0; // reload
        }
    }

    function loadGameInstant(){
        $campaignId = decrypt($this->input->post('campaignId'));
        $isWinningLosingForm = 0;

        //get campaign detail
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $getCampaingDetail = GetAllRecord(CAMPAIGN,$condition,$is_single);
        $secondChancePercentage = 0;

        //check if extra chance percentage is grater than 0 or not.
        $slotGameExtraChanceSeqJson = $getCampaingDetail['slotGameExtraChanceSeq'];

        if ($slotGameExtraChanceSeqJson != '') {

            $slotExtraChanceSeq = json_decode($slotGameExtraChanceSeqJson,TRUE);

            if (count($slotExtraChanceSeq) > 0) {
                if ($slotExtraChanceSeq[3] > 0 ) {
                    $secondChancePercentage = $slotExtraChanceSeq[3]; 
                }
            }
        }

        if ($secondChancePercentage > 0) {           

            //make one random number between 1 to 100
            $secondChanceRandom = mt_rand(1,100);

            //now check if random number is lesser or equal than secondChance percentage

            if ($secondChanceRandom <= $secondChancePercentage) {

                //make array of second chance
                $returnData = array('isSecondChance' => 1,'isConfettiOn' => $getCampaingDetail['isConfettiOnSecondChance'],'slotExtraChanceSeq' => $slotExtraChanceSeq);

                echo json_encode($returnData);

            }else{
                //give winning form stuff
                $isWinningLosingForm = 1;
            }            

        }else{
            //give winning/losing form stuff
            $isWinningLosingForm = 1;
        }

        //get winning/losing form data

        if ($isWinningLosingForm == 1) {

            $slotWinningLosingFormData = $this->getSlotWinningLosingStuff($campaignId);
            $returnData = array('isSecondChance' => 0,'slotWinLoseFormData' => $slotWinningLosingFormData);
            echo json_encode($returnData);
        }
    }


    function getSlotWinningLosingStuff($campaignId = 0){

        $isWin = 0; // if user wins this will turn into 1
        $isLose = 0; // if user loses this will turn into 1

        //get campaignDetail
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $getCampaingDetail = GetAllRecord(CAMPAIGN,$condition,$is_single);


        $percentage = array();
        $range = array();
        $rangeIndex = 0;

        $slotWinPerDecodedJson = json_decode($getCampaingDetail['slotGameWinSeq'],TRUE);
       /* $slotWinPerDecodedJson = array('slotWinPart1' => array(1,2,3),'slotWinPart2' => array(3,2,1),'slotWinPart3' => array(5,4,3),'slotWinPercentage' => array(33,33,34));*/

        $slotWinPer = $slotWinPerDecodedJson['slotWinPercentage'];
        $slotWinPerCount = count($slotWinPer);

        $randomNum = mt_rand(1,100);

        if ($slotWinPerCount == 1) {
            if($slotWinPer[0] == 0){
                $isLose = 1;
            }else{
                if ($randomNum <= $slotWinPer[0] ) {
                    $isWin = 1;
                }else{
                   $isLose = 1;
                }
            }
        }else{

            /**
                Make an array of all percentage value
            */
            for ($i = 0; $i < $slotWinPerCount; $i++) { 
                $percentage[$i] = $slotWinPer[$i];
            }

            /**
                make range for all percentage value
            */
            for ($i = 0; $i < count($percentage); $i++) { 
                
                if ($i == 0) {
                    $range[$i] = $percentage[$i];
                }else{
                    if ($percentage[$i] == 0) {
                        $range[$i] = 0;
                    }else{
                        $range[$i] = $this->sumOfPercentage($percentage,$i);
                    }
                }
            }

            /**
                Now, use of random number and check it lies in which range 
            */

            for ($i=0; $i < count($range); $i++) { 
                
                if ($randomNum <= $range[$i]) {
                    $rangeIndex = $i;
                    break;
                }
            }    
            $isWin = 1;
        }

        if ($isWin == 1) {
            $slotStuff = $this->getSlotWinStuff($getCampaingDetail,$slotWinPerDecodedJson,$rangeIndex);
            $state = 'win';
        }elseif($isLose == 1){
            $slotStuff = $this->getSlotLoseStuff($getCampaingDetail,$slotWinPerDecodedJson,$rangeIndex);
            $state = 'lose';
        }
        
        $response = array('state' => $state,'slotStuff' => $slotStuff);

        return $response;

    }

    function getSlotWinStuff($campaignDetail,$seqArr,$seqIndex){
       
        $winSeq = array($seqArr['slotWinPart1'][$seqIndex],$seqArr['slotWinPart2'][$seqIndex],$seqArr['slotWinPart3'][$seqIndex]);
        
        $winForm = json_decode($campaignDetail['slotWinningFormDetail'],TRUE);

        $winningFormField = array('isConfettiOnFormSlot','isBgTransparentSlot','isHideScarcityBarSlot','isHideCountDownSlot','slotWinningHeader','slotWinningHeaderBGColor','slotWinningHeaderStyle','slotWinningHeaderFontColor','slotWinningDescriptionBeforeImage','slotWinningDescriptionBeforeImageStyle','slotWinningDescriptionBeforeImageFontColor','slotWinningDescription','slotWinningDescriptionStyle','slotWinningDescriptionFontColor','slotWinningValueDescription','slotWinningValueDescriptionBGColor','slotWinningValueDescriptionStyle','slotWinningValueDescriptionFontColor','slotScarcityBarText','slotScarcityBarBGColor','slotWinningScarcityBarFontStyle','slotWinningScarcityBarFontColor','slotScarcityBarCountDownDays','slotScarcityBarCountDownHours','slotScarcityBarCountDownMinutes','slotWinningButtonText','slotWinningButtonBGColor','slotWinningButtonStyle','slotWinningButtonFontColor','slotWinningButtonLink');

        $winningFormValue = array();
        for ($i=0; $i < count($winningFormField); $i++) { 

            $winningFormValue[$winningFormField[$i]] = $winForm[$winningFormField[$i]][$seqIndex];
        }
        $winningFormValue['slotWinningImageForm'] = $campaignDetail['slotWinningImageForm'.($seqIndex + 1)];

        //add other language in array
        $language = $campaignDetail['language'];
        $otherStuff = $this->getStuffInOtherLanguage($language);

        foreach ($otherStuff as $key => $value) {
            $winningFormValue[$key] = $value;
        }

        $winningFormValue['winSeq'] = $winSeq; 

        return $winningFormValue;
        
    }


    function getSlotLoseStuff($campaignDetail,$seqArr,$seqIndex){

        /*
        * Here,what we have done is 
            1) create an array of all 5 posibilities
            2) remove win sequence element from created array (Because win seqenece will never shown in lose)
            3) Reindex the remain array
            4) Shuffle arr because same part will not shown every time
            5) After shuffle,we make lose sequence and everytime we took first element from shuffled array which is win number
        */
        $slotWinPart1Arr = [1,2,3,4,5];
        $slotWinPart2Arr = [1,2,3,4,5];
        $slotWinPart3Arr = [1,2,3,4,5];

        $slotWinPart1 = $seqArr['slotWinPart1'][$seqIndex];
        $slotWinPart2 = $seqArr['slotWinPart2'][$seqIndex];
        $slotWinPart3 = $seqArr['slotWinPart3'][$seqIndex];
            
        if (($key1 = array_search($slotWinPart1, $slotWinPart1Arr)) !== false) {
            unset($slotWinPart1Arr[$key1]);
            $slotWinPart1Arr = array_values($slotWinPart1Arr);
            shuffle($slotWinPart1Arr);
        }

        if (($key2 = array_search($slotWinPart2, $slotWinPart2Arr)) !== false) {
            unset($slotWinPart2Arr[$key2]);
            $slotWinPart2Arr = array_values($slotWinPart2Arr);
            shuffle($slotWinPart2Arr);
        }

        if (($key3 = array_search($slotWinPart3, $slotWinPart3Arr)) !== false) {
            unset($slotWinPart3Arr[$key3]);
            $slotWinPart3Arr = array_values($slotWinPart3Arr);
            shuffle($slotWinPart3Arr);
        }


        $loseSeq = array($slotWinPart1Arr[0],$slotWinPart2Arr[0],$slotWinPart3Arr[0]);
        
        $loseForm = json_decode($campaignDetail['slotLosingFormDetail'],TRUE);

        $losingFormField = array('isConfettiOnFormSlotLose','isBgTransparentSlotLose','isHideScarcityBarSlotLose','isHideCountDownSlotLose','slotLosingHeader','slotLosingHeaderBGColor','slotLosingHeaderStyle','slotLosingHeaderFontColor','slotLosingDescriptionBeforeImage','slotLosingDescriptionBeforeImageStyle','slotLosingDescriptionBeforeImageFontColor','slotLosingDescription','slotLosingDescriptionStyle','slotLosingDescriptionFontColor','slotLosingValueDescription','slotLosingValueDescriptionBGColor','slotLosingValueDescriptionStyle','slotLosingValueDescriptionFontColor','slotLosingScarcityBarText','slotLosingScarcityBarBGColor','slotLosingScarcityBarFontStyle','slotLosingScarcityBarFontColor','slotLosingScarcityBarCountDownDays','slotLosingScarcityBarCountDownHours','slotLosingScarcityBarCountDownMinutes','slotLosingButtonText','slotLosingButtonBGColor','slotLosingButtonStyle','slotLosingButtonFontColor','slotLosingButtonLink');

        $losingFormValue = array();
        for ($i=0; $i < count($losingFormField); $i++) { 

            $losingFormValue[$losingFormField[$i]] = $loseForm[$losingFormField[$i]][$seqIndex];
        }
        $losingFormValue['slotLosingImageForm'] = $campaignDetail['slotLosingImageForm'.($seqIndex + 1)];

        //add other language in array
        $language = $campaignDetail['language'];
        $otherStuff = $this->getStuffInOtherLanguage($language);

        foreach ($otherStuff as $key => $value) {
            $losingFormValue[$key] = $value;
        }

        $losingFormValue['loseSeq'] = $loseSeq; 

        return $losingFormValue;        
    }

    function sumOfPercentage($percentage = array(),$percentageCount = 0){
        
        $sum = 0;

        for($i = 0; $i <= $percentageCount; $i++){

            if ($percentage[$i] != 0) {
                $sum = $sum + $percentage[$i];
            }
        }

        return $sum;
    }


    function declareUserWin($campaignId,$emailId){

        /**
            In scratch, email id is compulsory
            In slot, mobile number is compulsory
            so, in user table 'emailId' is compulsory field
            so, I take 'mobileNumber' as 'emailId' below
        */

        //set user win in user table
        $condition = array('campaignId' => $campaignId,'emailId' => $emailId );
        $is_insert = false;
        $updateArr = array('isWin' => 1);

        ManageData(USER,$condition,$updateArr,$is_insert);
    }

    function getStuffInOtherLanguage($language = 'UK'){

        $errorCodeArr = array(
            'days'     => $language.'_Days',
            'hours'    => $language.'_Hours',
            'minutes'  => $language.'_Minutes',
            'seconds'  => $language.'_Seconds'
        );

        $cookieDetail = array();
        $is_single = true;

        foreach ($errorCodeArr as $codeKey => $errorCode) {
            $condition = array('errorCode' => $errorCode);
            $getTranslation = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');
            $cookieDetail[$codeKey] = $getTranslation['errorInOther'];
        }

        return $cookieDetail;
    }


    //send email id to third party website (eMailPlatform)
    function addEmailToSubscriber($userInfoTextVal = array(),$language = 'UK'){

        $languageArr = languageThatHasListId();
        $response = array();

        if (in_array($language, $languageArr)) {

            //check if email field is available
            $emailId = '';
            
            $emailArrInAllLang = getEmailArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$emailArrInAllLang)) {
                    $emailId = $textValue['value'];
                    break;
                }
            }

            if ($emailId != '') {
                
                if(isValidEmail($emailId) == 1){

                    $listId = getListId($language);
                    $this->load->model('email_platform');
                    $response = $this->email_platform->AddSubscriberToList($listId, $emailId);
                    
                    if (is_numeric($response)) {
                        $response = array("result" => "success","data" => array("id" => $response));
                    }else{
                        $response = array("result" => "error","error" => array("msg" => $response));
                    }

                }else{
                    $response = array("result" => "error","error" => array("msg" => "Invalid Email Format"));
                }
            }else{
                $response = array("result" => "error","error" => array("msg" => "Email is blank"));
            }

        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not listed in third party mail provider"));
        }

        return json_encode($response);

    }


    
    //send email id to third party website (AWeber)
    function addEmailToAweber($userInfoTextVal = array(), $language='UK',$ipAddress='192.168.0.1',$mobileNumber ='',$aweberListId){
        
        //check if email field is available
        $emailId = '';
        $emailArrInAllLang = getEmailArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$emailArrInAllLang)) {
                $emailId = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }


        if ($emailId != '') {
            
            if(isValidEmail($emailId) == 1){

                $this->load->model('aweber_email_platform');
                $response = $this->aweber_email_platform->AddEmailToAweberSubscriberList($emailId,$language,$ipAddress,$mobileNumber,$firstName,$aweberListId);
                        
            }else{
                $response = array("result" => "error","error" => array("msg" => "Invalid Email Format")); 
            }
        }else{
            $response = array("result" => "error","error" => array("msg" => "Email is blank"));
        }

        return json_encode($response);

    }

    //send email id to third party website (marketing platform)
    function addEmailToMarketingPlatform($userInfoTextVal,$emailId='', $marketingPlatformListId){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $marketingPlatformListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_marketing_platform";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

     //send email id to third party website (mailjet)
    function addEmailToMailjet($userInfoTextVal,$emailId='', $mailjetListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $mailjetListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_mailjet";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Active Campaign)
    function addEmailToactiveCampaign($userInfoTextVal,$emailId='', $activeCampaignListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $activeCampaignListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_active_campaign";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Ontraport)
    function addEmailToOntraport($userInfoTextVal,$emailId='', $ontraportListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $ontraportListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_ontraport";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Expert Sender)
    function addEmailToExpertSender($userInfoTextVal,$emailId='', $expertSenderListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $expertSenderListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_expert_sender";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Clever Reach)
    function addEmailToCleverReach($userInfoTextVal,$emailId='', $cleverReachListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $cleverReachListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_clever_reach";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Omnisend)
    function addEmailToOmnisend($userInfoTextVal,$emailId='', $omnisendListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $omnisendListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_omnisend";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send email id to third party website (Sendgrid)
    function addEmailToSendgrid($userInfoTextVal,$emailId='', $sendgridListId,$tag=''){
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
            }
        }

        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }

        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }

        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }

        $details = [
            'provider' => $sendgridListId,
            'emailId' => $emailId,
            'phone'  => $mobileNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthdate,
            'tag'       => $tag
        ];
        try{
            // Create a Guzzle client
            $client = new GuzzleHttp\Client();
            $subscriberUrl = "https://suprdat.dk/Api_sendgrid";
            $body = $client->post($subscriberUrl, [
                'form_params' => $details, 
            ]); 
            return $body->getBody();
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
        }
    }

    //send data to Databowl Adverzy
    function addUserDataToDataBowlAdverzy($userInfoTextVal,$language='UK',$ipAddress='192.168.0.1',$mobileNumber='',$adverzyIndex){

        $validCountryForAdverzy = countryThasListedInDataBowlAdverzy();

        if (in_array($language,$validCountryForAdverzy) == 'true') {

            //check if mobile number is available
            $mobileNumber = '';
            $mobileArrInAllLang = getMobileArr();
            foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
                }
            }
        
            //check if email field is available
            $emailId = '';
            $emailArrInAllLang = getEmailArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$emailArrInAllLang)) {
                    $emailId = $textValue['value'];
                    break;
                }
            }

            //check if first name is available
            $firstName = '';
            $firstNameInAllLang = getFirstNameArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$firstNameInAllLang)) {
                    $firstName = $textValue['value'];
                    break;
                }
            }

            //check if last name is available
            $lastName = '';
            $lastNameInAllLang = getLastNameArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$lastNameInAllLang)) {
                    $lastName = $textValue['value'];
                    break;
                }
            }

            if ($emailId != '') {
                
                if(isValidEmail($emailId) == 1){

                    $this->load->model('mdl_databowl_adverzy');
                    $response = $this->mdl_databowl_adverzy->AddUserDataToDataBowlAdvLeads($emailId,$language,$ipAddress,$mobileNumber,$firstName,$lastName,$adverzyIndex);
                            
                }else{
                    $response = array("result" => "error","error" => array("msg" => "Invalid Email Format"));
                }
            }else{
                $response = array("result" => "error","error" => array("msg" => "Email is blank"));
            }

        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not defined in databowl Adverzy"));
        }

        return json_encode($response);

    }


    //send data to eGoi
    function addUserDataToeGoi($userInfoTextVal,$language='UK',$ipAddress='192.168.0.1',$mobileNumber='',$eGoiIndex){

        $validCountryForEgoi = countryThasListedInEgoi();

        if (in_array($language,$validCountryForEgoi) == 'true') {

            //check if mobile number is available
            $mobileNumber = '';
            $mobileArrInAllLang = getMobileArr();
            foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$mobileArrInAllLang)) {
                $mobileNumber = $textValue['value'];
                break;
                }
            }
            
            //check if email field is available
            $emailId = '';
            $emailArrInAllLang = getEmailArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$emailArrInAllLang)) {
                    $emailId = $textValue['value'];
                    break;
                }
            }

            //check if first name is available
            $firstName = '';
            $firstNameInAllLang = getFirstNameArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$firstNameInAllLang)) {
                    $firstName = $textValue['value'];
                    break;
                }
            }

            //check if last name is available
            $lastName = '';
            $lastNameInAllLang = getLastNameArr();
            foreach ($userInfoTextVal as $textValue) {
                if (in_array($textValue['name'],$lastNameInAllLang)) {
                    $lastName = $textValue['value'];
                    break;
                }
            }

            if ($emailId != '') {
                
                if(isValidEmail($emailId) == 1){

                    $this->load->model('mdl_egoi');
                    $response = $this->mdl_egoi->AddUserDataToEgoiSubs($emailId,$language,$ipAddress,$mobileNumber,$firstName,$lastName,$eGoiIndex);
                            
                }else{
                    $response = array("result" => "error","error" => array("msg" => "Invalid Email Format"));
                }
            }else{
                $response = array("result" => "error","error" => array("msg" => "Email is blank"));
            }

        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not defined in databowl Adverzy"));
        }

        return json_encode($response);

    }

    //get provider by tag name
    public function getTagNameByProvider($campaignId,$provider){
        $condition =  array(
            "campaignId" => $campaignId,
            "listId"     => $provider
        );
        $getTagName = GetAllRecord(CAMPAIGN_TAGES,$condition, true,array(), array(), array());
        return  (!empty($getTagName)) ? $getTagName['tagName'] : '';
    }

    // convert language wise register data 
    public function getLanguageCheckRegisterData($userInfoTextVal){
        
        //check if first name is available
        $firstName = '';
        $firstNameInAllLang = getFirstNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$firstNameInAllLang)) {
                $firstName = $textValue['value'];
                break;
            }
        }
        
        //check if last name is available
        $lastName = '';
        $lastNameInAllLang = getLastNameArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$lastNameInAllLang)) {
                $lastName = $textValue['value'];
                break;
            }
        }
        
        // check if birthdate is available
        $birthdate = '';
        $birthdateInAllLang = getBirthdateArr();
        foreach ($userInfoTextVal as $textValue) {
            if (in_array($textValue['name'],$birthdateInAllLang)) {
                $birthdate = $textValue['value'];
                break;
            }
        }
        
        //check if mobile number is available
        $mobileNumber = '';
        $mobileArrInAllLang = getMobileArr();
        foreach ($userInfoTextVal as $textValue) {
        if (in_array($textValue['name'],$mobileArrInAllLang)) {
            $mobileNumber = $textValue['value'];
            break;
            }
        }

        return [
        'firstName'     => $firstName,
        'lastName'      => $lastName,
        'birthDate'     => $birthdate,
        'phone'         => $mobileNumber,
        ];
    }

    //Insert data in queue
    public function addProviderSendDataInQueue($insertedId,$providerListId,$provider,$listId,$userInfo,$emailId,$tag){      
        $condition = array();
        $is_insert = true;
        $queueArr = array(
            'userId'        => $insertedId,
            'providerListId'=> $providerListId,
            'providerId'    => $provider,
            'listId'        => $listId,            
            'firstName'     => $userInfo['firstName'],
            'lastName'      => $userInfo['lastName'],
            'emailId'       => $emailId,
            'phone'         => $userInfo['phone'],
            'birthDate'     => $userInfo['birthDate'],
            'tag'           => $tag,
            'createdDate'   => date('Y-m-d H:i:s'),
        );
        ManageData(QUEUE,$condition,$queueArr,$is_insert);
    }

    //send request to live delivery 
    public function sendRequestToClient(){
        $data = $this->input->post();
        $userId = $data['userId'];
        $campaignId = $data['campaignId']; 
        $transactionId = $data['transactionId'];    

        $condition = array('campaignId' => $campaignId);
        $order_by = array('liveurlid' => 'Desc');
        $is_single = true;
        $getLiveurl = GetAllRecord(LIVEURL,$condition,$is_single,array(),array(),array($order_by));

        // liveurl response                                                   
        $responseBody = getLiveurlResponse($getLiveurl, $userId,$transactionId);

        // insert data : history for send data to provider
        $condition = array();
        $is_insert = true;
        $historyinsertArr = array(
            'userId'        => $userId,
            'liveurlid'     => $getLiveurl['liveurlid'],
            'response'      => json_encode($responseBody),
            'status'        => $responseBody['approved'],            
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        );
        $insertedId = ManageData(HISTORY_SEND_DATA_TO_PROVIDER,$condition,$historyinsertArr,$is_insert);
        $returnData['is_liveurl_response'] = ($responseBody['approved'] == true) ? 1 : 0;
        echo json_encode($returnData);
    }
}