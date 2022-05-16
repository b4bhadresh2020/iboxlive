<style type="text/css">

.modal-bg{
    background-color: <?php echo $userInfoHeaderBackgroundColor; ?>;
}
.model-title{
    color: <?php echo $userInfoHeaderFontColor; ?>;
}
#btn_register{
    background-color: <?php echo $userInfoButtonBackgroundColor; ?>;
    color: <?php echo $userInfoButtonFontColor; ?>;
}
.permission-model-text-box{
    background-color: <?php echo $userFieldBackgroundColor; ?>;
}
.permission-model-text-box::placeholder {
    color: <?php echo $userFieldPlaceholderColor; ?>;
    opacity: 1; /* Firefox */
}

.permission-model-text-box:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: <?php echo $userFieldPlaceholderColor; ?>;
}

.permission-model-text-box::-ms-input-placeholder { /* Microsoft Edge */
   color: <?php echo $userFieldPlaceholderColor; ?>;
}

</style>    
<?php 

    list($width, $height) = getimagesize($backgroundImage);
    
    if ($width > 1920) {

        $resizeImagePath = imageResize($backgroundImage,1920, 1920 * $height / $width);    
        if ($resizeImagePath != "err") {
            $backgroundImage = base_url().$resizeImagePath;
        }
        
    }

 ?>
