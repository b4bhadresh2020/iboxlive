<style type="text/css">

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

#spin:after {
    content: "<?php echo $wheelSpinButtonName; ?>";
}
.test-block {
    display: flex;
    align-items: center;
}
.test-mobile-input {
    padding-left: 0px;
    width:65%;    
    /*margin-top:-20px;*/
}

.test-mobile-input-select {
    padding-left: 0px;
    width:65%;
    /*margin-top:-20px;*/
}

.test-countryCode-input {
    padding-right: 5px;
    width: 35%;
}
</style>  


<body class="<?=($isBrowserBaseGame == 1) ? 'load-browser-regform' : ''?> selection-none">
    <?php include(APPPATH."views/dashboard/fire_fb_event.php"); ?>

    <div class="bg-image-block game-section" style="height: 100%; <?php if ($wheelBGImage != '') { ?> 
    background-image: url(<?php echo $wheelBGImage; ?>);
    background-position: center;
    background-size: cover;
    <?php }else{ ?>
    background-color: <?php echo $wheelBGColor; ?> ;
    <?php } ?>">
        <!-- <canvas id="canvas" style="display: none; position: absolute;" ></canvas> -->
        <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
            <canvas id="snowCanvas" style="position: absolute;z-index: 0;" ></canvas>
        <?php } ?>

        <audio class="audioDemo" id="wheelSound" muted="muted">
            
            <source src="<?php echo base_url(); ?>sound/new-wheel-sound.m4a" type="audio/mpeg" />
            <source src="<?php echo base_url(); ?>sound/new-wheel-sound.ogg" type="audio/ogg" />
            <source src="<?php echo base_url(); ?>sound/new-wheel-sound.mp3" type="audio/mpeg" />
            <source src="<?php echo base_url(); ?>sound/new-wheel-sound.wav" type="audio/mpeg" />
        </audio>

        <div class="wheel-container row">
            <?php if(@$wheelSlotLogo != ''){ ?>
                <div class="wheel-header-logo">
                    <img src="<?php echo $wheelSlotLogo; ?>" class="wheel-logo-img">
                </div>
            <?php } ?>
            <div class="main-title" id="wheelBGHeader">
				<?php echo $wheelBGHeader; ?>
			</div>
			<?php
                if($isBrowserBaseGame == 1 && $isRegistrationOn != 1) {
            ?>
				<div class="browser-base-regform">
					<div class="reg-container">
					</div>
				</div>
			<?php
				}
			?>
            <div style="height: auto; display: <?php if($wheelBGHeader == '' && $wheelBGDescription == ''){ echo 'none';  } ?>" id="mobileHeaderContainer">
                <div class="mobile-wheel-header" id="mobileBgHeaderDesc" >
                    <div class="wheel-title" style="max-height:<?php if($wheelHeaderCustomHeight != '' ){ echo $wheelHeaderCustomHeight.'px'; }else{ echo '56px'; } ?>; overflow:hidden; font-family: <?php echo $wheelBGHeaderStyle; ?>; color: <?php echo $wheelBGHeaderColor; ?>; display: <?php if($wheelBGHeader == ''){ echo 'none';  } ?> ">
                        <?php echo $wheelBGHeader; ?>
                    </div>
                    <p class="title-txt-small" style="max-height:<?php if($wheelDescriptionCustomHeight != '' ){ echo $wheelDescriptionCustomHeight.'px'; }else{ echo '65px'; } ?>; overflow:hidden;font-family: <?php echo $wheelBGDescriptionStyle; ?>; color: <?php echo $wheelBGDescriptionColor; ?>; display: <?php if($wheelBGDescription == ''){ echo 'none';  } ?>"><?php echo $wheelBGDescription; ?>
                        </p> 
                </div>
            </div>
            <div id="wrapper" class="col-4 col-sm-6 game-container">
                <div id="wheel-grand-parent">
                    <div id="wheel">
                        <div id="wheel-circle">
                            <div id="inner-wheel">
                                
                                <?php for ($i=1; $i <= 8; $i++) {


                                    if($multipleStuffArray['wheelGameTileImage'.$i] != ""){ ?>

                                        <span class="img-txt-<?php echo $i; ?> img-txt">
                                            <img src="<?php echo $multipleStuffArray['wheelGameTileImage'.$i]; ?>" class="whole-img">
                                        </span>

                                    <?php }else{ ?>

                                            <div class="sec" style="border-color:<?php echo $multipleStuffArray['wheelMultiImageBGColor'.$i] ?> transparent;">

                                                <?php if($multipleStuffArray['wheelGameMultiImage'.$i] != '' && $multipleStuffArray['wheelMultiImageTitle'.$i] != ''){ ?>

                                                    <?php if($i == 1 || $i == 7 || $i == 8){ ?>

                                                        <span class="img-txt">

                                                            <div class="sub-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></div>

                                                            <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img" style="height: 100px;"  />

                                                        </span>

                                                    <?php }else{ ?>

                                                        <span class="img-txt">

                                                            <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img"  style="height: 100px;" />

                                                            <div class="sub-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></div>

                                                        </span>

                                                    <?php } ?>

                                                <?php }else if($multipleStuffArray['wheelGameMultiImage'.$i] != ''){ ?>

                                                    <span class="img-txt">
                                                        <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img" />
                                                    </span>

                                                <?php }else if($multipleStuffArray['wheelMultiImageTitle'.$i] != ''){ ?>

                                                    <span class="only-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></span>

                                                <?php } ?>

                                            </div>
                                    
                                <?php   } 
                                    }
                                ?>

                            </div>
                            <div id="spin">
                                <div id="inner-spin"  style="background-image: url(<?php echo @$spinImage; ?>);"></div>
                                <div id="shine"></div>
                            </div>
                        </div>
                        <div class="wheel-pin-bg"></div>
                        <!-- <div class="wheel-pin">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin1" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin2" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin3" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin4" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin5" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin6" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin7" class="wheel-pin-img">
                            <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin8" class="wheel-pin-img">
                        </div> -->
                        <div class="wheel-arrow">
                            <?php if($wheelNibImage == ""){ ?>
                                <img src="<?php echo base_url(); ?>images/wheel_arrow.png">
                            <?php }else{ ?>
                                <img src="<?php echo $wheelNibImage; ?>">
                            <?php } ?>
                            
                        </div>
                    </div>
                    <div id="mobileWheelBtn" class="wheel-btn">
                        <?php $buttonName = "wheel_btn_".strtolower($language).".png" ?>
                        <img src="<?php echo base_url('images/'.$buttonName) ?>" />
                    </div>

                    <?php if(@$hasEighteenPlusTerms){ ?>

                        <div style="" class="has-eighteen-plus"> <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?>
                        </div>

                    <?php } ?>
                </div>

                
                
            </div>
            <?php 
                if($isBrowserBaseGame == 1) {
                    $this->load->view('dashboard/thank_you');
                }
            ?>
            <!-- <div class="col-4 col-sm-1"></div> -->
            <div class="col-4 col-sm-6" id="sidebar">
                
                <div class="form-title">
                    <div id = "desktopBgHeaderDesc" style="text-align: center;">
                        <p class="title-txt-small" style="font-family: <?php echo $wheelBGDescriptionStyle; ?>; color: <?php echo $wheelBGDescriptionColor; ?>; "><?php echo $wheelBGDescription; ?>
                        </p> 
                    </div>
                </div>
                <div class="title txt-center form-title side-form-model del-btn" id="userFormDesktop">

                    <!-- <div class="register-success" id="successMsgDesk" style="display: none;">
                        <div class="success-container">
                            <img style="width: 30%;" src="<?php echo base_url('images/checkbox.png'); ?>" />
                            <div class="form-success-text">
                                <?php echo $successMsg; ?>   
                            </div>
                        </div>
                    </div> -->

                    <div id="userInfoFieldsDesk">
                        <div style="font-size: 25px;color: <?php echo $userInfoHeaderFontColor; ?>;"><?php echo $userInfoHeader; ?></div>

                        <div class="color-white">
                            <div class="userInfoError"></div>

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

                                    //check how many fields are required

                                    $differArrUserInfo = array_diff($finalUserInfo, $replaceArr);

                                    $placeholder = '';
                                    $emailName = '';
                                    $mobileNumber = '';
                                    $subPlaceholder = '';
                                    $emailSubPlaceholder = '';

                                    foreach (@$finalUserInfo as $uf) {
                                        if (in_array($uf,$replaceArr)) {
                                            $placeholder = $uf.' *'; 
                                            $emailName = str_replace(' ', '', $uf);
                                            $emailSubPlaceholder = $uf;
                                        }
                                    }

                                    foreach (@$finalUserInfo as $uf) {
                                        if (in_array($uf,getMobileArr())) {
                                            $mobileNumber = str_replace(' ', '', $uf);
                                            $subPlaceholder = $uf;
                                        }
                                    }
                                    ?>

                                    <?php foreach (@$finalUserInfo as $key => $uInfo) { 
                                        if(array_key_exists($key, $differArrUserInfo )) {
                                            $getValueByGet = str_replace(' ', '', $uInfo);
                                            $bornNameArr = ['Born','Født','Född','Geboren'];
                                            $mobileNameArr =  getMobileArr();
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
                                                        <label class="born-label" style="color: #ffffff;"><?php echo @$uInfo; ?>:</label>
                                                        <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                                    <?php
                                                    }?>
                                                    <!-- END: born section - DAB -->
                                                </div>
                                            <?php
                                            }else if(in_array($uInfo, $mobileNameArr)){ ?>
                                                <?php if($country == "NL"){ ?>    
                                                    <div class="test-block" class="form-input-outer">
                                                        <?php if($isBrowserBaseGame == 1) { ?>
                                                            <div class="test-countryCode-input">
                                                                <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?></label>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="custom-input-wrap">
                                                            <div class="test-countryCode-input">
                                                                <input type="text" id="countryCode" class="model-txt-box txt-center permission-model-text-box" value="<?php echo $countryCode ?>" readonly/>
                                                            </div>
                                                            <div class="test-mobile-input">
                                                                <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoText" id="mobileNumber" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" data-name = "<?php echo $uInfo; ?>"  ><div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } else if($country == "CA"){ ?> 
                                                    <div class="test-block" class="form-input-outer">
                                                        <?php if($isBrowserBaseGame == 1) { ?>
                                                            <div class="test-countryCode-input">
                                                                <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo @$uInfo; ?></label>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="test-mobile-input-select">
                                                            <div class="custom-input-wrap">
                                                                <select class="model-txt-box txt-center permission-model-text-box" id="areaCode" name="areaCode" style="padding:10px">
                                                                    <?php foreach($areaCode as $area){ ?>
                                                                        <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoText " id="mobileNumber" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                                            </div>
                                                            
                                                            <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                        </div>
                                                    </div>
                                                    <?php }else{ ?>
                                                        <div class="form-input-outer">
                                                            <?php
                                                                if($isBrowserBaseGame == 1) { ?>
                                                                    <div class="custom-input-wrap">
                                                                        <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $uInfo; ?>:</label>
                                                                        <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoText " id="mobileNumber" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoText" id="mobileNumber" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                                                <?php
                                                                }
                                                            ?>
                                                            <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                    </div>
                                                <?php } ?>					
                                            <?php } else {
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
                                                                <label class="question-label"><?php echo @$uInfo; ?>:</label>
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
                                                                        <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>"> 
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>"> 
                                                                <?php
                                                                }
                                                            ?>
                                                            <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$uInfo]; ?></font></font></div>
                                                        </div>
                                                    <?php
                                                }
                                                
                                            }
                                        }else{
                                        ?>
                                            <div class="form-input-outer">
                                                <?php 
                                                if($isBrowserBaseGame == 1) {
                                                ?>  
                                                    <div class="custom-input-wrap">
                                                        <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $placeholder; ?></label>
                                                        <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoText" id="emailId" data-name="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$emailName]; ?>" placeholder="<?php echo $placeholder; ?>">
                                                    </div>
                                                <?php
                                                } else {
                                                ?>                                            
                                                    <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoText" id="emailId" data-name="<?php echo $uInfo; ?>" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$emailName]; ?>" >
                                                <?php
                                                }
                                                ?>
                                                    

                                                <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$emailSubPlaceholder]; ?></font></font></div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">

                                    <input type="hidden" name="hostName" id="hostName" value="<?php echo @$_GET['hostname']; ?>" />

                                    <button id="btn_register" class="model-txt-box txt-center form-btn btn_register" data-form-name = 'desktopView' style="background: <?php echo $userInfoButtonBackgroundColor; ?>; color: <?php echo $userInfoButtonFontColor; ?>;"> <?php echo $userInfoButton; ?> </button>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="form-bottom-text">
                            <input type="checkbox" class=" form-check termsAndCondition" name="termsAndCondition">
                            <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                <?php echo $shortDescriptionOfTerms; ?>
                                <div class="form-term-link">
                                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $shortTermsLinkInUserInfo; ?></a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>



                        <?php if($language == 'SE'  && $swedenExtraTerms == 1){ ?>

                            <div class="form-bottom-text" style="margin-top: 5px;">
                                <input type="checkbox" class="form-check termsAndConditionForSweden" name="termsAndConditionForSweden">
                                <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                    Jag är inte registrerad hos Spelpaus.se
                                    <div class="form-term-link">
                                        <a href="https://www.spelpaus.se/" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">Les mer</a>
                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                        <?php } ?>
                    </div>

                    <?php if(@$hasEighteenPlusTerms){ ?>

                        <div style="padding-top: 10px;">
                            <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?>
                        </div>

                    <?php } ?>

                </div>
                
                

                <div class="title txt-center model-winning-form-chance side-winner-model wheel-win-link" id="wheelWinningDesktop" style="display: none;">
                    <div class="winner-title-desc winning-header-bg-div" >
                        <div class="winner-title winning-form-header firstname-replace-text" >

                        </div>
                        <p class="winner-txt-small winning-form-description-before-image firstname-replace-text"></p>
                    </div>
                    <div class="winner-desc-container">
                        <div class="winner-img-div winning-form-image-div">
                            <!-- <img src="" class="winner-img winning-form-image" > -->
                            <div class="win-popup-image winner-img winning-form-image"></div>
                        </div>
                        <div class="winner-img-txt txt-center winning-form-description firstname-replace-text"></div>
                        <div class="winner-txt-highlight txt-center winning-form-value-description firstname-replace-text">

                        </div>
                        <div class="winner-item-left txt-center winning-wheel-scarcity-bar-text firstname-replace-text">

                        </div>
                        <div class="winner-timer row txt-center">
                            <div class="col-sm-2">
                                <div class="val daysValue"></div>
                                <div class="daysText">DAYS</div>
                            </div>
                            <div class="col-sm-3">
                            <div class="val hoursValue"></div>
                            <div class="hoursText">HOURS</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="val minutesValue"></div>
                                <div class="minutesText">MINUTES</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="val secondsValue"></div>
                                <div class="secondsText">SECONDS</div>
                            </div>
                        </div>
                        <div class="winner-btn-container">
                            <button class="btn winner-btn winning-btn firstname-replace-text"></button>
                        </div>
                    </div>
                </div>
                <div class="title txt-center model-winning-form-chance side-chance-model pointer" style="display: none;" id = "secondChanceDesktop">
                    <div class="chance-title firstname-replace-text" style="color: <?php echo $wheelSecondChanceHeaderFontColor; ?>; font-family: <?php echo $wheelSecondChnaceHeaderStyle; ?>;">
                        <?php echo @$wheelSecondChanceHeader; ?>
                    </div>
                    <div class="chance-desc-container">
                        <?php if ($wheelSecondChanceImage != '') { ?>

                            <div class="chance-img-div">
                                <img src="<?php echo $wheelSecondChanceImage; ?>" class="chance-img">
                            </div>

                        <?php } ?>

                        <div class="chance-img-txt firstname-replace-text" style="color: <?php echo $wheelSecondChanceDescriptionFontColor; ?>; font-family: <?php echo $wheelSecondChanceDescriptionStyle; ?>;">
                            <?php echo @$wheelSecondChanceDescription; ?>
                        </div>

                        <div class="chance-btn-container">
                            <button class="btn chance-btn secondChanceButton firstname-replace-text" style="background : <?php echo $wheelSecondChanceButtonBGColor; ?>; color: <?php echo $wheelSecondChanceButtonFontColor; ?>; font-family: <?php echo $wheelSecondChanceButtonStyle; ?>;" ><?php echo $wheelSecondChanceButtonText; ?></button>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($wheelMobileBGHeader != '' || $wheelMobileBGDescription != ''){ ?>

                <div class="mobile-wheel-header wheel-spin-time-txt" id="mobileWheelExcitingText">
                    <div class="wheel-title firstname-replace-text" style = "font-family: <?php echo $wheelMobileBGHeaderStyle; ?>; color: <?php echo $wheelMobileBGHeaderColor; ?>; background-color: <?php echo $wheelMobileBGHeaderBGColor; ?>" >
                        <div class="spin-time-txt"><?php echo $wheelMobileBGHeader; ?></div>
                    </div>
                    <div class="title-txt-small firstname-replace-text" style="font-family: <?php echo $wheelMobileBGDescriptionStyle; ?>; color: <?php echo $wheelMobileBGDescriptionColor; ?>; background-color: <?php echo $wheelMobileBGDescriptionBGColor; ?>">
                        <div class="spin-time-txt"><?php echo $wheelMobileBGDescription; ?></div>
                    </div>
                </div>

            <?php } ?>
            <?php
                if($isDisableCookie == 0) {
            ?>
                <div class="cookie-position" id="cookie-outers">
                    <div class="cookie-bg <?php echo ($isOpacityOn==1) ? 'has-opacity-bg' : ''; ?>" style="background: <?php echo @$backgroundFooterBackgroundColor; ?>;"></div>

                    <div id="cookieContainer" class="cookie-container selection-none">
                        <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
                        <div class="cookie-sub-contain">
                            <span class="cookie-txt" style="color: <?php echo @$backGroundFooterFontColor; ?>;">
                                <?php echo @$backgroundFooterFontText; ?>
                                <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" target="_target"  style="color: <?php echo @$backGroundFooterMoreColor; ?>;" ><?php echo @$backgroundFooterMoreText; ?></a>

                            </span>
                            <button class="cookie-btn acceptCookies" style="background-color: <?php echo @$backgroundFooterButtonBackgroundColor; ?>; color: <?php echo @$backGroundFooterButtonFontColor; ?>;"><?php echo @$backgroundFooterButtonText; ?></button>
                        </div>

                        <div id="cookieTitle" class="main-title txt-center cookie-title selection-none">
                            <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="cookieLink" target="_self" style = "color: <?php echo @$backGroundCookieColor; ?>; font-size : 12px;"></a>
                        </div>
                        <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
                    </div>  
                </div>
            <?php } ?>
            <div class="form-bottom form-model modal special-26" id="infoFormModel" style="display: none">

                <div class="title txt-center form-title side-form-model" style="background-color: <?php echo $userInfoHeaderBackgroundColor; ?>" id = 'userInfoMobile'>
                    <span class="close close-form" style="font-size: 30px;"  id="infoFormModelClose">&times;</span>
                        
                    <div id="userInfoFieldsMobile">
                        <div style="font-size: 2.5rem;line-height:25px;color: <?php echo $userInfoHeaderMobileFontColor; ?>;"><?php echo $userInfoHeader; ?></div>
                        <div class="form-container color-white" style="clear: both;">
                            <div class="userInfoError"></div>

                            <?php if($isReady == 1){ ?>

                                <div class="form-container">


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
                                                            <input type="text" class="model-txt-box txt-center userInfoTextPopup permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                                        </div>
                                                    <?php }  else {
                                                    ?>
                                                        <label class="born-label" style="color: #ffffff;"><?php echo @$uInfo; ?>:</label>
                                                        <input type="text" class="model-txt-box txt-center userInfoTextPopup permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                                    <?php
                                                    }?>
                                                    <!-- END: born section - DAB -->
                                                </div>
                                            <?php }else if(in_array($uInfo, $mobileNameArr)) { ?>
                                                <?php if($country == "NL"){ ?> 
                                            <div class="test-block" class="form-input-outer">
                                                <div class="test-countryCode-input">
                                                    <input type="text" id="countryCode" class="model-txt-box txt-center permission-model-text-box" value="<?php echo $countryCode ?>" readonly/>
                                                </div>
                                                <div class="test-mobile-input">
                                                    <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoTextPopup" id="mobileNumberPopup" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" data-name="<?php echo $uInfo; ?>">
                                                    <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                </div>
                                            </div>
                                            <?php } else if($country == "CA"){ ?> 
                                                <div class="test-block" class="form-input-outer">
                                                    <div class="test-countryCode-input">
                                                        <select class="model-txt-box txt-center permission-model-text-box" id="areaCode" name="areaCode" style="padding:10px">
                                                            <?php foreach($areaCode as $area){ ?>
                                                                <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="test-mobile-input-select">
                                                        <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoTextPopup" id="mobileNumberPopup" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" data-name="<?php echo $uInfo; ?>">
                                                        <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                    </div>
                                                </div> 
                                            <?php }else { ?>
                                                <div class="form-input-outer">
                                                    <input type="number" class="model-txt-box txt-center permission-model-text-box userInfoTextPopup" id="mobileNumberPopup" placeholder="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" data-name="<?php echo $uInfo; ?>">
                                                    <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                                </div>
                                            <?php } ?> 
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
                                                                    <select class="userInfoTextPopup question-drop" data-name = "<?php echo $uInfo; ?>">
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
                                                                <label class="question-label"><?php echo @$uInfo; ?>:</label>
                                                                <select class="userInfoTextPopup question-drop" data-name = "<?php echo $uInfo; ?>">
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
                                                            <input type="text" class="model-txt-box txt-center userInfoTextPopup permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>"> 
                                                            <div class="user-field-placeholder" style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$uInfo]; ?></font></font></div>
                                                        </div>
                                                    <?php
                                                }
                                                
                                            }
                                        } else {
                                        ?>
                                        <div class="form-input-outer">
                                                <?php 
                                                if($isBrowserBaseGame == 1) {
                                                ?>  
                                                    <div class="custom-input-wrap">
                                                        <label class="form-input-label" style="font-family: <?php echo $userInfoFieldLabelStyle; ?>; color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $placeholder; ?></label>
                                                        <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoTextPopup" id="emailId" data-name="<?php echo $uInfo; ?>" value="<?php echo @$_GET[$emailName]; ?>" placeholder="<?php echo $placeholder; ?>">
                                                    </div>
                                                <?php
                                                } else {
                                                ?>                                            
                                                    <input type="text" class="model-txt-box txt-center permission-model-text-box userInfoTextPopup" id="emailId" data-name="<?php echo $uInfo; ?>" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$emailName]; ?>" >
                                                <?php
                                                }
                                                ?>
                                        <?php }
                                    } ?>
                                    <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">

                                    <input type="hidden" name="hostName" id="hostName" value="<?php echo @$_GET['hostname']; ?>" />

                                    <button id="btn_register" class="model-txt-box txt-center form-btn btn_register" data-form-name = 'mobileView' style="background: <?php echo $userInfoButtonBackgroundColor; ?>; color: <?php echo $userInfoButtonFontColor; ?>;"> <?php echo $userInfoButton; ?> </button>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="form-bottom-text">
                            <input type="checkbox" class="form-check termsAndCondition" name="termsAndCondition">
                            <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                <?php echo $shortDescriptionOfTerms; ?>
                                <div class="form-term-link">
                                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>"><?php echo $shortTermsLinkInUserInfo; ?></a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                        <?php if($language == 'SE'  && $swedenExtraTerms == 1){ ?>

                            <div class="form-bottom-text" style="margin-top: 5px;">
                                <input type="checkbox" class="form-check termsAndConditionForSweden" name="termsAndConditionForSweden">
                                <div class="form-term" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">
                                    Jag är inte registrerad hos Spelpaus.se
                                    <div class="form-term-link">
                                        <a href="https://www.spelpaus.se/" target="_self" style="color: <?php echo $userInfoFieldLabelFontColor; ?>">Les mer</a>
                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="winner-modal modal wheel-win-link" id="winnerModel" style="display: none">
                <div class="winner-model-center">
                    <div class="title txt-center form-title winner-model-model">
                        <div class="winner-title-desc winning-header-bg-div">
                            <div class="winner-title winning-form-header firstname-replace-text" >
                            </div>
                            <p class="winner-txt-small winning-form-description-before-image firstname-replace-text"></p>
                        </div>
                        <div class="winner-desc-container">
                            <div class="winner-img-div winning-form-image-div">
                                <!-- <img src="" class="winner-img winning-form-image" > -->
                                <div class="win-popup-image winner-img winning-form-image"></div>
                            </div>
                            <div class="winner-img-txt txt-center winning-form-description firstname-replace-text">
                            </div>
                            <div class="winner-txt-highlight txt-center winning-form-value-description firstname-replace-text">
                            </div>
                            <div class="winner-item-left txt-center winning-wheel-scarcity-bar-text firstname-replace-text">
                            </div>
                            <div class="winner-timer row txt-center">
                                <div class="col-sm-2">
                                    <div class="val daysValue"></div>
                                    <div class="daysText">DAYS</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="val hoursValue"></div>
                                    <div class="hoursText">HOURS</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="val minutesValue"></div>
                                    <div class="minutesText">MINUTES</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="val secondsValue"></div>
                                    <div class="secondsText">SECONDS</div>
                                </div>
                            </div>
                            <div class="winner-btn-container">
                                <button class="btn winner-btn winning-btn firstname-replace-text"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-bottom modal" id="chanceModel"  style="display: none">
                <div class="chance-model-center">
                    <div class="form-title chance-model-model" style="background-color: transparent;">
                        <!-- <span class="close close-chance" style="font-size: 30px;margin-right: 10px;margin-top: 5px;" onClick="closeIcon()">&times;</span> -->
                        <div class="title txt-center " >
                            <div class="chance-title firstname-replace-text" style="color: <?php echo $wheelSecondChanceHeaderFontColor; ?>; font-family: <?php echo $wheelSecondChnaceHeaderStyle; ?>;">
                                <?php echo @$wheelSecondChanceHeader; ?>
                            </div>
                            <div class="chance-desc-container">
                                <?php if ($wheelSecondChanceImage != '') { ?>

                                    <div class="chance-img-div">
                                        <img src="<?php echo $wheelSecondChanceImage; ?>" class="chance-img">
                                    </div>

                                <?php } ?>

                                <div class="chance-img-txt firstname-replace-text" style="color: <?php echo $wheelSecondChanceDescriptionFontColor; ?>; font-family: <?php echo $wheelSecondChanceDescriptionStyle; ?>;">
                                    <?php echo @$wheelSecondChanceDescription; ?>
                                </div>

                                <div class="chance-btn-container">
                                    <button class="btn chance-btn secondChanceButton firstname-replace-text" style="background : <?php echo $wheelSecondChanceButtonBGColor; ?>; color: <?php echo $wheelSecondChanceButtonFontColor; ?>; font-family: <?php echo $wheelSecondChanceButtonStyle; ?>;"><?php echo $wheelSecondChanceButtonText; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($isBrowserBaseGame == 1) {
        ?>
            <div class="footerText1">
                <div class="custom-container">
                    <?php echo $footerText1; ?>
                </div>
            </div>
            <?php
            }
        ?>
        <?php
            if($isBrowserBaseGame ==1) {
            ?>
                <div id="footer2" class="footer2">
                    <?php echo $footer2; ?>
                </div>
            <?php
            }
        ?>
        <input type="hidden" id="isConfettiOn">
    </div>        
    <script>
        $(document).ready(function() {
            var wheelMarginTop = <?php echo !empty($wheelTopMargin)? $wheelTopMargin:0 ?>;

            if (wheelMarginTop > 0) {
                var winWidth = $(window).width();
                if (winWidth < 768) {
                    $('#wrapper').css({'margin-top':wheelMarginTop + 'px'})
                }    
            }
        })
    </script>
<?php $this->load->view('dashboard/wheel_win_page'); ?>
<?php $this->load->view('dashboard/wheel_js_script'); ?>