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
<body style="background-image: url(<?php echo $backgroundImage; ?>);">
    <div style="position: absolute;left:0;top:0;opacity: 0;"> <!-- This div is important. It helps canvas to load the proper fonts -->
        <div style="font-family: <?php echo @$gameImageHeaderStyle; ?>;">.</div>
        <div style="font-family: <?php echo @$gameImageDescriptionStyle; ?>;">.</div>
        <div style="font-family: <?php echo @$gameImageFooterStyle; ?>;">.</div>
    </div>

    <audio class="audioDemo" id="audioDemo" loop muted>
        <source src="<?php echo base_url(); ?>images/323734__reitanna__scratching2.mp3" type="audio/mpeg" />
    </audio>

        <div class="page-container">
            <div>
                <div>

                    <div class="main-title txt-center selection-none" style="color:<?php echo $backGroundHeaderColor; ?>; font-family: <?php echo $backGroundHeaderStyle; ?> " id="backGroundHeader">
                        <?php echo $backgroundImageHeader; ?>
                        <img src="<?php echo $backgroundHeaderImage; ?>" class="header-logo-img">
                    </div>
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
                    <div class="main-bottom txt-center">
                        <button class="del-btn selection-none" id="joinBtn" style="background: <?php echo $backgroundButtonBGColor; ?>; border: 1px solid <?php echo $backgroundButtonBGColor; ?>; font-family: <?php echo $backGroundButtonStyle; ?>; color: <?php echo $backGroundButtonFontColor; ?>;" ><?php echo $backgroundButtonText; ?></button>
                        <!-- <button class="color-white vis-btn" id="winnerModelBtn">VIS GEVINST</button> -->
                    </div>
                </div>
                <div class="page-container selection-none" id='userOffer' style="display: none;">
                    <div>
                        <div class="color-white">
                            <div class="main-title txt-center color-white offfer-title font-bold">
                                <?php echo getConfigVal('offerMainHeader'); ?>
                            </div>
                            <div class="main-image-container offer-image-container">
                                <div class="offer-sub-container"></div>

                                <?php for ($i=0; $i < count($offers); $i++) { ?>

                                    <div class="offer offer-<?php if($i % 2 == 0){ echo 'odd'; } else{ echo 'event'; } ?>">
                                        <div class="offer-title offer-head font-bold">
                                            <?php echo $offers[$i]['header'];  ?>
                                        </div>
                                        <img src="<?php echo $offers[$i]['image'];  ?>" class="offer-img">
                                        <div class="offer-sub-title offer-title font-bold">
                                            <?php echo $offers[$i]['title'];  ?>
                                        </div>
                                        <div class="offer-title offer-desc">
                                            <?php echo $offers[$i]['description'];  ?>
                                        </div>
                                    <!-- <div class="offer-title offer-learn-more font-bold">
                                        <a>Læs mere</a>
                                    </div> -->
                                    <div class="offer-gift">
                                        <button class="offer-gift-btn font-bold" onclick="window.open('<?php echo $offers[$i]['offerLink']; ?>');" > <?php echo $offers[$i]['buttonName'];  ?> </button>
                                    </div>
                                    <div class="offer-bottom-arrow" style="display: <?php if($i == count($offers) - 1){ echo 'none;'; } ?>  " >
                                        <img class="offer-bottom-arrow-img" src="<?php echo base_url(); ?>images/arrow-bottom.png">
                                    </div>
                                </div>

                            <?php } ?>

                            <div style="clear: both;"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="cookie-position">
                <div id="cookieContainer" class="cookie-container selection-none" style="background: <?php echo @$backgroundFooterBackgroundColor; ?>; ">
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

                <div id="cookieTitle" class="main-title txt-center cookie-title selection-none" style="display: none">
                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="cookieLink" target="_blank" style = "color: <?php echo @$backGroundCookieColor; ?>; font-size : 12px;"></a>
                </div>
            </div>
            <div id="cookieModel" class="modal cookie-modal-container">
                <div class="cookie-modal-content" style="background-color: <?php echo @$backgroundFooterBackgroundColor; ?>;">

                    <div class="cookie-sub-contain">
                        <span class="cookie-txt" style="color: <?php echo @$backGroundFooterFontColor; ?>;">
                            <?php echo @$backgroundFooterFontText; ?>
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" target="_target"  style="color: <?php echo @$backGroundFooterMoreColor; ?>;" ><?php echo @$backgroundFooterMoreText; ?></a>
                        </span>
                        <div class="cookie-btn-container">
                            <button type="button" class="btn cookie-btn acceptCookies" id="acceptCookies" style="background-color: <?php echo @$backgroundFooterButtonBackgroundColor; ?>; color: <?php echo @$backGroundFooterButtonFontColor; ?>;" ><?php echo @$backgroundFooterButtonText; ?></button>
                        </div>
                        <div class="txt-center color-white popup-cookie-title">
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="modalCookieLink" target="_blank" style = "color: black;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="permissionModel" class="modal">
                <!-- Modal content -->
                <div class="modal-content color-white modal-bg selection-none">
                    <span class="close perClose">&times;</span>
                    <div class="txt-center model-title"><?php echo $userInfoHeader; ?></div>
                    <div class="form-container text-center">
                        <div id="userInfoError"></div>
                    </div>

                    <?php if($isReady == 1){ ?>
                        <div class="form-container">
                            <?php 
                            $userInfo = json_decode($userInfo);
                            $userInfoRequired = json_decode($userInfoRequired);
                            if (count($userInfoRequired) == 0) {
                                $userInfoRequired = array();   
                            }

                            
                            /*
                                Email id is always required and will always show it to user
                            */

                                $replaceArr = array('Email adresse','E-postadress','Sähköposti','E-postadresse','Email address');

                            //check how many fields are required

                                $differArrUserInfo = array_diff($userInfo, $replaceArr);
                                $placeholder = '';
                                $emailName = '';
                                foreach (@$userInfo as $uf) {
                                    if (in_array($uf,$replaceArr)) {
                                        $placeholder = $uf.' *'; 
                                        $emailName = str_replace(' ', '', $uf);
                                    }
                                }
                                ?>

                                <?php foreach (@$differArrUserInfo as $uInfo) { 
                                    $getValueByGet = str_replace(' ', '', $uInfo);
                                    ?>
                                    <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>" >
                                <?php } ?>
                                <input type="text" class="model-txt-box txt-center permission-model-text-box" id="emailId" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$emailName]; ?>" >
                                <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">

                                <button class="model-txt-box txt-center form-btn" id="btn_register"> <?php echo $userInfoButton; ?> </button>
                            </div>
                        <?php } ?>

                        <div class="form-bottom-text">
                            <input type="checkbox" class="form-check" id="termsAndCondition" name="termsAndCondition" style="margin: 0px;">
                            <div class="form-term">
                                <?php echo $shortDescriptionOfTerms; ?>
                                <div class="form-term-link">
                                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_blank"><?php echo $shortTermsLinkInUserInfo; ?></a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>

                <div id="winnerModel" class="winner-modal">
                    <div class="model-winner winner-modal-content selection-none">
                        <div id="winnerPopup" onclick="window.open('<?php echo $winningFooterButtonLink; ?>');" class="color-white winner-modal-1" style="background-color: <?php echo $winningFormBGColor; ?>;">
                            <div class="winner-header" style="background: <?php echo $winningHeaderBGColor; ?>;">
                                <!-- <span class="close winClose">&times;</span> -->
                                <div class="txt-center win-main-title" style="color: <?php echo $winningHeaderFontColor; ?>; font-family: <?php echo $winningHeaderStyle; ?>;"><?php echo $winningPopupHeader; ?></div>
                            </div>
                            <div class="winner-img-main">
                                <div class="winner-img-div">
                                    <div class="winner-title txt-center">
                                        <strong style="color: <?php echo $winningImageHeaderFontColor; ?>; font-family: <?php echo $winningImageHeaderStyle; ?>;" ><?php echo $winningImageHeader; ?></strong>
                                    </div>
                                    <img src="<?php echo $winningImage; ?>" class="winner-img">
                                </div>
                            </div>
                            <div class="winner-txt txt-center">
                                <div class="winner-txt-title">
                                    <strong style="color: <?php echo $winningHeaderBelowImageFontColor; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle; ?>;" ><?php echo $headerBelowWinningImage; ?></strong>
                                </div>
                                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle; ?>;">
                                    <?php echo $descriptionBeforeWinningValue; ?>
                                </div>
                            </div>
                            <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor; ?>; font-family: <?php echo $valueDescriptionFontStyle; ?>; background-color: <?php echo $valueDescriptionBGColor; ?>;" >
                                <?php echo $winningValue; ?>
                            </div>
                            <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle; ?>;">
                                <?php echo $descriptionAfterWinningValue; ?>
                            </div>
                            <div class="offer-gift winner-bottom-btn">
                                <button class="winner-btn font-bold" style="color: <?php echo $footerButtonFontColor; ?>; font-family: <?php echo $footerButtonFontStyle; ?>; background-color: <?php echo $footerButtonBGColor; ?>;" ><?php echo @$winningFooterButtonText; ?></button>
                            </div>
                        </div>

                        <?php if (@$isAddWinningForm2 == 1) { ?>

                            <div id="winnerPopup2" onclick="window.open('<?php echo $winningFooterButtonLink2; ?>');" class="color-white winner-modal-2" style="background-color: <?php echo $winningFormBGColor2; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <!-- <div class="txt-center win-main-title" style="color: <?php echo $winningHeaderFontColor2; ?>; font-family: <?php echo $winningHeaderStyle2; ?>;"><?php echo $winningPopupHeader2; ?></div> -->
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center">
                                            <strong style="color: <?php echo $winningImageHeaderFontColor2; ?>; font-family: <?php echo $winningImageHeaderStyle2; ?>;" ><?php echo $winningImageHeader2; ?></strong>
                                        </div>
                                        <img src="<?php echo $winningImage2; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title">
                                        <strong style="color: <?php echo $winningHeaderBelowImageFontColor2; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle2; ?>;" ><?php echo $headerBelowWinningImage2; ?></strong>
                                    </div>
                                    <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle2; ?>;">
                                        <?php echo $descriptionBeforeWinningValue2; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor2; ?>; font-family: <?php echo $valueDescriptionFontStyle2; ?>; background-color: <?php echo $valueDescriptionBGColor2; ?>;" >
                                    <?php echo $winningValue2; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor2; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle2; ?>;">
                                    <?php echo $descriptionAfterWinningValue2; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold" style="color: <?php echo $footerButtonFontColor2; ?>; font-family: <?php echo $footerButtonFontStyle2; ?>; background-color: <?php echo $footerButtonBGColor2; ?>;" ><?php echo @$winningFooterButtonText2; ?></button>
                                </div>
                            </div>

                        <?php } ?>
                        <?php if (@$isAddWinningForm3 == 1) { ?>

                            <div id="winnerPopup3" onclick="window.open('<?php echo $winningFooterButtonLink3; ?>');" class="color-white winner-modal-3" style="background-color: <?php echo $winningFormBGColor3; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <!-- <div class="txt-center win-main-title" style="color: <?php echo $winningHeaderFontColor3; ?>; font-family: <?php echo $winningHeaderStyle3; ?>;"><?php echo $winningPopupHeader3; ?></div> -->
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center">
                                            <strong style="color: <?php echo $winningImageHeaderFontColor3; ?>; font-family: <?php echo $winningImageHeaderStyle3; ?>;" ><?php echo $winningImageHeader3; ?></strong>
                                        </div>
                                        <img src="<?php echo $winningImage3; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title">
                                        <strong style="color: <?php echo $winningHeaderBelowImageFontColor3; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle3; ?>;" ><?php echo $headerBelowWinningImage3; ?></strong>
                                    </div>
                                    <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle3; ?>;">
                                        <?php echo $descriptionBeforeWinningValue3; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor3; ?>; font-family: <?php echo $valueDescriptionFontStyle3; ?>; background-color: <?php echo $valueDescriptionBGColor3; ?>;" >
                                    <?php echo $winningValue3; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor3; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle3; ?>;">
                                    <?php echo $descriptionAfterWinningValue3; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold" style="color: <?php echo $footerButtonFontColor3; ?>; font-family: <?php echo $footerButtonFontStyle3; ?>; background-color: <?php echo $footerButtonBGColor3; ?>;" ><?php echo @$winningFooterButtonText3; ?></button>
                                </div>
                            </div>

                        <?php } ?>



                    </div>
                </div>

                <div id="loserModel" class="winner-modal">
                    <div class="model-winner winner-modal-content selection-none">
                        <div id="loserPopup" onclick="window.open('<?php echo $losingFooterButtonLink; ?>');" class="color-white winner-modal-1" style="background-color: <?php echo $losingFormBGColor; ?>;">
                            <div class="winner-header" style="background: <?php echo $losingHeaderBGColor; ?>;">
                                <!-- <span class="close winClose">&times;</span> -->
                                <div class="txt-center win-main-title" style="color: <?php echo $losingHeaderFontColor; ?>; font-family: <?php echo $losingHeaderStyle; ?>;"><?php echo $losingPopupHeader; ?></div>
                            </div>
                            <div class="winner-img-main">
                                <div class="winner-img-div">
                                    <div class="winner-title txt-center">
                                        <strong style="color: <?php echo $losingImageHeaderFontColor; ?>; font-family: <?php echo $losingImageHeaderStyle; ?>;" ><?php echo $losingImageHeader; ?></strong>
                                    </div>
                                    <img src="<?php echo $losingImage; ?>" class="winner-img">
                                </div>
                            </div>
                            <div class="winner-txt txt-center">
                                <div class="winner-txt-title">
                                    <strong style="color: <?php echo $losingHeaderBelowImageFontColor; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle; ?>;" ><?php echo $headerBelowLosingImage; ?></strong>
                                </div>
                                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle; ?>;">
                                    <?php echo $descriptionBeforeLosingValue; ?>
                                </div>
                            </div>
                            <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor; ?>; font-family: <?php echo $losingValueDescriptionFontStyle; ?>; background-color: <?php echo $losingValueDescriptionBGColor; ?>;" >
                                <?php echo $losingValue; ?>
                            </div>
                            <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle; ?>;">
                                <?php echo $descriptionAfterLosingValue; ?>
                            </div>
                            <div class="offer-gift winner-bottom-btn">
                                <button class="winner-btn font-bold" style="color: <?php echo $losingFooterButtonFontColor; ?>; font-family: <?php echo $losingFooterButtonFontStyle; ?>; background-color: <?php echo $losingFooterButtonBGColor; ?>;" ><?php echo @$losingFooterButtonText; ?></button>
                            </div>
                        </div>

                        <?php if (@$isAddLosingForm2 == 1) { ?>

                            <div id="losingPopup2" onclick="window.open('<?php echo $losingFooterButtonLink2; ?>');" class="color-white winner-modal-2" style="background-color: <?php echo $losingFormBGColor2; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <div class="txt-center win-main-title" style="color: <?php echo $losingHeaderFontColor2; ?>; font-family: <?php echo $losingHeaderStyle2; ?>;"><!-- <?php echo $losingPopupHeader2; ?> --></div>
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center">
                                            <strong style="color: <?php echo $losingImageHeaderFontColor2; ?>; font-family: <?php echo $losingImageHeaderStyle2; ?>;" ><?php echo $losingImageHeader2; ?></strong>
                                        </div>
                                        <img src="<?php echo $losingImage2; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title">
                                        <strong style="color: <?php echo $losingHeaderBelowImageFontColor2; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle2; ?>;" ><?php echo $headerBelowLosingImage2; ?></strong>
                                    </div>
                                    <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle2; ?>;">
                                        <?php echo $descriptionBeforeLosingValue2; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor2; ?>; font-family: <?php echo $losingValueDescriptionFontStyle2; ?>; background-color: <?php echo $losingValueDescriptionBGColor2; ?>;" >
                                    <?php echo $losingValue2; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor2; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle2; ?>;">
                                    <?php echo $descriptionAfterLosingValue2; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold" style="color: <?php echo $losingFooterButtonFontColor2; ?>; font-family: <?php echo $losingFooterButtonFontStyle2; ?>; background-color: <?php echo $losingFooterButtonBGColor2; ?>;" ><?php echo @$losingFooterButtonText2; ?></button>
                                </div>
                            </div>

                        <?php } ?>
                        <?php if (@$isAddLosingForm3 == 1) { ?>

                            <div id="losingPopup3" onclick="window.open('<?php echo $losingFooterButtonLink3; ?>');" class="color-white winner-modal-3" style="background-color: <?php echo $losingFormBGColor3; ?>;">
                                <div class="winner-arrow-down">
                                    <img src="./images/winner-arrow-down.png" />
                                </div>

                                <div class="winner-header">
                                    <!-- <span class="close winClose">&times;</span> -->
                                    <div class="txt-center win-main-title" style="color: <?php echo $losingHeaderFontColor3; ?>; font-family: <?php echo $losingHeaderStyle3; ?>;"><!-- <?php echo $losingPopupHeader3; ?> --></div>
                                </div>
                                <div class="winner-img-main">
                                    <div class="winner-img-div">
                                        <div class="winner-title txt-center">
                                            <strong style="color: <?php echo $losingImageHeaderFontColor3; ?>; font-family: <?php echo $losingImageHeaderStyle3; ?>;" ><?php echo $losingImageHeader3; ?></strong>
                                        </div>
                                        <img src="<?php echo $losingImage3; ?>" class="winner-img">
                                    </div>
                                </div>
                                <div class="winner-txt txt-center">
                                    <div class="winner-txt-title">
                                        <strong style="color: <?php echo $losingHeaderBelowImageFontColor3; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle3; ?>;" ><?php echo $headerBelowLosingImage3; ?></strong>
                                    </div>
                                    <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle3; ?>;">
                                        <?php echo $descriptionBeforeLosingValue3; ?>
                                    </div>
                                </div>
                                <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor3; ?>; font-family: <?php echo $losingValueDescriptionFontStyle3; ?>; background-color: <?php echo $losingValueDescriptionBGColor3; ?>;" >
                                    <?php echo $losingValue3; ?>
                                </div>
                                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor3; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle3; ?>;">
                                    <?php echo $descriptionAfterLosingValue3; ?>
                                </div>
                                <div class="offer-gift winner-bottom-btn">
                                    <button class="winner-btn font-bold" style="color: <?php echo $losingFooterButtonFontColor3; ?>; font-family: <?php echo $losingFooterButtonFontStyle3; ?>; background-color: <?php echo $losingFooterButtonBGColor3; ?>;" ><?php echo @$losingFooterButtonText3; ?></button>
                                </div>
                            </div>

                        <?php } ?>



                    </div>
                </div>

                <div class="modal selection-none" id="secondChanceModal" role="dialog">
                    <div class="modal-content color-white" style="background-color: #000000;">
                        <div class="form-container">
                            <span id="secondChanceText" ></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default secondClose" id="secondChanceCancel" ></button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="secondChanceOk" ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            var BASE_URL = '<?php echo base_url(); ?>';
        </script>

        <script type="text/javascript">

            var language = '<?php echo $language; ?>';
            var scratchImg = '<?php echo $gameImage; ?>';
            var backgroundImage = '<?php echo $backgroundImage; ?>';
            var extraChance = <?php echo $extraChance; ?>;
            var isSoundOn = <?php echo $isSoundOn; ?>;
            var isReady = <?php echo $isReady; ?>;
            
            var gameImageDescription = '<?php echo $gameImageDescription; ?>';
            var gameFooterImage = '<?php echo @$gameFooterImage; ?>';
            var gameImageFooterText = '<?php echo @$gameImageFooterText; ?>';
            var winSequence = <?php echo $winSequence; ?>;
            var currentChance = 0;
            var trackingUrl = "<?php echo @$trackingUrl; ?>";

            /* new varible */
            var gameImageHeader = '<?php echo $gameImageHeader; ?>';
            var gameImageHeaderColor = '<?php echo $gameImageHeaderColor; ?>';
            var gameImageHeaderStyle = '<?php echo $gameImageHeaderStyle; ?>';
            

            var subHeaderFirstLine = '';
            var subHeaderFirstLineStyle = '';
            var subHeaderFirstLineColor = '';
            var subHeaderSecondLine = '';
            var subHeaderSecondLineStyle = '';
            var subHeaderSecondLineColor = '';
            <?php if($subHeaderFirstLine != ''){ ?>
                var subHeaderFirstLine = '<?php echo $subHeaderFirstLine; ?>';
                var subHeaderFirstLineStyle = '<?php echo $subHeaderFirstLineStyle; ?>';
                var subHeaderFirstLineColor = '<?php echo $subHeaderFirstLineColor; ?>';

                var subHeaderSecondLine = '<?php echo $subHeaderSecondLine; ?>';
                var subHeaderSecondLineStyle = '<?php echo $subHeaderSecondLineStyle; ?>';
                var subHeaderSecondLineColor = '<?php echo $subHeaderSecondLineColor; ?>';

            <?php } else if($subHeaderFirstLine == '' && $subHeaderSecondLineColor != ''){ ?>
                var subHeaderFirstLine = '<?php echo $subHeaderSecondLine; ?>';
                var subHeaderFirstLineStyle = '<?php echo $subHeaderSecondLineStyle; ?>';
                var subHeaderFirstLineColor = '<?php echo $subHeaderSecondLineColor; ?>';

                var subHeaderSecondLine = '';
                var subHeaderSecondLineStyle = '';
                var subHeaderSecondLineColor = '';
            <?php }?>

            
            var footerTextFirstLine = '';
            var footerTextFirstLineStyle = '';
            var footerTextFirstLineColor = '';
            var footerTextArray = [
                {
                    line: '<?php  echo $footerTextFirstLine; ?>',
                    style: '<?php echo $footerTextFirstLineStyle; ?>',
                    color: '<?php echo $footerTextFirstLineColor; ?>',
                }, {
                    line: '<?php  echo $footerTextSecondLine; ?>',
                    style: '<?php echo $footerTextSecondLineStyle; ?>',
                    color: '<?php echo $footerTextSecondLineColor; ?>',
                },{
                    line: '<?php  echo $footerTextThirdLine; ?>',
                    style: '<?php echo $footerTextThirdLineStyle; ?>',
                    color: '<?php echo $footerTextThirdLineColor; ?>'
                }
            ];

            footerTextArray.sort(function(a,b){
                return a.line == ""
            });

            var footerTextFirstLine = footerTextArray[0].line;
            var footerTextFirstLineStyle = footerTextArray[0].style;
            var footerTextFirstLineColor = footerTextArray[0].color;

            var footerTextSecondLine = footerTextArray[1].line;
            var footerTextSecondLineStyle = footerTextArray[1].style;
            var footerTextSecondLineColor = footerTextArray[1].color;

            var footerTextThirdLine = footerTextArray[2].line;
            var footerTextThirdLineStyle = footerTextArray[2].style;
            var footerTextThirdLineColor = footerTextArray[2].color;

            var sources = []; // I need to add values to this array dynamically I
            
            var canvas = document.getElementById('myCanvas'),
            context = canvas.getContext('2d'),
            brushRadius = (canvas.width / 100) * 5,
            scratched = 80;
            var playAudio = document.getElementById("audioDemo");
            // playAudio.loop = "true";


            // myAudio.setAttribute('src','audiofile.mp3');
            var canvasWidth = $("#myCanvas").width();
            var canvasHeight = $("#myCanvas").height();

            var canvasLoadedOnce = false;
            var isFirstTime = 0;

            function clearCanvas(){
                canvas.getContext('2d');
                context.clearRect(0, 0, canvas.width, canvas.height);
            }

            function setCanvasStuffs(callback){
                isFirstTime = 0;
                canvasLoadedOnce = true;
                context.globalCompositeOperation = "source-over";

                $('#myCanvas').show('slow');

                /*$("#myCanvas").width(scratchWidth);
                $("#myCanvas").height(scratchHeight);*/
                $("#myCanvas").attr("width", $('#permissionModelBtn').width() + "px");
                $("#myCanvas").attr("height", $('#permissionModelBtn').height() + "px");

                sources = [];

                //first image
                if (scratchImg != '' ) {

                    sources.push(scratchImg);
                    //second image
                    sources.push(BASE_URL + 'images/lines-with-back.png');   
                    
                }else{
                    sources.push(backgroundImage);    
                    //second image
                    sources.push(BASE_URL + 'images/transparant-gray-img.png');
                }
                
                //footer image
                if(gameImageFooterText != ''){
                    if(gameFooterImage != ''){
                        sources.push(gameFooterImage);    
                    }
                }
                
                loadImages(sources, generateCanvasImg, callback);
            }

            var generateCanvasImg = function (images) {
                for (i = 0; i < sources.length; i++) {
                    if (i == 2) {
                        /*context.drawImage(images[i], 300, 280, 236, 155);*/
                        var canvasPos = document.getElementById('myCanvas').getBoundingClientRect();
                        var smallPosX = $('#permissionModelBtn').width() / 2.8;
                        var smallPosY = $('.scratch-container').height() / 1.5;

                        var smallWidth = (250 * $('#permissionModelBtn').width()) / 800;
                        var smallHeight = (150 * $('.scratch-container').height()) / 457.828;
                        
                        context.drawImage(images[i], smallPosX, smallPosY, smallWidth, smallHeight);

                    } else {
                        if(scratchImg != ''){
                            context.drawImage(images[i], 0, 0, $('#permissionModelBtn').width(), $('.scratch-container').height());
                        }else{
                            // this is for image of girl =========== if scratch-img not available ================
                            var girlWidth = images[i].width;
                            var girlHeight = images[i].height;
                            var windowWidth = window.innerWidth;
                            var windowHeight = window.innerHeight;

                            var girlRatio = girlWidth / girlHeight;
                            var screenRatio = windowWidth / windowHeight;

                            var appliedWidth, appliedHeight;

                            if (girlRatio > screenRatio) {
                                appliedHeight = windowHeight;
                                appliedWidth = appliedHeight * girlRatio;
                            } else {
                                appliedWidth = windowWidth;
                                appliedHeight = appliedWidth * (1 / girlRatio);
                            }

                            var canvasPos = document.getElementById('myCanvas').getBoundingClientRect();
                            // var posX = (canvasPos.right) - appliedWidth;
                            var posX = (($('#permissionModelBtn').width() - appliedWidth) / 2);
                            var posY = parseInt("-" + $(".scratch-container").offset().top);
                            context.drawImage(images[i], posX, posY, appliedWidth, appliedHeight);
                        }
                    }

                }

                var maxWidth = (800 * canvas.width) / 800;
                var lineHeight = (60 * canvas.width) / 800;
                var spaceBetweenTwo = (20 * canvas.width) / 800;
                var fontSize = (80 * canvas.width) / 800;
                var x = canvas.width / 2;
                var y;
                var f1y;

                if (footerTextThirdLine != '') {
                    f1y = canvas.height / 1.25;
                } else if (footerTextSecondLine != '') {
                    f1y = canvas.height / 1.20;
                } else if (footerTextFirstLine != '')  {
                    f1y = canvas.height / 1.15;
                }


                if (subHeaderSecondLine != '') {
                    y = canvas.height / 2.3;
                } else {
                    y = canvas.height / 2;
                }
                
                if (typeof f1y !== 'undefined' && f1y != '') {
                    if (subHeaderFirstLine != '' && subHeaderSecondLine == '') {
                        y = (canvas.height - (canvas.height - f1y)) / 2.2;
                    } else if (subHeaderFirstLine != '' && subHeaderSecondLine != '') {
                        y = (canvas.height - (canvas.height - f1y)) / 2.6;
                    }
                   
                }
                
                // for game header title text 
                var textBaseline = "bottom";
                var whichTxt = 1;
                
                writeText(gameImageHeader, x, y + spaceBetweenTwo, maxWidth, lineHeight, fontSize, gameImageHeaderColor, gameImageHeaderStyle, textBaseline, whichTxt);

                if (subHeaderFirstLine != '') {
                    maxWidth = (700 * canvas.width) / 800;
                    fontSize = (60 * canvas.width) / 800;
                    lineHeight = (50 * canvas.width) / 800;
                    textBaseline = 'hanging';
                    whichTxt = 2;


                    writeText(subHeaderFirstLine, x, y + spaceBetweenTwo, maxWidth, lineHeight, fontSize, subHeaderFirstLineColor, subHeaderFirstLineStyle, textBaseline, whichTxt);
                }

                if (subHeaderSecondLine != '') {
                    // maxWidth = (700 * canvas.width) / 800;
                    // fontSize = (50 * canvas.width) / 800;
                    // lineHeight = (45 * canvas.width) / 800;
                    if (typeof f1y !== 'undefined' && f1y != '') {
                        y =  (canvas.height - (canvas.height - f1y)) / 2;
                    } else {
                        y =  (canvas.height) / 1.9;
                    }
                    textBaseline = 'middle';
                    whichTxt = 3;
                     writeText(subHeaderSecondLine, x, y + spaceBetweenTwo, maxWidth, lineHeight, fontSize, subHeaderSecondLineColor, subHeaderSecondLineStyle, textBaseline, whichTxt);
                }

                var footerWidth = (200 * canvas.width) / 800; 
                var footerFontSize = (35 * canvas.width) / 800;
                var footerLineHeight = (10 * canvas.width) / 800;
                var fx = canvas.width / 2;
                
                if (footerTextFirstLine != '') {
                    // f1y = canvas.height / 1.08;
                    textBaseline = 'bottom';
                    var whichTxt = 4;

                    writeText(footerTextFirstLine, fx, f1y, footerWidth, footerLineHeight, footerFontSize, footerTextFirstLineColor, footerTextFirstLineStyle, textBaseline, whichTxt);
                }

                if (footerTextSecondLine != '') {
                    // f2y = canvas.height / 1.16;
                    textBaseline = 'top';
                    var whichTxt = 5;
                    writeText(footerTextSecondLine, fx, f1y, footerWidth, footerLineHeight, footerFontSize, footerTextSecondLineColor, footerTextSecondLineStyle, textBaseline, whichTxt);
                }

                if (footerTextThirdLine != '') {
                    textBaseline = 'bottom';
                    var whichTxt = 6;

                    var f3y = canvas.height / 1.04;
                    writeText(footerTextThirdLine, fx, f3y, footerWidth, footerLineHeight, footerFontSize, footerTextThirdLineColor, footerTextThirdLineStyle, textBaseline, whichTxt);

                }

                    
                
/*
                var maxWidth = (800 * canvas.width) / 800;
                var titleColor = '<?php echo @$gameImageHeaderColor; ?>';
                var descColor = '<?php echo @$gameImageDescriptionColor; ?>';
                var headerFontFamily = '<?php echo @$gameImageHeaderStyle; ?>';
                var descriptionFontFamily = '<?php echo @$gameImageDescriptionStyle; ?>';
                var footerFontFamily = '<?php echo @$gameImageFooterStyle; ?>';

                var spaceBitweenTwo = (20 * canvas.width) / 800;
                var x = canvas.width / 2;
                var y = ((canvas.height / 2));
                var whichTxt = 1;

                if(gameImageFooterText != ''){
                    var fontSize = (60 * canvas.width) / 800;
                    var lineHeight = (50 * canvas.width) / 800;
                    y = (canvas.height) / 3;
                } else {
                    var lineHeight = (65 * canvas.width) / 800; 
                    var fontSize = (80 * canvas.width) / 800;
                }

                var titleText = gameImageHeader;
                var textBaseline = "bottom";
                wrapText(titleText, x, y + spaceBitweenTwo, maxWidth, lineHeight, fontSize, titleColor, headerFontFamily, textBaseline, whichTxt);

                if(gameImageFooterText != ''){
                    fontSize = (40 * canvas.width) / 800;
                    lineHeight = (30 * canvas.width) / 800;
                } else {
                    fontSize = (50 * canvas.width) / 800;
                    lineHeight = (45 * canvas.width) / 800;
                }
                
                var descText = gameImageDescription;
                maxWidth = (700 * canvas.width) / 800;
                textBaseline = 'top';
                whichTxt = 2;
                
                wrapText(descText, x, y + spaceBitweenTwo, maxWidth, lineHeight, fontSize, descColor, descriptionFontFamily, textBaseline, whichTxt);

                if(gameImageFooterText != ''){
                    lineHeight = (30 * canvas.width) / 800;
                    var smallPosX = $('#permissionModelBtn').width() / 2.8;
                    var smallPosY = $('.scratch-container').height() / 1.5;

                    var smallWidth = (250 * $('#permissionModelBtn').width()) / 800;
                    var smallHeight = (150 * $('.scratch-container').height()) / 457.828;
                    x = smallPosX + ( smallWidth / 2 );
                    y = smallPosY + ( smallHeight / 2);
                    var footerText = gameImageFooterText;
                    var footerWidth = (200 * canvas.width) / 800; 
                    var FtxtColor = '<?php echo @$gameImageFooterTextColor; ?>';
                    fontSize = (25 * canvas.width) / 800;
                    textBaseline = 'middle';
                    whichTxt = 3;
                    wrapText(footerText, x, y, footerWidth, lineHeight, fontSize, FtxtColor, footerFontFamily, textBaseline, whichTxt);
                }
*/
            }


            $(document).ready(function(){

                getStuffsInOtherLanguage();

                if (isSoundOn == 1) {
                    playAudio.volume = 1.0;
                    playAudio.play();    
                }

                $('#gameContainer').hide();

                setCanvasStuffs();


                // Get the permissionModel
                var permissionModel = document.getElementById('permissionModel');
                var permissionModelBtn = document.getElementById('permissionModelBtn');
                var permissionClose = document.getElementsByClassName('perClose')[0];
                var joinBtn = document.getElementById('joinBtn');
                var permissionModelBtnCount = 0;


                if (isReady == 1) {

                    permissionModelBtn.onclick = function () {
                        if (permissionModelBtnCount == 0) {
                            permissionModel.style.display = 'block';
                            //userClick();    
                        }else if(permissionModelBtnCount == 1){
                            permissionModel.style.display = 'none';
                        }
                        
                    }
                    
                    window.onclick = function (event) {
                        if (event.target == permissionModel) {
                            permissionModel.style.display = 'none';
                        }
                    }

                    permissionClose.onclick = function () {
                        permissionModel.style.display = 'none';
                    }

                    //join button click

                    joinBtn.onclick = function(){

                        if (permissionModelBtnCount == 0) {
                            permissionModel.style.display = 'block';
                            //userClick();    
                        }else if(permissionModelBtnCount == 1){
                            permissionModel.style.display = 'none';
                        }
                        
                    }
                }

                var ipAddress = '';

                $.getJSON("https://jsonip.com/?callback=?", function (data) {
                    ipAddress = data.ip;
                });


                $('#btn_register').click(function(){

                    var emailId = $('#emailId').val();
                    var errorMsg = '';

                    var userInfoTextVal = [];

                    //convert php array to jquery array 
                    var userInfoRequiredFields = <?php echo json_encode($userInfoRequired); ?>;

                    //if user fields  empty then store in comma seprated string in below variable
                    var userRequiredFields = '';


                    $('.userInfoText').each(function () {

                        var textVal = $(this).val();
                        var textName = $(this).attr('data-name');

                        //check if userfield is empry or not
                        if (textVal == '' && jQuery.inArray(textName, userInfoRequiredFields) != -1) {
                            if (userRequiredFields == '') {
                                userRequiredFields += textName;
                            }else{
                                userRequiredFields += ', ' + textName;
                            }
                            
                        }else{
                            userInfoTextVal.push({name:textName,value:textVal});
                            
                        }
                        
                    });


                    if (userRequiredFields != '') {

                        //get error in all five language
                        $.ajax({
                            type : 'post',
                            url  : BASE_URL + 'home/getRequiredFieldsMsg',
                            data : {
                                language:language
                            },
                            success:function(response){
                                var response = JSON.parse(response);
                                var error = response.emptyFieldsError + ' : ' + userRequiredFields;
                                $('#userInfoError').html('<p style = "color:red" ><strong>'+ error +'</strong></p>'); 
                            }
                        });

                    }else if (emailId == '') {

                        errorMsg = language + '_Empty_Email';
                        getErrorMsg(language,errorMsg);
                        $('#emailId').focus();
                        return false;

                    }else{

                        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if(regex.test(emailId) == false){

                            errorMsg = language + '_Valid_Email';
                            getErrorMsg(language,errorMsg);
                            $('#emailId').focus();
                            return false;

                        }else if($('input#termsAndCondition').is(':checked') == false){

                            errorMsg = language + '_Terms';
                            getErrorMsg(language,errorMsg);
                            return false;

                        }else{

                            var campaignId = $('#campaignId').val();

                            $.ajax({
                                url : BASE_URL + 'home/userRegistration',
                                type: 'post',
                                data : {
                                    campaignId:campaignId,
                                    emailId:emailId,
                                    ipAddress:ipAddress,
                                    userInfoTextVal:userInfoTextVal
                                },
                                success:function(response){

                                    if(response == 3){

                                        errorMsg = language + '_Limit_Exceed';
                                        getErrorMsg(language,errorMsg);
                                        $('#emailId').focus();

                                    }else if (response == 1) {

                                        errorMsg = language + '_Used_Email';
                                        getErrorMsg(language,errorMsg);
                                        $('#emailId').focus();

                                    }else if(response == 2){

                                        errorMsg = language + '_Sys_Pro';
                                        getErrorMsg(language,errorMsg);
                                        $('#emailId').focus();

                                    }else{

                                        $('#userInfoError').html('');

                                        var mulImages  = JSON.parse(response);
                                        var multipleImages = mulImages.multipleImages;

                                        permissionModel.style.display = 'none';
                                        permissionModelBtnCount = 1;
                                        $('#myCanvas').addClass('diff-cursor');
                                        $('#gameContainer').show();

                                        multipleImagesStuff(multipleImages);
                                        
                                    }
                                }
                            }); 
                        }
                    } 
                });
            });


            // load Canvas Image
            function loadImages(sources, callback, extraCallback) {
                var images = [];
                var loadedImages = 0;
                var numImages = sources.length;
                
                for (i = 0; i < sources.length; i++) {
                    images[i] = new Image();

                    images[i].onload = function () {
                        if (++loadedImages >= numImages) {
                            callback(images);

                            if(extraCallback){
                                extraCallback();
                            }
                        }
                    };
                    images[i].src = sources[i];
                }
            }


            function writeText(text, x, y, maxWidth, lineHeight, fontSize, textColor, fontFamily, textBaseline, whichTxt) {
                var words = text.split(' ');
                var line = '';

                context.font = fontSize + 'px' + ' ' + fontFamily;
                context.fillStyle = textColor;
                context.lineWidth = 100;
                context.textAlign = 'center';
                context.textBaseline = textBaseline;
                // multiLine = 2;
                // for (var n = 0; n < words.length; n++) {
                //     var testLine = line + words[n] + ' ';
                //     var metrics = context.measureText(testLine);
                //     var testWidth = metrics.width;
                //     if (testWidth > maxWidth && n > 0) {
                //         if (whichTxt == 1 || whichTxt == 3) {
                //             y -= lineHeight;
                //         }
                //         if (whichTxt == 3) {
                //             context.textBaseline = "top";
                //         }
                //         context.fillText(line, x, y);
                //         line = words[n] + ' ';
                //         y += lineHeight;
                //         multiLine ++;
                //     }
                //     else {
                //         line = testLine;
                //     }
                // }
                if (whichTxt == 3) {
                    y += lineHeight;
                }
                context.fillText(text, x, y);
            }