<body class="<?=($isBrowserBaseGame == 1) ? 'load-browser-regform' : ''?>">
    <?php include(APPPATH."views/dashboard/fire_fb_event.php"); ?>

    <div class="bg-image-block game-section" style="background-image: url(<?php echo $backgroundImage; ?>); background-position: center; background-size: cover;">
        <div style="position: absolute;left:0;top:0;opacity: 0;"> <!-- This div is important. It helps canvas to load the proper fonts -->
            <div style="font-family: <?php echo @$gameImageHeaderStyle; ?>;">.</div>
            <div style="font-family: <?php echo @$gameImageDescriptionStyle; ?>;">.</div>
            <div style="font-family: <?php echo @$gameImageFooterStyle; ?>;">.</div>
        </div>

        <audio class="audioDemo" id="audioDemo" loop muted>
            <source src="<?php echo base_url(); ?>sound/scratch-sound.mp3" type="audio/mpeg" />
        </audio>
        <canvas id="canvas" style="display: none;position: absolute;" ></canvas>
        <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
            <canvas id="snowCanvas" style="position: absolute;z-index: 0;" ></canvas>
        <?php } ?>

        <div class="page-container">
            <div>
                <div>
                    <div class="main-title txt-center selection-none" style="color:<?php echo $backGroundHeaderColor; ?>; font-family: <?php echo $backGroundHeaderStyle; ?> " id="backGroundHeader">
                        <?php echo $backgroundImageHeader; ?>
                        <img src="<?php echo $backgroundHeaderImage; ?>" class="header-logo-img">
                    </div>
                    <?php
                        if($isBrowserBaseGame == 1) {
                        ?>
                            <div class="browser-base-regform">
                                <div class="reg-container">
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                    <div class="main-image-container" id="permissionModelBtn">
                        <div class="game-container" id="gameContainer">
                            <div class="line-top"></div>
                            <div class="line-bottom"></div>
                            <div class="line-left"></div>
                            <div class="line-right"></div>

                            <!-- <img src="./images/lines.png" class="line-img"> -->
                            <div id="gameMultipleImages">
                            </div>

                            <div id="winSequenceDiv" ></div>
                            <!-- <div class="winning-line-1"></div> -->
                        </div>
                        <div class="scratch-container">
                            <!-- Add class when "diff-cursor" -->
                            <canvas id="myCanvas" width="830" height="475" class="centered txt-center color-white"  >
                            </canvas>
                        </div>
                    </div>
                    <?php 
                        if($isBrowserBaseGame == 1) {
                            $this->load->view('dashboard/thank_you');
                        }
                    ?>
                    <div class="main-bottom txt-center">
                        <button class="del-btn selection-none" id="joinBtn" style="background: <?php echo $backgroundButtonBGColor; ?>; border: 1px solid <?php echo $backgroundButtonBGColor; ?>; font-family: <?php echo $backGroundButtonStyle; ?>; color: <?php echo $backGroundButtonFontColor; ?>;" ><?php echo $backgroundButtonText; ?></button>
                        <!-- <button class="color-white vis-btn" id="winnerModelBtn">VIS GEVINST</button> -->
                    </div>
                    <div class="footerText1">
                        <div class="custom-container">
                            <?php echo $footerText1; ?>
                        </div>
                    </div>

                    <?php if(@$hasEighteenPlusTerms){ ?>

                        <div class="has-eighteen-plus"> <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?>
                        </div>

                    <?php } ?>

                </div>
                <!-- <div class="page-container selection-none" id='userOffer' style="display: none;">
                    
            </div> -->
            <?php
                if($isDisableCookie == 0) {
            ?>
            <div class="cookie-position">
                <div id="cookieContainer" class="cookie-container selection-none <?php echo ($isOpacityOn==1) ? 'has-opacity-bg' : ''; ?>  " style="background: <?php echo @$backgroundFooterBackgroundColor; ?>;">
                    <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
                    <div class="cookie-sub-contain">
                        <span class="cookie-txt" style="color: <?php echo @$backGroundFooterFontColor; ?>;">
                            <?php echo @$backgroundFooterFontText; ?>
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" target="_target"  style="color: <?php echo @$backGroundFooterMoreColor; ?>;" ><?php echo @$backgroundFooterMoreText; ?></a>

                        </span>
                        <button class="cookie-btn acceptCookies" id="acceptCookies" style="background-color: <?php echo @$backgroundFooterButtonBackgroundColor; ?>; color: <?php echo @$backGroundFooterButtonFontColor; ?>;"><?php echo @$backgroundFooterButtonText; ?></button>
                    </div>
                    <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
                </div>

                <div id="cookieTitle" class="main-title txt-center cookie-title selection-none" style="display: none;">
                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="cookieLink" target="_self" style = "color: <?php echo @$backGroundCookieColor; ?>; font-size : 12px;"></a>
                </div>
            </div>
            <div id="cookieModel" class="modal cookie-modal-container">
                <div class="cookie-modal-content <?php echo ($isOpacityOn==1) ? 'has-opacity-bg' : ''; ?>" style="background-color: <?php echo @$backgroundFooterBackgroundColor; ?>;">

                    <div class="cookie-sub-contain">
                        <span class="cookie-txt" style="color: <?php echo @$backGroundFooterFontColor; ?>;">
                            <?php echo @$backgroundFooterFontText; ?>
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" target="_target"  style="color: <?php echo @$backGroundFooterMoreColor; ?>;" ><?php echo @$backgroundFooterMoreText; ?></a>
                        </span>
                        <div class="cookie-btn-container">
                            <button type="button" class="btn cookie-btn acceptCookies" id="acceptCookies" style="background-color: <?php echo @$backgroundFooterButtonBackgroundColor; ?>; color: <?php echo @$backGroundFooterButtonFontColor; ?>;" ><?php echo @$backgroundFooterButtonText; ?></button>
                        </div>
                        <div class="txt-center color-white popup-cookie-title">
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="modalCookieLink" target="_self" style = "color: black;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php
                if($isBrowserBaseGame ==1) {
                ?>
                    <div id="footer2" class="footer2">
                        <?php echo $footer2; ?>
                    </div>
                <?php
                }
            ?>
            <div id="permissionModel" class="modal registarion-popup">
                <!-- Modal content -->
                <div class="modal-content color-white modal-bg selection-none">
                    <span class="close perClose">&times;</span>
                    <div class="form-main">
                        <div class="txt-center model-title"><?php echo $userInfoHeader; ?></div>
                        <div class="form-container text-center">
                            <div id="userInfoError"></div>
                        </div>

                        <?php if($isReady == 1){ ?>
                            <div class="form-container form-all-inputs">
                                <?php 
                                $userInfo = json_decode($userInfo);
                                $userInfoOrdering = json_decode($userInfoOrdering,true);
                                if(!empty($userInfoOrdering)) {
                                    $userfieldNameArr = array_column($userInfoOrdering,'title');
                                    $userfieldOrderArr = array_column($userInfoOrdering,'value');
                                    $finalUserInfo = array_combine($userfieldOrderArr, $userfieldNameArr);
                                    ksort($finalUserInfo);
                                } else {
                                    $finalUserInfo = $userInfo;
                                }
                                

                                $userInfoRequired = json_decode($userInfoRequired);
                                if (count($userInfoRequired) == 0) {
                                    $userInfoRequired = array();   
                                }

                                $userInfoSubTitle = json_decode($userInfoSubTitle,true);

                                //make associative array for subtitle array
                                $subTitle = array();
                                if (count($userInfoSubTitle) > 0) {
                                    foreach ($userInfoSubTitle as $ufst) {
                                        $subTitle[$ufst['title']] = $ufst['value'];
                                    }    
                                }

                                
                                /*
                                    Email id is always required and will always show it to user
                                */

                                    $replaceArr = array('Email adresse','E-postadress','Sähköposti','E-postadresse','Email address','E-Mail-Adresse');

                                    /*Mobile array, check if mobile field is there or not, if it is there then its field type should numbers only*/
                                    $mobileArr = getMobileArr();

                                //check how many fields are required

                                    $differArrUserInfo = array_diff($finalUserInfo, $replaceArr);
                                    $placeholder = '';
                                    $emailName = '';
                                    
                                    foreach (@$finalUserInfo as $uf) {
                                        if (in_array($uf,$replaceArr)) {
                                            $placeholder = $uf.' *'; 
                                            $emailName = str_replace(' ', '', $uf);
                                            $subPlaceholder = $uf;
                                        }
                                    }

                                    
                                    ?>

                                    <?php foreach (@$finalUserInfo as $key => $uInfo) { 
                                        if(array_key_exists($key, $differArrUserInfo )) {
                                            $getValueByGet = str_replace(' ', '', $uInfo);
                                            $bornNameArr = ['Born','Født','Född','Geboren'];
                                            ?>
                                            <?php
                                            if(in_array($uInfo, $bornNameArr)) {
                                            ?>  
                                                <div class="form-input-outer">
                                                    <!-- START: born section - DAB -->
                                                    <?php 
                                                        if($isBrowserBaseGame == 1) {
                                                    ?>
                                                        <div class="custom-input-wrap">
                                                            <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?>:</label>
                                                            <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                                        </div>
                                                    <?php }  else {
                                                    ?>
                                                        <label class="born-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?>:</label>
                                                        <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                                    <?php
                                                    }?>
                                                    <!-- END: born section - DAB -->
                                                </div>
                                            <?php
                                            } else {
                                                $answerLists = [];
                                                if(array_key_exists($uInfo,$subTitle)) {
                                                    $answerLists= explode(',',$subTitle[$uInfo]);
                                                }
                                                if(count($answerLists) > 1) {
                                                ?>
                                                    <div class="form-input-outer">
                                                        <?php 
                                                            if($isBrowserBaseGame == 1) {
                                                            ?>
                                                                <div class="custom-input-wrap">
                                                                    <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?>:</label>
                                                                    <select class="userInfoText question-drop" data-name = "<?php echo $uInfo; ?>">
                                                                        <option value="">select</option>
                                                                        <?php
                                                                        foreach($answerLists as $answer) {
                                                                        ?>
                                                                            <option value="<?php echo $answer; ?>"><?php echo $answer; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label class="question-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?>:</label>
                                                                <select class="userInfoText question-drop" data-name = "<?php echo $uInfo; ?>">
                                                                    <option value="">select</option>
                                                                    <?php
                                                                    foreach($answerLists as $answer) {
                                                                    ?>
                                                                        <option value="<?php echo $answer; ?>"><?php echo $answer; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            <?php
                                                            }
                                                        ?>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>  
                                                    <div class="form-input-outer">
                                                        <?php 
                                                            if($isBrowserBaseGame == 1) {
                                                            ?>
                                                                <div class="custom-input-wrap">
                                                                    <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?></label>
                                                                    <input <?php if(in_array($uInfo, $mobileArr)){ echo 'type="number"'; }else{ echo 'type = "text"'; } ?> class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>"  value="<?php echo @$_GET[$getValueByGet]; ?>" >
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input <?php if(in_array($uInfo, $mobileArr)){ echo 'type="number"'; }else{ echo 'type = "text"'; } ?> class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>" >
                                                            <?php
                                                            }
                                                        ?>
                                                        <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$uInfo]; ?></font></font></div>
                                                    </div>
                                                <?php
                                                }
                                            ?>
                                            <?php } 
                                        } else {
                                        ?>  
                                            <div class="form-input-outer">
                                            <?php 
                                            if($isBrowserBaseGame == 1) {
                                            ?>  
                                                <div class="custom-input-wrap">
                                                    <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $placeholder; ?></label>
                                                    <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoText" id="emailId" data-name="email" value="<?php echo @$_GET[$emailName]; ?>" >
                                                </div>
                                            <?php
                                            } else {
                                            ?>                                            
                                                <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoText" id="emailId" data-name="email" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$emailName]; ?>" >
                                            <?php
                                            }
                                            ?>
                                                

                                            <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                        </div>
                                        <?php
                                        }
                                        ?>

                                    <?php 
                                    } ?>
                                    
                                    <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">
                                    <input type="hidden" name="hostName" id="hostName" value="<?php echo @$_GET['hostname']; ?>" />

                                    <button class="model-txt-box txt-center form-btn" id="btn_register"> <?php echo $userInfoButton; ?> </button>
                                </div>
                            <?php } ?>

                            <div class="form-bottom-text">
                                <input type="checkbox" class="form-check" id="termsAndCondition" name="termsAndCondition" style="margin: 0px;">
                                <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                    <?php echo $shortDescriptionOfTerms; ?>
                                    <div class="form-term-link">
                                        <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $shortTermsLinkInUserInfo; ?></a>
                                    </div>
                                    <!-- advertiser link -->
                                    <?php
                                    if($advertiser_term == 1) {
                                        echo $advertiser_termname; ?>
                                        <div class="form-term-link">
                                            <a href="<?php echo $advertiser_termlink; ?>" id="advertiser_termlink" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">Advertiser terms</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                            <?php if($language == 'SE' && $swedenExtraTerms == 1){ ?>

                                <div class="form-bottom-text" style="margin-top: 5px;">
                                    <input type="checkbox" class="form-check" id="termsAndConditionForSweden" name="termsAndConditionForSweden" style="margin: 0px;">
                                    <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                        Jag är inte registrerad hos Spelpaus.se
                                        <div class="form-term-link"> 
                                            <a href="https://www.spelpaus.se/"  target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">Les mer</a>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>

                            <?php } ?>
                            
                        </div>
                    </div>
                </div>

                <div id="winnerModel" class="modal winner-modal">
                    <div class="model-winner winner-modal-content selection-none">
                        <div id="winnerPopup" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink; ?>');" class="color-white winner-modal-1" style="background-color: <?php echo $winningFormBGColor; ?>;"> <div class="winner-header" style="background: <?php echo $winningHeaderBGColor; ?>;">
                                <!-- <span class="close winClose">&times;</span> -->
                                <div class="txt-center win-main-title firstname-replace-text" style="color: <?php echo $winningHeaderFontColor; ?>; font-family: <?php echo $winningHeaderStyle; ?>;"><?php echo $winningPopupHeader; ?></div>
                            </div>
                            <div class="winner-img-main">
                                <div class="winner-img-div">
                                    <div class="winner-title txt-center firstname-replace-text">
                                        <strong style="color: <?php echo $winningImageHeaderFontColor; ?>; font-family: <?php echo $winningImageHeaderStyle; ?>;" ><?php echo $winningImageHeader; ?></strong>
                                    </div>
                                    <img src="<?php echo $winningImage; ?>" class="winner-img">
                                </div>
                            </div>
                            <div class="winner-txt txt-center">
                                <div class="winner-txt-title firstname-replace-text">
                                    <strong style="color: <?php echo $winningHeaderBelowImageFontColor; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle; ?>;" ><?php echo $headerBelowWinningImage; ?></strong>
                                </div>
                                <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeWinningValueFontColor; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle; ?>;">
                                    <?php echo $descriptionBeforeWinningValue; ?>
                                </div>
                            </div>
                            <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $valueDescriptionFontColor; ?>; font-family: <?php echo $valueDescriptionFontStyle; ?>; background-color: <?php echo $valueDescriptionBGColor; ?>;" >
                                <?php echo $winningValue; ?>
                            </div>
                            <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterWinningValueFontColor; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle; ?>;">
                                <?php echo $descriptionAfterWinningValue; ?>
                            </div>
                            <div class="offer-gift winner-bottom-btn">
                                <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $footerButtonFontColor; ?>; font-family: <?php echo $footerButtonFontStyle; ?>; background-color: <?php echo $footerButtonBGColor; ?>;<?=($footerButtonClick == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText; ?></button>
                            </div>
                        </div>

                        <?php if (@$isAddWinningForm2 == 1) { ?>

                            <div id="winnerPopup2" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink2; ?>');" class="color-white winner-modal-2" style="background-color: <?php echo $winningFormBGColor2; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <!-- <div class="txt-center win-main-title" style="color: <?php echo $winningHeaderFontColor2; ?>; font-family: <?php echo $winningHeaderStyle2; ?>;"><?php echo $winningPopupHeader2; ?></div> -->
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center firstname-replace-text">
                                            <strong style="color: <?php echo $winningImageHeaderFontColor2; ?>; font-family: <?php echo $winningImageHeaderStyle2; ?>;" ><?php echo $winningImageHeader2; ?></strong>
                                        </div>
                                        <img src="<?php echo $winningImage2; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title firstname-replace-text">
                                        <strong style="color: <?php echo $winningHeaderBelowImageFontColor2; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle2; ?>;" ><?php echo $headerBelowWinningImage2; ?></strong>
                                    </div>
                                    <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeWinningValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle2; ?>;">
                                        <?php echo $descriptionBeforeWinningValue2; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $valueDescriptionFontColor2; ?>; font-family: <?php echo $valueDescriptionFontStyle2; ?>; background-color: <?php echo $valueDescriptionBGColor2; ?>;" >
                                    <?php echo $winningValue2; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterWinningValueFontColor2; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle2; ?>;">
                                    <?php echo $descriptionAfterWinningValue2; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $footerButtonFontColor2; ?>; font-family: <?php echo $footerButtonFontStyle2; ?>; background-color: <?php echo $footerButtonBGColor2; ?>;<?=($footerButtonClick2 == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick2 == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText2; ?></button>
                                </div>
                            </div>

                        <?php } ?>
                        <?php if (@$isAddWinningForm3 == 1) { ?>

                            <div id="winnerPopup3" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink3; ?>');" class="color-white winner-modal-3" style="background-color: <?php echo $winningFormBGColor3; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <!-- <div class="txt-center win-main-title" style="color: <?php echo $winningHeaderFontColor3; ?>; font-family: <?php echo $winningHeaderStyle3; ?>;"><?php echo $winningPopupHeader3; ?></div> -->
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center firstname-replace-text">
                                            <strong style="color: <?php echo $winningImageHeaderFontColor3; ?>; font-family: <?php echo $winningImageHeaderStyle3; ?>;" ><?php echo $winningImageHeader3; ?></strong>
                                        </div>
                                        <img src="<?php echo $winningImage3; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title firstname-replace-text">
                                        <strong style="color: <?php echo $winningHeaderBelowImageFontColor3; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle3; ?>;" ><?php echo $headerBelowWinningImage3; ?></strong>
                                    </div>
                                    <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeWinningValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle3; ?>;">
                                        <?php echo $descriptionBeforeWinningValue3; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $valueDescriptionFontColor3; ?>; font-family: <?php echo $valueDescriptionFontStyle3; ?>; background-color: <?php echo $valueDescriptionBGColor3; ?>;" >
                                    <?php echo $winningValue3; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterWinningValueFontColor3; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle3; ?>;">
                                    <?php echo $descriptionAfterWinningValue3; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn ">
                                    <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $footerButtonFontColor3; ?>; font-family: <?php echo $footerButtonFontStyle3; ?>; background-color: <?php echo $footerButtonBGColor3; ?>;<?=($footerButtonClick3 == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick3 == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText3; ?></button>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>

                <div id="loserModel" class="modal winner-modal" role="dialog">
                    <div class="model-winner winner-modal-content selection-none">                        
                        <div id="loserPopup" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink; ?>');" class="color-white winner-modal-1" style="background-color: <?php echo $losingFormBGColor; ?>;">
                            <div class="winner-header" style="background: <?php echo $losingHeaderBGColor; ?>;">
                                <!-- <span class="close winClose">&times;</span> -->
                                <div class="txt-center win-main-title firstname-replace-text" style="color: <?php echo $losingHeaderFontColor; ?>; font-family: <?php echo $losingHeaderStyle; ?>;"><?php echo $losingPopupHeader; ?></div>
                            </div>
                            <div class="winner-img-main">
                                <div class="winner-img-div">
                                    <div class="winner-title txt-center firstname-replace-text">
                                        <strong style="color: <?php echo $losingImageHeaderFontColor; ?>; font-family: <?php echo $losingImageHeaderStyle; ?>;" ><?php echo $losingImageHeader; ?></strong>
                                    </div>
                                    <img src="<?php echo $losingImage; ?>" class="winner-img">
                                </div>
                            </div>
                            <div class="winner-txt txt-center">
                                <div class="winner-txt-title firstname-replace-text">
                                    <strong style="color: <?php echo $losingHeaderBelowImageFontColor; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle; ?>;" ><?php echo $headerBelowLosingImage; ?></strong>
                                </div>
                                <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeLosingValueFontColor; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle; ?>;">
                                    <?php echo $descriptionBeforeLosingValue; ?>
                                </div>
                            </div>
                            <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $losingValueDescriptionFontColor; ?>; font-family: <?php echo $losingValueDescriptionFontStyle; ?>; background-color: <?php echo $losingValueDescriptionBGColor; ?>;" >
                                <?php echo $losingValue; ?>
                            </div>
                            <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterLosingValueFontColor; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle; ?>;">
                                <?php echo $descriptionAfterLosingValue; ?>
                            </div>
                            <div class="offer-gift winner-bottom-btn">
                                <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $losingFooterButtonFontColor; ?>; font-family: <?php echo $losingFooterButtonFontStyle; ?>; background-color: <?php echo $losingFooterButtonBGColor; ?>;" ><?php echo @$losingFooterButtonText; ?></button>
                            </div>
                        </div>

                        <?php if (@$isAddLosingForm2 == 1) { ?>

                            <div id="losingPopup2" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink2; ?>');" class="color-white winner-modal-2" style="background-color: <?php echo $losingFormBGColor2; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <div class="txt-center win-main-title firstname-replace-text" style="color: <?php echo $losingHeaderFontColor2; ?>; font-family: <?php echo $losingHeaderStyle2; ?>;"><!-- <?php echo $losingPopupHeader2; ?> --></div>
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center firstname-replace-text">
                                            <strong style="color: <?php echo $losingImageHeaderFontColor2; ?>; font-family: <?php echo $losingImageHeaderStyle2; ?>;" ><?php echo $losingImageHeader2; ?></strong>
                                        </div>
                                        <img src="<?php echo $losingImage2; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title firstname-replace-text">
                                        <strong style="color: <?php echo $losingHeaderBelowImageFontColor2; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle2; ?>;" ><?php echo $headerBelowLosingImage2; ?></strong>
                                    </div>
                                    <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeLosingValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle2; ?>;">
                                        <?php echo $descriptionBeforeLosingValue2; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $losingValueDescriptionFontColor2; ?>; font-family: <?php echo $losingValueDescriptionFontStyle2; ?>; background-color: <?php echo $losingValueDescriptionBGColor2; ?>;" >
                                    <?php echo $losingValue2; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterLosingValueFontColor2; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle2; ?>;">
                                    <?php echo $descriptionAfterLosingValue2; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $losingFooterButtonFontColor2; ?>; font-family: <?php echo $losingFooterButtonFontStyle2; ?>; background-color: <?php echo $losingFooterButtonBGColor2; ?>;" ><?php echo @$losingFooterButtonText2; ?></button>
                                </div>
                            </div>

                        <?php } ?>
                        <?php if (@$isAddLosingForm3 == 1) { ?>

                            <div id="losingPopup3" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink3; ?>');" class="color-white winner-modal-3" style="background-color: <?php echo $losingFormBGColor3; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <div class="txt-center win-main-title firstname-replace-text" style="color: <?php echo $losingHeaderFontColor3; ?>; font-family: <?php echo $losingHeaderStyle3; ?>;"><!-- <?php echo $losingPopupHeader3; ?> --></div>
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center firstname-replace-text">
                                            <strong style="color: <?php echo $losingImageHeaderFontColor3; ?>; font-family: <?php echo $losingImageHeaderStyle3; ?>;" ><?php echo $losingImageHeader3; ?></strong>
                                        </div>
                                        <img src="<?php echo $losingImage3; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title firstname-replace-text">
                                        <strong style="color: <?php echo $losingHeaderBelowImageFontColor3; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle3; ?>;" ><?php echo $headerBelowLosingImage3; ?></strong>
                                    </div>
                                    <div class="winner-txt-small firstname-replace-text" style="color: <?php echo $descriptionBeforeLosingValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle3; ?>;">
                                        <?php echo $descriptionBeforeLosingValue3; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center firstname-replace-text" style="color: <?php echo $losingValueDescriptionFontColor3; ?>; font-family: <?php echo $losingValueDescriptionFontStyle3; ?>; background-color: <?php echo $losingValueDescriptionBGColor3; ?>;" >
                                    <?php echo $losingValue3; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center firstname-replace-text" style="color: <?php echo $descriptionAfterLosingValueFontColor3; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle3; ?>;">
                                    <?php echo $descriptionAfterLosingValue3; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold firstname-replace-text" style="color: <?php echo $losingFooterButtonFontColor3; ?>; font-family: <?php echo $losingFooterButtonFontStyle3; ?>; background-color: <?php echo $losingFooterButtonBGColor3; ?>;" ><?php echo @$losingFooterButtonText3; ?></button>
                                </div>
                            </div>

                        <?php } ?>



                    </div>
                </div>

                <div class="modal selection-none" id="secondChanceModal" role="dialog">
                    <div class="modal-content color-white" style="background-color: #000000;">
                        <div class="form-container">
                            <span class="firstname-replace-text">Hurre firstname! </span><span id="secondChanceText" ></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default secondClose" id="secondChanceCancel" ></button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="secondChanceOk" ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="winStat">
    </div>
    <?php $this->load->view('dashboard/win_page'); ?>
    <?php $this->load->view('dashboard/lose_page'); ?>
    <?php $this->load->view('dashboard/scratch_js_script'); ?>
        
     

