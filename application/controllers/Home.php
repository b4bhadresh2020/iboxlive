<?php

use function GuzzleHttp\json_decode;

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    private $boxdata = [];
    private $wheeldata = [];
    public function __construct() {
        parent::__construct();
        require_once(FCPATH.'vendor/autoload.php');        
    }

    /* Load boxgame with signup*/
    function index(){
        $this->boxdata = array(
            'headerImage' => 'One-Email.png',
            'gameImage' => 'chest-closed.png',
            'gameImageAfterTurn1' => 'chest-empty.png',
            'gameImageAfterTurn2' => 'chest-bonus.png',
            'gameImageAfterTurn3' => 'chest-superbonus.png',
            'sectionOneTitle' => 'You are number 8 out of 36 players today who got this chance',
            'sectionTwoTitle' => '',
            'detailImageOne' => 'safe-secure.png',
            'detailImageTwo' => 'responsiblegaming.svg',
            'detailImageThree' => '18plus.png',
            'backgroundImage' => 'One-Email-bg.jpg',
            'bodyBgColor' => '#bc3f1e',
            'bodyFontColor' => '#ffffff',
            'footerBgColor' => 'rgba(25,25,25,1.00)',
            'copyrightTextFontColor' => 'rgba(255,255,255,0.50)',
            'popupFontColor' => '#ffffff',
            'popupButtonBgColor' => '#bc3f1e',
            'popupButtonFontColor' => '#ffffff',
            'popupBGColor' => 'cadetblue',
            'popupBGImage' => 'welcome-popup-one-email.png',
            'welcomePopupTitle' => 'WIN UP TO 3 PRIZES!',
            'welcomePopupDesc' => 'You were chosen to participate in a lottery with valuable prizes You have 3 chances to open the chests. Good luck!',
            'welcomePopupButtonText' => 'START',
            'emptyPopupTitle' => 'MISS!',
            'emptyPopupSubTitle' => 'Shots left:',
            'emptyPopupButtonText' => 'TRY AGAIN!',
            'bonusPopupTitle' => 'CONGRATULATIONS!',
            'bonusPopupDesc' => '',
            'bonusPopupButtonText' => 'TRY AGAIN!',
            'finalPopupTitle' => 'CONGRATULATIONS YOU WON!',
            'finalPopupDesc' => 'YOU ARE NUMBER 8 OUT OF 36 PLAYERS WHO WON TODAY!',
            'finalPopupDetail' => 'CLAIM UP TO $3,000 + 200 FREE SPINS',
            'finalPopupButtonText' => 'Continue',
            "disclaimer" => "This offer is not available for players residing in Ontario",
            "url" => "https://sempected-wompted.com/29946a6f-13cd-4adf-a0c3-d64e45f0c0c2"
            
        );
        $this->load->view('homepage/index',$this->boxdata);
    }

    /* Load wheel with signup*/
    function wheel(){
        $this->wheeldata = array(
            "backgroundImage" => "redbg.png",
            "buttonColor" => "#820000",
            "winnerImage" => "final_popup.jpg",
            "image" => "CA-Safe-KE.png",
            "header" => "Spin the Wheel & win 100% bonus up to 1000 CAD and 50 free spins",
            "price" => "1000",
            "spin" => "50",
            "startAmount" => 100,
            "currency" => "$",
            "popupText1" => "YOU NOW HAVE ",
            "popupText2" => "FREE SPINS",
            "popupButton" => "GO !",
            "spinLeftLabel" => "Spins Left",
            "spinHereLabel" => "SPIN HERE!",
            "spinAgainLabel1" => "SPIN IT AGAIN",
            "spinAgainLabel2" => "HAVE ANOTHER GO",
            "spinAgainLabel3" => "SPIN IT AGAIN",
            "spinAgainLabel4" => "TRY AGAIN",
            "isPrefix" => 1,
            "claimNowButton" => "Jackpot $1000 + 50 Free Spins",
            "createAccountButton" => "Continue",
            "timerLabel" => "This bonus expires in",
            "wonLabel" => "You Won",
            "freeSpinLabel" => "Free Spins",
            "fontColor" => "#ffffff",
            "blinkfontColor" => "antiquewhite",
            "isBlockLeft" => false,
            "priceTagLabel" => "",
            "balanceTitle" => "Balance",
            "pinImage" => "pin-dark.png",
            "fullWinnerLabel" => "CONGRATULATIONS YOU WON!",
            "disclaimer" => "This offer is not available for players residing in Ontario",
            "url" => "https://sempected-wompted.com/29946a6f-13cd-4adf-a0c3-d64e45f0c0c2",
            "wheel" => array(
                array(
                    "name" => "LOSE A TURN",    
                    "price" => 0  
                ),
                array(
                    "name" => "YOU LOST $50",    
                    "price" => 50    
                ),
                array(
                    "name" => "YOU WIN $150",    
                    "price" => 150    
                ),
                array(
                    "name" => "LOSE A TURN",    
                    "price" => 0    
                ),
                array(
                    "name" => "LOSE A TURN",    
                    "price" => 0    
                ),
                array(
                    "name" => "Jackpot $1000 + 50 Free Spins",    
                    "price" => 1000
                ),
                array(
                    "name" => "YOU WIN $10",    
                    "price" => 10    
                ),
                array(
                    "name" => "YOU LOST $25",    
                    "price" => 25   
                )
                ),
                "totalSpin" => 5
        );
        $this->load->view('homepage/wheel',$this->wheeldata);
    }

    public function sendLeadToLiveDelivery(){
        $apikey = "";
        $url = "";
        $data = $this->input->post();        
        if($data['game'] == 0){
            $subscriberUrl = "https://suprdat.dk/boxgame_hook/";
            $url = $this->boxdata['url'];
        }else{
            $subscriberUrl = "https://suprdat.dk/wheelgame_hook/";
            $url = $this->wheeldata['url'];
        }
        $client = new GuzzleHttp\Client();
        $body = $client->post($subscriberUrl, [
            'form_params' => $data, 
        ]); 
        $response = $body->getBody()->getContents();
        echo $url;
    }

    /*
        Load Home Page
    */
    public function campaign($campaignBackUrl = '') {
        $data = array();
        $today = date('Y-m-d');

        $urlInParts = explode('-', $campaignBackUrl);
        $getLastTwoElementInArr = array_slice($urlInParts,-2,2);
        $randomStr  = $getLastTwoElementInArr[0];
        $campaignId = @$getLastTwoElementInArr[1];

        $condition = array(
            ''.CAMPAIGN.'.campaignId' => $campaignId,
            'randomStr'  => $randomStr,
            'isInActive' => 0,
            'isPause'    => 0
        );
        $is_single = true;
        $order_by = array();
        // $data = GetAllRecord(CAMPAIGN,$condition,true);   
        $data = JoinData(CAMPAIGN,$condition,LIVEURL,"campaignId","campaignId","left",$is_single,$order_by,CAMPAIGN.'.*,advertiser_term,advertiser_termname,advertiser_termlink'); 
             
        
        if (count($data) > 0) {

            // get bonus header and bonus information.
            $bonusInfo = GetAllRecord(BONUS, array("country" => $data['country']), "", array(), array(), array(array("position" => "ASC")));
            $bonusHeader = GetAllRecord(BONUS_HEADER, array("country" => $data['country']), true, array(), array(), array());   

            //check if end date is unlimited or not
            if ($data['isUnlimitedEndDate'] == 1 || $data['campaignEndDate'] >= $today) {
                
                //get record from offer table
                /*$data['offers'] = GetAllRecord(OFFER,array(),false);
                pre($data['offers']);*/
                //make terms and condition page dynamically
                $this->makeTermsAndConditionPage($data);

                /**
                    check type of campaign whether it's scratch, wheel or slot
                    and then send view respectively
                */

                $campaignIndex = $data['appNameIndex'];

                if ($campaignIndex == 0) {   //scratch

                    $data['pageDisplayTitle'] = 'Scratch';
                    $data['curTemplateName'] = 'dashboard/scratch';


                }else if($campaignIndex == 1){   //wheel

                    $multipleStuffArray = array();  //for wheel

                    for ($i=1; $i <= 8; $i++) { 

                        $multipleStuffArray['wheelGameMultiImage' . $i] = $data['wheelGameMultiImage' . $i]; 
                        $multipleStuffArray['wheelGameTileImage' . $i] = $data['wheelGameTileImage' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitleFontStyle' . $i] = $data['wheelMultiImageTitleFontStyle' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitleFontColor' . $i] = $data['wheelMultiImageTitleFontColor' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitle' . $i] = $data['wheelMultiImageTitle' . $i];  
                        $multipleStuffArray['wheelMultiImageBGColor' . $i] = $data['wheelMultiImageBGColor' . $i];  
                    }
                    $data['multipleStuffArray'] = $multipleStuffArray;

                    //get success msg in other language
                    $language = $data['language'];
                    $condition = array('errorCode' => $language."_Success");
                    $is_single = true;
                    $getData = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');

                    $data['successMsg'] = $getData['errorInOther'];
                    
                    $data['pageDisplayTitle'] = 'Wheel';
                    $data['curTemplateName'] = 'dashboard/wheel';

                }else if($campaignIndex == 2){   //slot

                    //slot multiple images
                    $data['multipleImagesSlot1'] = [];
                    $data['multipleImagesSlot2'] = [];
                    $data['multipleImagesSlot3'] = [];

                    //here slotGameImage names are from 1 to 15 in db
                    for ($i = 1; $i <= 15 ; $i++) { 
                        
                        if($i >= 1 && $i <= 5){
                            $data['multipleImagesSlot1'][] = $data['slotGameImage'.$i];
                        }

                        if($i >= 6 && $i <= 10){
                            $data['multipleImagesSlot2'][] = $data['slotGameImage'.$i];   
                        }

                        if($i >= 11 && $i <= 15){
                            $data['multipleImagesSlot3'][] = $data['slotGameImage'.$i];
                        }
                    }
                    
                    $slotMultipleImageStuffDetail = \json_decode($data['slotMultipleImageStuffDetail'],TRUE);
                    
                    $data['slotMultiImageBGColor'] = $slotMultipleImageStuffDetail['slotMultiImageBGColor'];
                    $data['slotMultiImageTitle'] = $slotMultipleImageStuffDetail['slotMultiImageTitle'];
                    $data['slotMultiImageTitleFontStyle'] = $slotMultipleImageStuffDetail['slotMultiImageTitleFontStyle'];
                    $data['slotMultiImageTitleFontColor'] = $slotMultipleImageStuffDetail['slotMultiImageTitleFontColor'];


                    // win detail
                    $slotWinningFormDetail = \json_decode($data['slotWinningFormDetail'],TRUE);

                    $slotWinLoseAllFontStyle = array();
                    $winfontCount = count($slotWinningFormDetail['slotWinningHeaderStyle']);

                    //win font : add all font in array
                    for ($i=0; $i < $winfontCount; $i++) { 

                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningHeaderStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningDescriptionBeforeImageStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningDescriptionStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningValueDescriptionStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningScarcityBarFontStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotWinningFormDetail['slotWinningButtonStyle'][$i];
                    }

                    //lose detail
                    $slotLosingFormDetail = \json_decode($data['slotLosingFormDetail'],TRUE);
                    $losefontCount = count($slotLosingFormDetail['slotLosingHeaderStyle']);

                    //lose font : add all font in array
                    for ($i=0; $i < $losefontCount; $i++) { 

                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingHeaderStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingDescriptionBeforeImageStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingDescriptionStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingValueDescriptionStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingScarcityBarFontStyle'][$i];
                        $slotWinLoseAllFontStyle[] = $slotLosingFormDetail['slotLosingButtonStyle'][$i];
                    }

                    $data['slotWinLoseAllFontStyle'] = $slotWinLoseAllFontStyle;


                    $data['pageDisplayTitle'] = 'Slot';
                    $data['curTemplateName'] = 'dashboard/slot';                    
                }else if($campaignIndex == 3){   //wheel 

                    $multipleStuffArray = array();  //for wheel

                    for ($i=1; $i <= 8; $i++) { 

                        $multipleStuffArray['wheelGameMultiImage' . $i] = $data['wheelGameMultiImage' . $i]; 
                        $multipleStuffArray['wheelGameTileImage' . $i] = $data['wheelGameTileImage' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitleFontStyle' . $i] = $data['wheelMultiImageTitleFontStyle' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitleFontColor' . $i] = $data['wheelMultiImageTitleFontColor' . $i]; 
                        $multipleStuffArray['wheelMultiImageTitle' . $i] = $data['wheelMultiImageTitle' . $i];  
                        $multipleStuffArray['wheelMultiImageBGColor' . $i] = $data['wheelMultiImageBGColor' . $i];  
                    }
                    $data['multipleStuffArray'] = $multipleStuffArray;

                    //get success msg in other language
                    $language = $data['language'];
                    $condition = array('errorCode' => $language."_Success");
                    $is_single = true;
                    $getData = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');

                    $data['successMsg'] = $getData['errorInOther'];
                    $data['bonuses'] = $bonusInfo;
                    $data['bonusHeader'] = $bonusHeader;
                    $data['pageDisplayTitle'] = 'Wheel';
                    $data['curTemplateName'] = 'dashboard/jackpot_wheel';

                }

                // add user click when user loads the page
                /*$campaignId = $data['campaignId'];
                $this->addUserClick($campaignId);*/

                $is_single = true;
                $condition = array('countryName' => $data['country']);
                $countryData = GetAllRecord(COUNTRIES,$condition,true);

                //get live url data
                $condition = array('campaignId' => $campaignId);
                $order_by = array('liveurlid' => 'Desc');
                $is_single = true;
                $getLiveurl = GetAllRecord(LIVEURL,$condition,$is_single,array(),array(),array($order_by));
                $data['isLiveUrlEnable'] = (!empty($getLiveurl['is_liveurl_enable'])) ? $getLiveurl['is_liveurl_enable'] : 0 ;
              
                $data['countryCode'] = isset($countryData['countryCode'])?$countryData['countryCode']:'';
                $data['phoneLength'] = isset($countryData['phoneLength'])?$countryData['phoneLength']:'';
                $data['phonePattern'] = isset($countryData['phonePattern'])?$countryData['phonePattern']:'';
                $data['areaCode'] = (isset($countryData['areaCode']) && $countryData['areaCode'] != "")?explode(",",$countryData['areaCode']):array();
                $this->load->view('commonTemplates/templateLayout',$data); 
                
            }else{
                $data['pageDisplayTitle'] = '404 Error';
                $data['error_msg'] = 'Time duration of this campaign is over';
                $this->load->view('errors/html/ex_404',$data);  
            }
        }else{
            $data['pageDisplayTitle'] = '404 Error';
            $data['error_msg'] = 'No campaign Found';
            $this->load->view('errors/html/ex_404',$data);  
        }
    
    }


    function makeTermsAndConditionPage($data){

        /* here we need to create terms and conditions page dynamically 
            with use of terms and condition texts from database */

        /* File writing Started*/ 

        $fileUrl = FCPATH .'/upload/terms_and_conditions/';    
        $fileName = $data['language'].'_TermsAndConditions_'.$data['randomStr'].'.html'; // or .php   
        $myFile = $fileUrl . $fileName; //full file path
        $fh = fopen($myFile, 'w'); // or die("error");  //create file

        // data that you want to write in file

        // Here we have many types of different languages so every page has different title
        $termsTitle = getTermsAndConditionsTitle($data['language']);
        $stringData = '';
        $stringData .= '<!DOCTYPE html>
                        <html>
                            <head>
                                <title>'.$termsTitle.'</title>
                                <style type="text/css">
                                    body{
                                            padding: 0px 50px;
                                        }
                                </style>
                            </head>
                            <body>';
        $stringData .= $data['termsAndCondition'];
        $stringData .= '</body> </html>';

        fwrite($fh, $stringData); // file write function
        fclose($fh); // once writing is completed close it.
        
        /*File writing completed*/
    }

    // get empty fields msg
    function getRequiredFieldsMsg(){

        $language = $this->input->post('language');
        $errorCode = $language.'_Empty_Fields';
        $condition = array(
            'errorLanguage' => $language,
            'errorCode' => $errorCode
        );
        $is_single = true;
        $getErrorMsg = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');

        $returnData = array(
            'emptyFieldsError' => $getErrorMsg['errorInOther']
        );

        echo json_encode($returnData);
        
    }

    function userRegistration(){
        $transactionId = $this->input->post('transactionId');
        $campaignId = decrypt($this->input->post('campaignId'));
        $emailId = $this->input->post('emailId');
        $userInfoTextVal = $this->input->post('userInfoTextVal');
        $ipAddress = $this->input->post('ipAddress');
        $browser = $this->input->post('browser');
        $device = $this->input->post('device');
        $os = $this->input->post('os');
        $hostName = $this->input->post('hostName');
        
        /**
         - Below code is for search option in admin panel
         - It's hard to manage search in json in db as we store all data in json string in db.
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
        
        $userInfoStrFormat .= '+'. $emailId;
        
        /* end search option string format*/
        
        //check first if user lead limit exceed or not
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $getLeadLimit = GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'numberOfLeads,registrations,isUnlimitedLeads,language,country,campaignName,isEnableIntegromat');
        
        $registrations = $getLeadLimit['registrations'];
        $numberOfLeads = $getLeadLimit['numberOfLeads'];
        $isUnlimitedLeads = $getLeadLimit['isUnlimitedLeads'];
        $language = $getLeadLimit['language'];
        $campaignName = $getLeadLimit['campaignName'];
        $isEnableIntegromat = $getLeadLimit['isEnableIntegromat'];
        
        if (($registrations == $numberOfLeads || $registrations > $numberOfLeads) && $isUnlimitedLeads != 1) {
            //Registration limit has been exceeded.
            echo 3; // limit exceeded
        }else{
            
            // Now do register
            
            //check if email id is exist or not
            $condition = array('campaignId' => $campaignId,'emailId' => $emailId);
            $is_single = true;
            $getRecord = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'userId');
            
            if (count($getRecord) > 0) {
                echo 1; // email id is exist
            }else{
                
                $other = json_encode($userInfoTextVal,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
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
                    $county = $getLeadLimit['country'];
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
                                    $source = 'inboxgame(scratch)';

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
                        sendLeadInIntegromat($insertedId,$firstname,$emailId,$county);  
                    }                
                    

                    /* count +1 in registrations and update it */
                    $is_insert = false;
                    $newCount  = $registrations + 1;
                    $condition = array('campaignId' => $campaignId);
                    $updateArr = array('registrations' => $newCount);
                    
                    ManageData(CAMPAIGN,$condition,$updateArr,$is_insert);
                    
                    //get campaign detail
                    $is_single = true;
                    $campaignDetail= GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'gameMultiImage1,gameMultiImage2,gameMultiImage3,gameMultiImage4,gameMultiImage5,gameMultiImage6,gameMultiImage7,gameMultiImage8,gameMultiImage9,winningType,winningPercentage,winSequence,thirdPartyMailMarketing,dataBowlAdverzy,eGoi');
                    
                    /*  Here we make a win logic:
                    1) First we will make a image array of all multiple images
                    2) Then create one random number
                    3) Check if winning type is 0(random) or 1(manual)
                    4) If winning type is random then check that random number is less then 10.If yes then return the main image array and declare as winner else make a shuffle array and return it with looser
                    5) If winning type is manual then check random number is less then winning percentage.If yes then return the main image array and declare as winner else make a shuffle array and return it with looser
                    */
                    
                    //make a Multiple image array
                    $multipleImageArray = [$campaignDetail['gameMultiImage1'],$campaignDetail['gameMultiImage2'],$campaignDetail['gameMultiImage3'],$campaignDetail['gameMultiImage4'],$campaignDetail['gameMultiImage5'],$campaignDetail['gameMultiImage6'],$campaignDetail['gameMultiImage7'],$campaignDetail['gameMultiImage8'],$campaignDetail['gameMultiImage9']];
                    $winSequence = $campaignDetail['winSequence'];
                    

                    //create random number 
                    $randomNum  = rand(1,100); 
                    
                    $winType    = $campaignDetail['winningType'];
                    $winPer     = $campaignDetail['winningPercentage'];
                    $returnData = array(); 

                    if ($winType == 0) {
                        if ($randomNum < 10 ) {
                            $returnData['multipleImages'] = $multipleImageArray;
                        }else{
                            $shuffleArr = gamingShuffleFinal($multipleImageArray,$winSequence);
                            /*shuffle($multipleImageArray);*/
                            $returnData['multipleImages'] = $shuffleArr;
                        }
                    }else if($winType == 1){

                        if ($randomNum < $winPer ) {
                            $returnData['multipleImages'] = $multipleImageArray;
                        }else{
                            $shuffleArr = gamingShuffleFinal($multipleImageArray,$winSequence);
                            /*shuffle($multipleImageArray);*/
                            $returnData['multipleImages'] = $shuffleArr;
                        }                        
                    }

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

                    //user from data language wise store in arr
                    $userInfo = $this->getLanguageCheckRegisterData($userInfoTextVal);

                    //send details to third party website
                    $thirdPartyMailMarketing = $campaignDetail['thirdPartyMailMarketing'];
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
                            } else if($providerDetail[0] == SENDGRID) {
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
                    // $dataBowlAdverzy = $campaignDetail['dataBowlAdverzy'];

                    // if ($dataBowlAdverzy != '') {
                        
                    //     $dataBowlAdverzy = json_decode($dataBowlAdverzy,TRUE);

                    //     //taking forloop for future updation
                    //     foreach ($dataBowlAdverzy as $value) {

                    //         if ($value == 0) {

                    //             $dataBowlAdverzyResponse = $this->addUserDataToDataBowlAdverzy($userInfoTextVal,$emailId,$language,$ipAddress,$value); 

                    //             //update response in user table
                    //             $condition = array('userId' => $insertedId);
                    //             $updateArr = array('dataBowlAdverzyResponse' => $dataBowlAdverzyResponse);
                    //             $is_insert = FALSE;
                    //             ManageData(USER,$condition,$updateArr,$is_insert);
                    //         }
                    //     }
                    // }
                    

                    // //send detail to E-goi
                    // $eGoi = $campaignDetail['eGoi'];

                    // if ($eGoi != '') {
                        
                    //     $eGoi = json_decode($eGoi,TRUE);

                    //     //taking forloop for future updation
                    //     foreach ($eGoi as $value) {

                    //         if ($value == 0) {

                    //             $eGoiResponse = $this->addUserDataToeGoi($userInfoTextVal,$emailId,$language,$ipAddress,$value); 

                    //             //update response in user table
                    //             $condition = array('userId' => $insertedId);
                    //             $updateArr = array('eGoiResponse' => $eGoiResponse);
                    //             $is_insert = FALSE;
                    //             ManageData(USER,$condition,$updateArr,$is_insert);
                    //         }
                    //     }
                    // }
                }else{
                    echo 2;    // system problem
                }
            }
        }
    }

    function loadGameInstant(){
        $campaignId = decrypt($this->input->post('campaignId'));

        //check first if user lead limit exceed or not
        $condition = array('campaignId' => $campaignId);        

        //get campaign detail
        $is_single = true;
        $campaignDetail= GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'language,gameMultiImage1,gameMultiImage2,gameMultiImage3,gameMultiImage4,gameMultiImage5,gameMultiImage6,gameMultiImage7,gameMultiImage8,gameMultiImage9,winningType,winningPercentage,winSequence,thirdPartyMailMarketing,dataBowlAdverzy,eGoi');

        
        /*  Here we make a win logic:
            1) First we will make a image array of all multiple images
            2) Then create one random number
            3) Check if winning type is 0(random) or 1(manual)
            4) If winning type is random then check that random number is less then 10.If yes then return the main image array and declare as winner else make a shuffle array and return it with looser
            5) If winning type is manual then check random number is less then winning percentage.If yes then return the main image array and declare as winner else make a shuffle array and return it with looser
        */

        //make a Multiple image array
        $multipleImageArray = [$campaignDetail['gameMultiImage1'],$campaignDetail['gameMultiImage2'],$campaignDetail['gameMultiImage3'],$campaignDetail['gameMultiImage4'],$campaignDetail['gameMultiImage5'],$campaignDetail['gameMultiImage6'],$campaignDetail['gameMultiImage7'],$campaignDetail['gameMultiImage8'],$campaignDetail['gameMultiImage9']];
        $winSequence = $campaignDetail['winSequence'];
        $language = $campaignDetail['language'];

        //create random number 
        $randomNum  = rand(1,100); 
                    
        $winType    = $campaignDetail['winningType'];
        $winPer     = $campaignDetail['winningPercentage'];
        $returnData = array(); 

        if ($winType == 0) {
            if ($randomNum < 10 ) {
                $returnData['multipleImages'] = $multipleImageArray;
            }else{
                $shuffleArr = gamingShuffleFinal($multipleImageArray,$winSequence);
                /*shuffle($multipleImageArray);*/
                $returnData['multipleImages'] = $shuffleArr;
            }
        }else if($winType == 1){

            if ($randomNum < $winPer ) {
                $returnData['multipleImages'] = $multipleImageArray;
            }else{
                $shuffleArr = gamingShuffleFinal($multipleImageArray,$winSequence);
                /*shuffle($multipleImageArray);*/
                $returnData['multipleImages'] = $shuffleArr;
            }                        
        }

        echo json_encode($returnData);
    }

    // add click on game load
    function addUserClick(){

        $campaignId = decrypt($this->input->post('campaignId')); 
        $userId = $this->input->post('userId');
        $todayDate  = date('Y-m-d'); 

        /*  
            1) get today's click 
            2) If today's record is available then update clicks with +1
                else insert a new click
        */

        //get old click
        $condition  = array(
            'campaignId'    => $campaignId,
            'userId'        => $userId,
            'clickDate'     => $todayDate
        );
        $is_single  = true;
        $getOldClick= GetAllRecord(USERCLICK,$condition,$is_single,array(),array(),array(),'clicks');

        if (count($getOldClick) > 0) {
            
            //udpate click with +1
            $newClick = $getOldClick['clicks'] + 1;
            $updateArr = array('clicks' => $newClick);
            $is_insert = false;
            ManageData(USERCLICK,$condition,$updateArr,$is_insert);

        }else{

            //insert
            $is_insert = true;
            $insertArr = array(
                'campaignId'    => $campaignId,
                'userId'        => $userId,
                'clicks'        => 1,
                'clickDate'     => $todayDate
            );
            ManageData(USERCLICK,array(),$insertArr,$is_insert);

        }
/*
        $this->db->select_sum('clicks');
        $this->db->from(USERCLICK);
        $this->db->where('campaignId',$campaignId);
        $clicks = $this->db->get()->row_array();
        echo $clicks['clicks'];*/
    }


    /*
        add offer click when user click on winning form or loosing form
    */

    function offerClick(){

        $campaignId = decrypt($this->input->get('campaignId'));
        $offerurl = $this->input->get('offerurl');

        $todayDate  = date('Y-m-d'); 

        if ($campaignId > 0) {
            
            /*  
                1) get today's offer click 
                2) If today's record is available then update offer clicks with +1
                    else insert a new click
            */

            //get old click
            $condition  = array(
                'campaignId' => $campaignId,
                'clickDate'  => $todayDate
            );
            $is_single  = true;
            $getOldClick= GetAllRecord(OFFERCLICK,$condition,$is_single,array(),array(),array(),'clicks');

            
            if (count($getOldClick) > 0) {
                
                //udpate click with +1
                $newClick = $getOldClick['clicks'] + 1;
                $updateArr = array('clicks' => $newClick);
                $is_insert = false;
                ManageData(OFFERCLICK,$condition,$updateArr,$is_insert);

            }else{

                //insert
                $is_insert = true;
                $insertArr = array(
                    'campaignId' => $campaignId,
                    'clicks' => 1,
                    'clickDate' => $todayDate
                );
                ManageData(OFFERCLICK,array(),$insertArr,$is_insert);

            }

        }
        
        header('Location: '.$offerurl);  
        exit;       
    }



    /*  check if user wins or not 
        and if wins then mail it to admin 
    --------------------------------------*/
    function checkUserWinOrNot(){

        $emailId = $this->input->post('emailId');
        $campaignId = decrypt($this->input->post('campaignId'));
        $multipleImages = $this->input->post('multipleImages');

        
        //get campaign extra chance
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $getCampaingDetail = GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'extraChance');

        //check user attempt
        $condition = array('emailId' => $emailId,'campaignId' => $campaignId);
        $is_single = true;
        $getUserDetail = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'chanceAttempted');

        if ($getUserDetail['chanceAttempted'] <= $getCampaingDetail['extraChance']) {
            
            //update chance attempt
            $is_add = false;
            $updateArr = array('chanceAttempted' => $getUserDetail['chanceAttempted'] + 1);
            $updateResponse = ManageData(USER,$condition,$updateArr,$is_add);
            //get campaign multipleImages

            $condition = array('campaignId' => $campaignId);
            $is_single = true;
            $campaignDetail = GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'gameMultiImage1,gameMultiImage2,gameMultiImage3,gameMultiImage4,gameMultiImage5,gameMultiImage6,gameMultiImage7,gameMultiImage8,gameMultiImage9,winningType,winningPercentage,campaignName,winnerNotificationEmail');

            if (count($campaignDetail) > 0) {

                //make a Multiple image array
                $multipleImageArray = [$campaignDetail['gameMultiImage1'],$campaignDetail['gameMultiImage2'],$campaignDetail['gameMultiImage3'],$campaignDetail['gameMultiImage4'],$campaignDetail['gameMultiImage5'],$campaignDetail['gameMultiImage6'],$campaignDetail['gameMultiImage7'],$campaignDetail['gameMultiImage8'],$campaignDetail['gameMultiImage9']];

                // Now compare multipleImageArray to post multipleImages
                // If both are same then declare Winner else declare looser 
                $isBothArrDifferent = compareArray($multipleImageArray,$multipleImages);

                if ($isBothArrDifferent == 0) {
                    /*
                        Its winner
                        Now,update in user table as winner
                    */

                    // update
                     $condition = array(
                        'campaignId' => $campaignId,
                        'emailId'    => $emailId
                    );
                    $updateArr = array('isWin' => 1);
                    $is_insert = false;
                    $updateResponse = ManageData(USER,$condition,$updateArr,$is_insert);

                    echo 1; //winner

                }else{
                    echo 0; //looser
                }
            }else{
                echo 2; // system problem
            }
        }else{
            echo 3; //unauthorized user.Page relaod
        }
    }



    /* This is function will give shuffled images
    ---------------------------------------------*/

    function getShuffledImages(){
        $campaignId = decrypt($this->input->post('campaignId'));

        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $requiredfields = 'gameMultiImage1,gameMultiImage2,gameMultiImage3,gameMultiImage4,gameMultiImage5,gameMultiImage6,gameMultiImage7,gameMultiImage8,gameMultiImage9,winSequence';

        $getImages = GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),$requiredfields);

         //make an array from $getImages

        $multipleImageArray = [$getImages['gameMultiImage1'],$getImages['gameMultiImage2'],$getImages['gameMultiImage3'],$getImages['gameMultiImage4'],$getImages['gameMultiImage5'],$getImages['gameMultiImage6'],$getImages['gameMultiImage7'],$getImages['gameMultiImage8'],$getImages['gameMultiImage9']];
        $winSequence = $getImages['winSequence'];

        $shuffleArr = gamingShuffleFinal($multipleImageArray,$winSequence);

        $returnData['multipleImages'] = $shuffleArr;
        echo json_encode($returnData);

    }


    /* Below function just send mail to admin about winner user
    ------------------------------------------------------------*/
    function declareUserWin(){

        $emailId = $this->input->post('emailId');
        $campaignId = decrypt($this->input->post('campaignId'));

        //get campaign Detail
        $condition = array('campaignId' => $campaignId);
        $is_single = true;
        $campaignDetail= GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array(),'campaignName,winnerNotificationEmail');


        if ($campaignDetail['winnerNotificationEmail'] != '') {
            
            // Now send mail
            $toEmail      = $campaignDetail['winnerNotificationEmail'];
            $campaignName = $campaignDetail['campaignName']; 

            //send email
            $subject = 'Campaign Winner';
            $mail_body  =  "<html>
                                <head>
                                    <title> Campaign Winner </title>
                                </head>
                                <body>
                                    <p>Following User Wins the Campaign.</p>
                                    <table border = '1'>
                                      <tr>
                                        <th style = 'text-align : center ;'><strong>Campaign Name</strong></th>
                                        <td>".$campaignName."</td>
                                      </tr>
                                      <tr>
                                        <th style = 'text-align : center ;'><strong>User Email</strong></th>
                                        <td>".$emailId."</td>
                                      </tr>
                                    </table>
                                </body>
                            </html>";

            $mailResponse = sendMail($toEmail, $subject, $mail_body);
        }
    }


    /* Get other language for Extra chance
    --------------------------------------*/

    function getLangForExtra(){
        
        $language = $this->input->post('language');

        //Its hard coded in datebase so dont change it here.
        $errorCodeArr = array(
            'chanceText'   => $language.'_Extra_Chance',
            'ok'            => $language.'_Ok',
            'cancel'        => $language.'_Cancel',
            'terms'         => $language.'_Terms_Link',
            'cookieTermsLink' => $language.'_Cookie_Terms'
        );

        $extraChanceProperties = array();
        $is_single = true;

        foreach ($errorCodeArr as $error => $errorCode) {
            $condition = array('errorCode' => $errorCode);
            $getTranslation = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');
            /*array_push($extraChanceProperties,$getTranslation['errorInOther']);*/
            $extraChanceProperties[$error] = $getTranslation['errorInOther'];
        }

        echo json_encode($extraChanceProperties);
    }


    /* Get error in different language
    ----------------------------------*/

    function getErrorMsgDetail(){
        
        $errorLanguage = $this->input->post('errorLanguage');
        $errorCode = $this->input->post('errorCode');

        $condition = array(
            'errorLanguage' => $errorLanguage,
            'errorCode' => $errorCode
        );
        $is_single = true;
        $errorMsg = GetAllRecord(LANGUAGE_ERROR,$condition,$is_single,array(),array(),array(),'errorInOther');

        if (count($errorMsg) > 0) {
            echo $errorMsg['errorInOther'];
        }else{
            echo 1;
        }
    }

    function getList(){

        $this->load->model('email_platform');
        $response = $this->email_platform->GetLists();
        pre($response);
    }


    //send email id to third party website (eMailPlatform)
    function addEmailToSubscriber($emailId = '', $language = 'UK'){

        $languageArr = languageThatHasListId();
        $response = array();

        if (in_array($language, $languageArr)) {

            $listId = getListId($language);
            $this->load->model('email_platform');
            $response = $this->email_platform->AddSubscriberToList($listId, $emailId);    

            if (is_numeric($response)) {
                $response = array("result" => "success","data" => array("id" => $response));
            }else{
                $response = array("result" => "error","error" => array("msg" => $response));
            }
        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not listed in third party mail provider"));
        }

        return json_encode($response);

    }


    //send email id to third party website (AWeber)
    function addEmailToAweber($userInfoTextVal,$emailId='', $language='UK',$ipAddress='192.168.0.1',$aweberListId){


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

        
        $this->load->model('aweber_email_platform');
        $response = $this->aweber_email_platform->AddEmailToAweberSubscriberList($emailId,$language,$ipAddress,$mobileNumber,$firstName,$aweberListId);

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
    function addUserDataToDataBowlAdverzy($userInfoTextVal,$emailId='', $language='UK',$ipAddress='192.168.0.1',$adverzyIndex){

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
            
            $this->load->model('mdl_databowl_adverzy');
            $response = $this->mdl_databowl_adverzy->AddUserDataToDataBowlAdvLeads($emailId,$language,$ipAddress,$mobileNumber,$firstName,$lastName,$adverzyIndex);

        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not defined in databowl Adverzy"));
        }

        return json_encode($response);

    }


    //send data to eGoi
    function addUserDataToeGoi($userInfoTextVal,$emailId='', $language='UK',$ipAddress='192.168.0.1',$eGoiIndex){

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
            
            $this->load->model('mdl_egoi');
            $response = $this->mdl_egoi->AddUserDataToEgoiSubs($emailId,$language,$ipAddress,$mobileNumber,$firstName,$lastName,$eGoiIndex);

        }else{
            $response = array("result" => "error","error" => array("msg" => "Country is not defined in E-goi"));
        }

        return json_encode($response);

    }


    function getAweber(){
        $this->load->model('aweber_email_platform');
        $getTag = $this->aweber_email_platform->getDetail();
        $campaignId = decrypt($getTag['campaignId']);
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

    //check user exists or not using email id
    function checkUserByEmail(){
        $data = $this->input->post();
        $campaignId = decrypt($data['campaignId']); 
        $emailId = $data['emailId'];

        $condition = array('campaignId' => $campaignId,'emailId' => $emailId);
        $is_single = true;
        $getRecord = GetAllRecord(USER,$condition,$is_single,array(),array(),array(),'userId');

        if($getRecord > 0){
            echo $getRecord['userId'];
        }else{
            echo 0;
        }
        
    }
}