/*
            function wrapText(text, x, y, maxWidth, lineHeight, fontSize, textColor, fontFamily, textBaseline, whichTxt) {

                var words = text.split(' ');
                var line = '';
                context.font = fontSize + 'px' + ' ' + fontFamily;
                context.fillStyle = textColor;
                context.lineWidth = 100;
                context.textAlign = "center";
                context.textBaseline = textBaseline;

                for (var n = 0; n < words.length; n++) {
                    var testLine = line + words[n] + ' ';
                    var metrics = context.measureText(testLine);
                    var testWidth = metrics.width;
                    if (testWidth > maxWidth && n > 0) {
                        if (whichTxt == 1 || whichTxt == 3) {
                            y -= lineHeight;
                        }
                        if (whichTxt == 3) {
                            context.textBaseline = "top";
                        }

                        context.fillText(line, x, y);
                        line = words[n] + ' ';
                        y += lineHeight;
                    }
                    else {
                        line = testLine;
                    }
                }

                context.fillText(line, x, y);
            }
*/
            // function userClick(){
            //     var campaignId = $('#campaignId').val(); 

            //     $.ajax({
            //         type: 'post',
            //         url : BASE_URL + 'home/addUserClick',
            //         data : {
            //             campaignId:campaignId
            //         },
            //         success : function(response){

            //         }
            //     });
            // }


            function getBrushPos(xRef, yRef) {
                var bridgeRect = canvas.getBoundingClientRect();
                return {
                    x: Math.floor((xRef - bridgeRect.left) / (bridgeRect.right - bridgeRect.left) * canvas.width),
                    y: Math.floor((yRef - bridgeRect.top) / (bridgeRect.bottom - bridgeRect.top) * canvas.height)
                };
            }

            // scratch canvas
            function detectLeftButton(event) {
                if ('buttons' in event) {
                    return event.buttons === 1;
                } else if ('which' in event) {
                    return event.which === 1;
                } else {
                    return event.button === 1;
                }
            }

            /** Call this function when user submit a form */
            function drawDot(mouseX, mouseY) {
                context.beginPath();
                context.arc(mouseX, mouseY, brushRadius, 0, 2 * Math.PI, true);
                context.fillStyle = '#000';
                context.globalCompositeOperation = 'destination-out';
                context.fill();
            }

            function multipleImagesStuff(multipleImages){

                 //For Web
                 canvas.addEventListener("mousedown", function (event) {
                    if (isSoundOn == 1) {
                        playAudio.play();
                        playAudio.muted = false; 
                    }
                });

                canvas.addEventListener("mouseup", function (event) {
                    playAudio.muted = true;
                });

                //For mobile
                canvas.addEventListener("touchstart", function (event) {
                    if (isSoundOn == 1) {
                        playAudio.play();
                        playAudio.muted = false;
                    }
                });

                canvas.addEventListener("touchend", function (event) {
                    playAudio.muted = true;
                });

                $('#gameMultipleImages').html('');
                for (var i = 0; i < multipleImages.length; i++) {

                    var mulImage = multipleImages[i];
                    $('#gameMultipleImages').append('<div class="scal-' + (i+1) + '" style = "background-image: url('+ mulImage +')" ></div>');
                }

                canvas.addEventListener('mousemove', function (e) {
                    var brushPos = getBrushPos(e.clientX, e.clientY);
                    var leftBut = detectLeftButton(e);
                    if (leftBut == 1) {
                        drawDot(brushPos.x, brushPos.y);
                    }
                    
                    handlePercentage(getFilledInPixels(32), scratched,multipleImages);
                }, false);

                canvas.addEventListener('touchmove', function (e) {
                    e.preventDefault();
                    var touch = e.targetTouches[0];
                    if (touch) {
                        var brushPos = getBrushPos(touch.pageX, touch.pageY);
                        drawDot(brushPos.x, brushPos.y);
                    }
                    
                    handlePercentage(getFilledInPixels(32), scratched,multipleImages);
                }, false);
            }

            function handlePercentage(filledInPixels, scratched,multipleImages) {

                filledInPixels  = filledInPixels || 0;

                /*if(filledInPixels > 2){
                    $.playSound("http://www.noiseaddicts.com/samples_1w72b820/3724.mp3");
                }*/

                if (filledInPixels >= scratched) {
                    playAudio.muted = true;
                    $('#myCanvas').fadeOut('slow');

                    //isFirstTime is prevent below code to call more than one time after 80% scractched
                    if (isFirstTime == 0) {

                        isFirstTime = 1;    

                        //check if user is winner or not
                        var emailId     = $('#emailId').val();
                        var campaignId  = $('#campaignId').val();


                        $.ajax({
                            type:"post",
                            url :BASE_URL+'home/checkUserWinOrNot',
                            data:{
                                campaignId:campaignId,
                                emailId:emailId,
                                multipleImages:multipleImages
                            },
                            success:function(winStat){

                                if (winStat == 1 ) {

                                    //draw win line
                                    $('#winSequenceDiv').html('');
                                    var winSequenceClass = 'winning-line-' + winSequence ;
                                    $('#winSequenceDiv').addClass(winSequenceClass);
                                    $(".tracking-pixel").html("").html(trackingUrl);

                                    var winSetTimeOut = setTimeout(function(){ 
                                        $('#winnerModel').show();
                                        clearTimeout(winSetTimeOut);
                                    }, 3000);
                                    
                                    $('#userOffer').hide();
                                    $('#loserModel').hide();
                                    $('#joinBtn').hide();
                                    userWin(emailId);

                                }else if(winStat == 0){

                                    if (extraChance > 0 && currentChance < extraChance ) {

                                        $(".tracking-pixel").html("").html(trackingUrl);
                                        $('#secondChanceModal').show();
                                        $('#secondChanceOk').off().click(function(){

                                            $('#secondChanceModal').hide();

                                            clearCanvas();
                                            

                                            //get muliple images
                                            $.ajax({
                                                url : BASE_URL + 'home/getShuffledImages',
                                                type : 'post',
                                                data : {
                                                    campaignId:campaignId   
                                                },
                                                success:function(response){

                                                    var mulImages  = JSON.parse(response);
                                                    var multipleImages = mulImages.multipleImages;
                                                    
                                                    setCanvasStuffs(function(){
                                                        multipleImagesStuff(multipleImages);
                                                    });
                                                }   
                                            })
                                        });
                                        currentChance++;
                                        
                                    }else{

                                        $(".tracking-pixel").html("").html(trackingUrl);
                                        $('#winnerModel').hide();
                                        $('#joinBtn').hide();

                                        var offerSetTimeOut = setTimeout(function(){ 
                                            
                                            /*$('#userOffer').show();*/
                                            $('.cookie-position').css({'bottom': '10px', 'position': 'fixed', 'margin-top': '0px'});
                                            $('#loserModel').show();
                                            $('#permissionModelBtn').hide();
                                            $('#gameMultipleImages').html('');
                                            $('#backGroundHeader').hide();
                                            clearTimeout(offerSetTimeOut);
                                            
                                        }, 3000);
                                    }
                                }else if(winStat == 3){
                                    location.reload();
                                }else{

                                    errorMsg = language + '_Sys_Pro';
                                    getErrorMsg(language,errorMsg);
                                    $('#emailId').focus();
                                }
                            }
                        });
                    }
                }
            }


            function userWin(emailId){
                var campaignId = $('#campaignId').val(); 

                $.ajax({
                    type : 'post',
                    url : BASE_URL + 'home/declareUserWin',
                    data : {
                        emailId : emailId,
                        campaignId : campaignId
                    },
                    success:function(response){

                    }
                });
            }

            function getFilledInPixels(stride) {

                if (!stride || stride < 1) { stride = 1; }
                // var context = canvas.getContext('2d');
                
                if ($("#myCanvas").width() > 0) {
                    var pixels = context.getImageData(0, 0, parseFloat($("#myCanvas").attr('width')), parseFloat($("#myCanvas").attr('height')));

                    pdata = pixels.data,
                    l = pdata.length,
                    total = (l / stride),
                    count = 0;

                    for (var i = count = 0; i < l; i += stride) {
                        if (parseInt(pdata[i]) === 0) {
                            count++;
                        }
                    }

                    return Math.round((count / total) * 100);
                }
            }

            function getStuffsInOtherLanguage(){

                $.ajax({
                    url : BASE_URL + 'home/getLangForExtra',
                    type : 'post',
                    data : {
                        language:language
                    },
                    success : function(response){
                        var extraPopup = JSON.parse(response);
                        // give modal text from here
                        
                        $('#secondChanceText').text(extraPopup.chanceText);
                        $('#secondChanceCancel').text(extraPopup.cancel);
                        $('#secondChanceOk').text(extraPopup.ok);
                        /*$('#termsLink').text(extraPopup.terms);*/
                        $('#cookieLink').text(extraPopup.cookieTermsLink);
                        $('#modalCookieLink').text(extraPopup.cookieTermsLink);


                    }
                });
            }


            function getErrorMsg(errorLanguage,errorCode) {
                $.ajax({
                    url : BASE_URL + 'home/getErrorMsgDetail',
                    type : 'post',
                    data : {
                        errorLanguage:errorLanguage,
                        errorCode:errorCode
                    },
                    success : function(response){

                        if (response == 1 ) {
                            var errorCode = errorLanguage + '_Sys_Pro';
                            getErrorMsg(errorLanguage,errorCode);
                        }else{
                         $('#userInfoError').html('<p style = "color:red" ><strong>'+ response +'</strong></p>');   
                     }

                 }
             });

            }


        </script>

