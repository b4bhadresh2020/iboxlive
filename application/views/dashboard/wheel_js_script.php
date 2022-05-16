<script type="text/javascript">
    var BASE_URL = '<?php echo base_url(); ?>';
</script>

<script type="text/javascript">

    var language = '<?php echo $language; ?>';
    var swedenExtraTerms = <?php echo $swedenExtraTerms; ?>;
    var isSoundOn = <?php echo $isSoundOn; ?>;
    var isRegistrationOn = <?php echo $isRegistrationOn; ?>;
    var ipAddress = '';
    var isReady = <?php echo $isReady; ?>;
    var mobileNumber = '';
    var numberOfTimeSpin = 0;
    var isSound = document.getElementById("wheelSound");
    var winWidth = window.innerWidth;
    var firstnameArr = [];
    var appNameIndex = <?php echo $appNameIndex; ?>;
    var phonePattern = "<?php echo $phonePattern; ?>";
    var phoneLength = "<?php echo $phoneLength; ?>";    
    var country = "<?php echo $country; ?>";
    var areaCode   = "";
    var emailId = "";
    var isBrowserBase = <?php echo $isBrowserBaseGame; ?>;
	var isShowGameFirst = <?php echo $isShowGameFirst; ?>;
    var isShowWinLosPage = <?php echo $isShowWinLosPage; ?>;
    var isShowThankPage = <?php echo $isShowThankPage; ?>;
	var isRedirectPage = <?php echo $isRedirectPage; ?>;
	var registerRedirectUrl = '<?php echo $registerRedirectUrl; ?>';
    var getFirstNameArr = ['Fornavn','Etunimi','Förnamn','Fornavn','First Name','Vorname','fornavn','etunimi','förnamn','fornavn','first name','vorname'];
	var getLastNameArr = ['Sukunimi','Efternamn','Efternavn','Etternavn','Last Name','Nachname','sukunimi','efternamn','efternavn','etternavn','last name','nachname'];
	var getMobileArr = ['Mobilnummer','Matkapuhelin','Mobile Number','mobilnummer','matkapuhelin','mobile number'];
	var getBirthdateArr = ['Born','Født','Född','Geboren'];
	var getEmailArr = ['Email adresse','E-postadress','Sähköposti','E-postadresse','Email address','E-Mail-Adresse','email adresse','e-postadress','sähköposti','e-postadresse','email address','e-mail-adresse'];
    var isPrefilldataOn = '<?php echo $isPrefilldataOn; ?>';
    var isDisableIcloudEmail	 = '<?php echo $isDisableIcloudEmail; ?>';
    var postCode = "";
    var timerRedirectUrl = '<?php echo $timerRedirectUrl; ?>';

    $(document).ready(function(){

        $.getJSON("https://jsonip.com/?callback=?", function (data) {
            ipAddress = data.ip;
        });

        var userOtherInfo = getUserDeviceInformation();

        getStuffsInOtherLanguage();

        var formModel = document.getElementById('infoFormModel');
        var formCloseIcon = document.getElementsByClassName("close-form")[0];
        if (formCloseIcon) {
            formCloseIcon.onclick = function() {
                formModel.style.display = "none";
                $('canvas').hide();
            }
        }

        // var chanceModel = document.getElementById('chanceModel');

        // var span = document.getElementsByClassName("close-chance")[0];
        // span.onclick = function() {
        //     chanceModel.style.display = "none";
        //     $('canvas').hide();
        // }

        //isRegistrationOn : True = Disable , False = Enable
        /* isRegistrationOn = 0; */
        if (isReady == 1) {
            if(isRegistrationOn){
				$("#userFormDesktop").hide();
				$('#spin').click(function(){
					loadGameInstant();
				});
                if(isBrowserBase == 1) {
                    $('#sidebar .form-title').hide();
					$('.cookie-position').hide();
					$('.browser-base-regform').hide();
				}
			}else{     
                if(isBrowserBase == 1) {
					if(isShowGameFirst == 0) {
						var regform = $('#sidebar #userFormDesktop').html();
						$('#sidebar .form-title').hide();
						$('.game-container').hide();
						$('.browser-base-regform .reg-container').html(regform);
						$('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
						$('.cookie-position').hide();
						$('#wheelBGHeader').hide();
						$('.footerText1').hide();
						$('.footer2').hide();
					} else if(isShowGameFirst == 1) {
						$('#sidebar .form-title').hide();
						$('.cookie-position').hide();
						$('.browser-base-regform').hide();
						$('#spin').click(function(){
                            loadGameInstant();
                        });
					}
				} 

                
                $('body').on('click','#btn_register',function(){
                    emailId = $('#emailId').val();

                    var dataFromName = $(this).attr('data-form-name');

                    if (dataFromName == 'desktopView') {
                        mobileNumber = $('#mobileNumber').val();    
                    }else{
                        mobileNumber = $('#mobileNumberPopup').val();
                    }

                    
                    var errorMsg = '';

                    var userInfoTextVal = [];

                    //convert php array to jquery array 
                    var userInfoRequiredFields = <?php echo json_encode($userInfoRequired); ?>;
                    userInfoRequiredFields = JSON.parse(userInfoRequiredFields);
                    
                    //click counter by user
                    if(emailId != ""){
                        userByClick(emailId);
                    }

                    //default email array
                    var emailArr = <?php echo json_encode(getEmailArr()); ?>;

                    //if user fields  empty then store in comma seprated string in below variable
                    var userRequiredFields = '';

                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    var isNotValidEmail = 0;
                    var born = '';
                    var regDetail = [];  
                    var getRegCookie = Cookies.get('regDetail');
                    var elementEmail = '';

                    if(getRegCookie != null) {
                        var getRegDetail = jQuery.parseJSON(getRegCookie);
                        var getRegDetailKey = arrayColumn(getRegDetail, 'name');
                        var getRegDetailValue = arrayColumn(getRegDetail, 'value');
                        var cookieResult = getRegDetailValue.reduce(function (cookieResult, field, index) {
                                cookieResult[getRegDetailKey[index]] = field;
                                return cookieResult;
                        }, {});                   
                    } else {
                        getRegCookie = '';
                    }

                    if (dataFromName == 'desktopView') {
                        if(isBrowserBase == 1) {
                            var born_year = $('.browser-base-regform .combodate .year').val();
							var born_month = $('.browser-base-regform .combodate .month').val();
							var born_day = $('.browser-base-regform .combodate .day').val();
							if(born_year != '' && typeof born_year != "undefined" && born_month != '' && typeof born_month != "undefined" && born_day != ''  && typeof born_day != "undefined") {
								born = bornFormat(born_year, born_month, born_day);
							}

                            $('.browser-base-regform .userInfoText').each(function () {

                                var textVal = $(this).val();
                                var textName = $(this).attr('data-name');
                                var textID = $(this).attr('id');   
                                var index = null;
                                var afTextName = '';                        
                                if(textID == 'born'){
                                    textVal = born;
                                }

                                //check post code found or not
                                if(textName.toLowerCase().indexOf('postnummer') != -1){
                                    postCode = textVal;
                                }

                                //check if userfield is empry or not
                                if (textVal == '' && jQuery.inArray(textName, userInfoRequiredFields) != -1) {
                                    if (userRequiredFields == '') {
                                        userRequiredFields += textName;
                                    }else{
                                        userRequiredFields += ', ' + textName;
                                    }
                                }else{
                                    if (jQuery.inArray(textName, getFirstNameArr) != -1) {
										afTextName = 'firstname';                                       
									} else if(jQuery.inArray(textName, getLastNameArr) != -1) {
										afTextName = 'lastname';
									} else if(jQuery.inArray(textName, getMobileArr) != -1) {
										afTextName = 'mobile';
									} else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
										afTextName = 'birthdate';
									} else if(jQuery.inArray(textName, getEmailArr) != -1) {
										afTextName = 'email';
                                        emailId = $(this).val();
                                        elementEmail = $(this);
									} else {
										afTextName = textName;
									}
									if(getRegCookie != ''){
										if(cookieResult[afTextName]) {
											index = getRegDetail.findIndex(obj => obj.name == afTextName);
										}
									}
                                    if (jQuery.inArray(textName, emailArr) != -1) {
                                        
                                        if(regex.test(textVal) == false){
                                            isNotValidEmail = 1;
                                        }else{
                                            userInfoTextVal.push({name:textName,value:textVal});
                                            regDetail.push({name:afTextName,value:textVal});    
                                        }    
                                    }else{
                                        userInfoTextVal.push({name:textName,value:textVal});
                                        regDetail.push({name:afTextName,value:textVal});
                                    }
                                    if(getRegCookie != '' && textVal != ''){
										if(index >=0 && index != null) {
											getRegDetail[index].value = textVal;
										} else {                                                
											getRegDetail.push({name:textName,value:textVal});
										} 
									}
                                }
                            });                           
                        } else {
                            var born_year = $('#userFormDesktop .combodate .year').val();
							var born_month = $('#userFormDesktop .combodate .month').val();
							var born_day = $('#userFormDesktop .combodate .day').val();
							if(born_year != '' && typeof born_year != "undefined" && born_month != '' && typeof born_month != "undefined" && born_day != ''  && typeof born_day != "undefined") {
								born = bornFormat(born_year, born_month, born_day);
							}

							$('#userFormDesktop .userInfoText').each(function () {

								var textVal = $(this).val();
								var textName = $(this).attr('data-name');
                                var textID = $(this).attr('id');   
                                var index = null;
								var afTextName = '';                        
                                if(textID == 'born'){
                                    textVal = born;
                                }

                                //check post code found or not
                                if(textName.toLowerCase().indexOf('postnummer') != -1){
                                    postCode = textVal;
                                }

								//check if userfield is empry or not
								if (textVal == '' && jQuery.inArray(textName, userInfoRequiredFields) != -1) {
									if (userRequiredFields == '') {
										userRequiredFields += textName;
									}else{
										userRequiredFields += ', ' + textName;
									}

								}else{
                                    if (jQuery.inArray(textName, getFirstNameArr) != -1) {
										afTextName = 'firstname';                                       
									} else if(jQuery.inArray(textName, getLastNameArr) != -1) {
										afTextName = 'lastname';
									} else if(jQuery.inArray(textName, getMobileArr) != -1) {
										afTextName = 'mobile';
									} else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
										afTextName = 'birthdate';
									} else if(jQuery.inArray(textName, getEmailArr) != -1) {
										afTextName = 'email';
                                        emailId = $(this).val();
                                        elementEmail = $(this);
									} else {
										afTextName = textName;
									}
									if(getRegCookie != ''){
										if(cookieResult[afTextName]) {
											index = getRegDetail.findIndex(obj => obj.name == afTextName);
										} 
									}
									if (jQuery.inArray(textName, emailArr) != -1) {
										
										if(regex.test(textVal) == false){
											isNotValidEmail = 1;
										}else{
											userInfoTextVal.push({name:textName,value:textVal}); 
                                            regDetail.push({name:afTextName,value:textVal});    
										}    
									}else{
										userInfoTextVal.push({name:textName,value:textVal});
                                        regDetail.push({name:afTextName,value:textVal});
									}
                                    if(getRegCookie != '' && textVal != ''){
										if(index >=0 && index != null) {
											getRegDetail[index].value = textVal;
										} else {                                                
											getRegDetail.push({name:textName,value:textVal});
										} 
									}
								}

							});
						}

                    }else{
                        var born_year = $('#userInfoMobile .combodate .year').val();
						var born_month = $('#userInfoMobile .combodate .month').val();
						var born_day = $('#userInfoMobile .combodate .day').val();
						if(born_year != '' && typeof born_year != "undefined" && born_month != '' && typeof born_month != "undefined" && born_day != ''  && typeof born_day != "undefined") {
							born = bornFormat(born_year, born_month, born_day);
						}

                        $('.userInfoTextPopup').each(function () {

                            var textVal = $(this).val();
                            var textName = $(this).attr('data-name');
                            var textID = $(this).attr('id');
                            var index = null;
							var afTextName = '';                           
							if(textID == 'born'){
								textVal = born;
							}
                            
                            //check post code found or not
                            if(textName.toLowerCase().indexOf('postnummer') != -1){
                                postCode = textVal;
                            }

                            //check if userfield is empry or not
                            if (textVal == '' && jQuery.inArray(textName, userInfoRequiredFields) != -1) {
                                if (userRequiredFields == '') {
                                    userRequiredFields += textName;
                                }else{
                                    userRequiredFields += ', ' + textName;
                                }
                                
                            }else{
                                if (jQuery.inArray(textName, getFirstNameArr) != -1) {
									afTextName = 'firstname';                                       
								} else if(jQuery.inArray(textName, getLastNameArr) != -1) {
									afTextName = 'lastname';
								} else if(jQuery.inArray(textName, getMobileArr) != -1) {
									afTextName = 'mobile';
								} else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
									afTextName = 'birthdate';
								} else if(jQuery.inArray(textName, getEmailArr) != -1) {
									afTextName = 'email';
                                    emailId = $(this).val();
                                    elementEmail = $(this);
								} else {
									afTextName = textName;
								}
								if(getRegCookie != ''){
									if(cookieResult[afTextName]) {
										index = getRegDetail.findIndex(obj => obj.name == afTextName);
									} 
								}
                                if (jQuery.inArray(textName, emailArr) != -1) {
                                    
                                    if(regex.test(textVal) == false){
                                        isNotValidEmail = 1;
                                    }else{
                                        userInfoTextVal.push({name:textName,value:textVal});
                                        regDetail.push({name:afTextName,value:textVal});   
                                    }    
                                }else{
                                    userInfoTextVal.push({name:textName,value:textVal});
                                    regDetail.push({name:afTextName,value:textVal});
                                }
                                if(getRegCookie != '' && textVal != ''){
                                    if(index >=0 && index != null) {
                                        getRegDetail[index].value = textVal;
                                    } else {                                                
                                        getRegDetail.push({name:textName,value:textVal});
                                    } 
                                }
                            }
                        });
                    }
                    var postCodeRgex = /^[0-9]*$/;
                    var emailSplit = emailId.split('@');
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
                                $('.userInfoError').text(error).css({'margin-top':'10px'}).addClass('alert alert-danger');   
                            }
                        });

                    }else if (isNotValidEmail == 1) {

                        errorMsg = language + '_Valid_Email';
                        getErrorMsg(language,errorMsg);
                        return false;

                    }else if(typeof(emailSplit[1]) != "undefined" && emailSplit[1].toLowerCase().indexOf('icloud') != -1 && isDisableIcloudEmail == 1) {
						errorMsg = language + '_Icloud_Mail';
                        var tooltipMsg = getErrorMsg(language,errorMsg);
						elementEmail.tooltip({
							placement: 'top',
							title: tooltipMsg
						});
						elementEmail.focus();
						elementEmail.css('color', 'red');
						return false;
                    }else if (mobileNumber == '' && typeof mobileNumber != "undefined") {

                        errorMsg = language + '_Empty_Mobile';
                        getErrorMsg(language,errorMsg);
                        $('#mobileNumber').focus();
                        return false;

                    }else if(country == 'NL' && mobileNumber !='' && typeof mobileNumber != "undefined" &&  mobileNumber.length != phoneLength){

                        errorMsg = language + '_Mobile_Length';
                        getErrorMsg(language,errorMsg);
                        return false;

                    }else if(country == 'NL' && mobileNumber !=''  && typeof mobileNumber != "undefined" && !mobileNumber.match(phonePattern)){

                        errorMsg = language + '_Mobile_Pattern';
                        getErrorMsg(language,errorMsg);
                        return false;

                    }else if(country == 'CA' && mobileNumber !='' && typeof mobileNumber != "undefined" && mobileNumber.length != phoneLength){

                        errorMsg = language + '_Mobile_Length';
                        getErrorMsg(language,errorMsg);
                        return false;

                    }else{                    

                        if($('input.termsAndCondition').is(':checked') == false){

                            errorMsg = language + '_Terms';
                            getErrorMsg(language,errorMsg);
                            return false;

                        }else if(language == 'SE' && swedenExtraTerms == 1 && $('input.termsAndConditionForSweden').is(':checked') == false){

                            errorMsg = language + '_Terms';
                            getErrorMsg(language,errorMsg);
                            return false;

                        }else if(postCode != "" && language == 'DK' && postCodeRgex.test(postCode) == false){
                            errorMsg = language + '_PostCode_Type';
                            getErrorMsg(language,errorMsg);
                            return false;
                        }else if(postCode != "" && language == 'DK' && postCode.length != 4){
                            errorMsg = language + '_PostCode_Length';
                            getErrorMsg(language,errorMsg);
                            return false;
                        }else{
                            // $(this).attr('disabled','disabled').addClass('disabled');
                            var campaignId = $('#campaignId').val();
                            var hostName   = $(':hidden#hostName').val();     
                            var state = $('#winStat').val();
							isConfettiOn = $('#isConfettiOn').val();                   

                            if(country == 'CA'){
                                areaCode   = $('#areaCode').val();
                            }

                            firstnameArr = userInfoTextVal;

                            $.ajax({
                                url : BASE_URL + 'wheel/userRegistration',
                                type: 'post',
                                data : {
                                    transactionId : getUrlParameter('transaction_id'),
                                    campaignId:campaignId,
                                    mobileNumber:mobileNumber,   
                                    ipAddress:ipAddress,
                                    browser:userOtherInfo.browser,
                                    device:userOtherInfo.device,
                                    os:userOtherInfo.os,
                                    hostName:hostName,
                                    userInfoTextVal:userInfoTextVal,
                                    areaCode:areaCode
                                },
                                success:function(response){
                                    
                                    try{
                                        
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

                                        }else if(response == 4){

                                            errorMsg = language + '_API_Mobile_Fail';
                                            getErrorMsg(language,errorMsg);
                                            $('#mobileNumberPopup,#mobileNumber').focus();

                                        }else{
                                            // START::Store form filled details for prefill data in other campaign - DAB
											if(getRegDetail) {
												Cookies.set('regDetail', getRegDetail);
											} else {
												Cookies.set('regDetail', regDetail, { expires: 1 });
											}

                                            //click counter by user
                                            var wheelResponse  = JSON.parse(response);
											userByClick("",wheelResponse.userId);

                                            if (isRedirectPage == 1) {
                                                //facebook pixel (do not remove. It is uncomment in live)
                                                sendRequestToClientApiAndFireFbEvent(response,"wheel");
												window.location.href = registerRedirectUrl;
												return false;
											}
                                            if (isShowThankPage == 1) {						
												$('.game-container').hide();
												$('.footerText1').hide();
												$('.browser-base-regform .reg-container').addClass('success-reg');
												// $('#wheelBGHeader').show();
												$('.footer2').show();
												$('.thankyou-page').show();	
                                                redirectTimer();
												$('.browser-base-regform').hide();
                                                //facebook pixel (do not remove. It is uncomment in live)
                                                sendRequestToClientApiAndFireFbEvent(response,"wheel");
												return false;
											}
                                            if(isBrowserBase == 1 && isShowGameFirst == 0) {
												$('.browser-base-regform .reg-container').addClass('success-reg');
												$('.game-container').show();
												$('#wheelBGHeader').show();
												$('.footerText1').show();
												$('.footer2').show();
												$('.browser-base-regform').hide();
											} else {
                                                if(isShowWinLosPage == 1) {
                                                    $('.game-section').css('height',0);
                                                    $('#wheelWinnerPage').show();
                                                } else {
                                                    $('.browser-base-regform .reg-container').addClass('success-reg');
                                                    $('.game-container').show();
                                                    $('#wheelBGHeader').show();
                                                    $('.footerText1').show();
                                                    $('.footer2').show();
                                                    $('.browser-base-regform').hide();
                                                }
                                                if (isConfettiOn == 1) {
                                                    $('#snowCanvas').hide();
                                                    $('#canvas').show().showConfetti();
                                                }else{
                                                    $('#canvas').hide();
                                                }
                                            }

                                            $('.userInfoText').val('');
                                            $('.userInfoTextPopup').val('');
                                            $('#mobileNumber').val('');
                                            $('#mobileNumberPopup').val('');
                                            $('.termsAndCondition').prop('checked',false);
                                            $('.termsAndConditionForSweden').prop('checked',false);
                                            $('.userInfoError').text('').removeClass('alert alert-danger');
                                            /*$('#spin').show();*/
                                            $('#userInfoFieldsDesk').hide();
                                            $('#mobileWheelBtn').hide();
                                            // $('#successMsgDesk').show();
                                            
                                            if (dataFromName == 'mobileView') {

                                                $('#userInfoFieldsMobile').hide();
                                                // $('#successMsgDesk').hide();
                                                $('#userInfoMobile').hide();
                                                $('#infoFormModel').hide();
                                                
                                                /*$('#successMsgMobile').show();
                                                $('#infoFormModelClose').show();*/
                                            }

                                            
                                            $('#spin').click(function(){
                                                wheelSpinClickStuff();  //spin the wheel
                                            });
                                            //facebook pixel and snap pixel (do not remove. It is uncomment in live)
                                            sendRequestToClientApiAndFireFbEvent(response,"wheel");

                                        }

                                    }catch(e){
                                        window.location.reload();
                                    }                                
                                }
                            }); 
                        }
                    } 

                });
            }
        } 

    });

    $('#wheel').click(function () {       
        if (winWidth <= 768) {
            /** when user click on spin button in mobile view then add click */
            if(isRegistrationOn){
                loadGameInstant();
            }else{
                $('.userInfoError').text('').removeClass('alert alert-danger');
                $('#infoFormModel #born').combodate({
					minYear: 1920,
					maxYear: 2022,
					smartDays: true,
					firstItem: 'name'
				});
                $('#infoFormModel').show();
            }
        }
    });

    $('#mobileWheelBtn').click(function(){
        /** when user click on button below the wheel in mobile view then add click */
        if(isRegistrationOn){
            loadGameInstant();
        }else{
            $('#infoFormModel #born').combodate({
                minYear: 1920,
                maxYear: 2022,
                smartDays: true,
                firstItem: 'name'
            });
            $('#infoFormModel').show();
        }        
    });

    function loadGameInstant(){
            
        var campaignId = $('#campaignId').val(); 
        var isConfettiOn = 0;
        var serverDegree;
        numberOfTimeSpin += 1;
        
        if(isSoundOn == 1){

            isSound.play();
            isSound.muted = false;
            // isSound.volume = 1;

            setTimeout(function () {
                isSound.volume = 0.5;
            }, 4000);

            isSound.addEventListener('timeupdate', function(){
                var buffer = 1;
                /*console.log(this.duration)*/
                if(this.currentTime > this.duration - buffer){
                    this.currentTime = 0
                    this.play()
            }}, false);
        }

        $.ajax({

            url  : BASE_URL + 'wheel/loadGameInstant',
            type : 'post',
            data : {
                campaignId : campaignId,
            },
            success : function(response){
                try{
                    var responseData = JSON.parse(response);
                    if (responseData.isSecondChance == 1) {

                        isConfettiOn = responseData.isConfettiOn;
                        serverDegree = responseData.serverDegree;

                    }else if(responseData.isSecondChance == 0){

                        isConfettiOn = responseData.wheelWinningForm.isConfettiOnForm;
                        serverDegree = responseData.wheelWinningForm.serverDegree;

                        var wheelWinning = responseData.wheelWinningForm;        
                        if(isBrowserBase == 1) {                            
                            fillWinPage(wheelWinning);
                        } else {
                            fillWinForm(wheelWinning);
                        }                
                    }
                    $('#isConfettiOn').val(isConfettiOn);
                    //replace firstname with user's name
                    $('.firstname-replace-text').each(function() {
                        var text = $(this).text();
                        $(this).text(text.replace(/firstname/gi, "Guest")); 
                    });

                    totalDegree = (serverDegree) + ((14 * 360) * numberOfTimeSpin);
                    $('#inner-wheel, .wheel-pin, .wheel-pin-bg').css({
                        'transform': 'rotate(' + totalDegree + 'deg)'
                    });

                    var setTimeOutForMobileHeaderDescription = setTimeout(function(){
                        $('#mobileWheelExcitingText').css({'bottom': '0px'});
                        clearTimeout(setTimeOutForMobileHeaderDescription);
                    },1000);
                   
                    setTimeout(function () {
                        $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                        if (serverDegree >= 0 && serverDegree <= 22.5 || serverDegree > 337.5 && serverDegree <= 360) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 22.5 && serverDegree <= 67.5) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 67.5 && serverDegree <= 112.5) {
                            W = window.innerWidth;
                            if (W <= 768) {
                                $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                $('#infoFormModel').hide();
                                $('#chanceModel').show();
                                $('#mobileHeaderContainer').hide();
                                $('#wrapper').hide();
                                setMobileChancePopup();
                            } else {
                                $('#userFormDesktop').hide();
                                $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                $('#secondChanceDesktop').show();
                                if(isBrowserBase == 1) {
                                    $('.game-container').hide();
                                }
                            }
                            
                            if (isConfettiOn == 1) {
                                $('#snowCanvas').hide();
                                $('#canvas').show().showConfetti();
                            }else{
                                $('#canvas').hide();
                            }

                            $('.secondChanceButton').click(function(){
                                $('.secondChanceButton').off('click');
                                $('#canvas').hide();
                                $('#chanceModel').hide();
                                $('#secondChanceDesktop').hide();
                                if(isBrowserBase == 1) {
                                    $('.game-container').show();
                                }
                                if (W <= 768){
                                    $('#mobileHeaderContainer').show();
                                    $('#wrapper').show();    
                                }
                                $('#spin').click(function(){
                                    loadGameInstant();
                                });
                            });



                        } else if (serverDegree > 112.5 && serverDegree <= 157.5) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 157.5 && serverDegree <= 202.5) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 202.5 && serverDegree <= 247.5) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 247.5 && serverDegree <= 292.5) {
                            showWinForm(isConfettiOn);
                        } else if (serverDegree > 292.5 && serverDegree <= 337.5) {
                            showWinForm(isConfettiOn);
                        }
                        isSound.muted = true;
                    }, 6000);

                }catch(e){
                    //window.location.reload();
                }
            }
        });
    }
    function wheelSpinClickStuff(){

        /**
            Sound stuff start
            */

        if(isSoundOn == 1){

            isSound.play();
            isSound.muted = false;
            // isSound.volume = 1;

            setTimeout(function () {
                isSound.volume = 0.5;
            }, 4000);

            isSound.addEventListener('timeupdate', function(){
                var buffer = 1;
                /*console.log(this.duration)*/
                if(this.currentTime > this.duration - buffer){
                    this.currentTime = 0
                    this.play()
            }}, false);
        }

            /**
            Sound stuff end
            */

            numberOfTimeSpin += 1;
            $('#spin').off('click');
            var campaignId = $('#campaignId').val(); 
            var isConfettiOn = 0;
            var serverDegree;
            /*console.log('serverDegree init',serverDegree);*/
            if (emailId != '') {

                $.ajax({

                    url  : BASE_URL + 'wheel/getWheelStuff',
                    type : 'post',
                    data : {
                        campaignId : campaignId,
                        emailId : emailId
                    },
                    success : function(response){
                        /*console.log(response);*/

                        try{

                            if (response == 0) {
                                location.reload();
                            }else{
                                var responseData = JSON.parse(response);

                                if (responseData.isSecondChance == 1) {

                                    isConfettiOn = responseData.isConfettiOn;
                                    serverDegree = responseData.serverDegree;

                                }else if(responseData.isSecondChance == 0){

                                    isConfettiOn = responseData.wheelWinningForm.isConfettiOnForm;
                                    serverDegree = responseData.wheelWinningForm.serverDegree;

                                    var wheelWinning = responseData.wheelWinningForm;
                                    if(isBrowserBase == 1) {
                                        fillWinPage(wheelWinning);
                                    } else {
                                        fillWinForm(wheelWinning);
                                    }
                                }
                                $('#isConfettiOn').val(isConfettiOn);

                                //replace firstname with user's name
                                $('.firstname-replace-text').each(function() {
                                    var text = $(this).text();
                                    $(this).text(text.replace(/firstname/gi, firstnameArr[0]['value'])); 
                                });


                                totalDegree = (serverDegree) + ((14 * 360) * numberOfTimeSpin);
                                /*console.log('after total degree',serverDegree);
                                console.log('total degree', totalDegree);*/

                                $('#inner-wheel, .wheel-pin, .wheel-pin-bg').css({
                                    'transform': 'rotate(' + totalDegree + 'deg)'
                                });
                                
                                var setTimeOutForMobileHeaderDescription = setTimeout(function(){
                                    
                                    $('#mobileWheelExcitingText').css({'bottom': '0px'});

                                    clearTimeout(setTimeOutForMobileHeaderDescription);
                                },1000);
                                

                                setTimeout(function () {

                                    if (serverDegree >= 0 && serverDegree <= 22.5 || serverDegree > 337.5 && serverDegree <= 360) {

                                        showWinForm(isConfettiOn);


                                    } else if (serverDegree > 22.5 && serverDegree <= 67.5) {

                                        showWinForm(isConfettiOn);

                                    } else if (serverDegree > 67.5 && serverDegree <= 112.5) {
                                        
                                        isSound.muted = true;

                                        W = window.innerWidth;
                                        if (W <= 768) {

                                            //$('#mobileBgHeaderDesc').show();
                                            $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                            $('#infoFormModel').hide();
                                            $('#chanceModel').show();
                                            // $('#mobileHeaderContainer').css({'opacity':0});
                                            /*$('#wrapper').css({'opacity':0});*/
                                            $('#mobileHeaderContainer').hide();
                                            $('#wrapper').hide();
                                            setMobileChancePopup();

                                        } else {

                                            $('#userFormDesktop').hide();
                                            $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                            $('#secondChanceDesktop').show();
                                            if(isBrowserBase == 1) {
                                                $('.game-container').hide();
                                            }
                                        }
                                        

                                        if (isConfettiOn == 1) {
                                            $('#snowCanvas').hide();
                                            $('#canvas').show().showConfetti();
                                        }else{
                                            $('#canvas').hide();
                                        }

                                        $('.secondChanceButton').click(function(){

                                            $('.secondChanceButton').off('click');
                                            $('#canvas').hide();
                                            $('#chanceModel').hide();
                                            $('#secondChanceDesktop').hide();
                                            if(isBrowserBase == 1) {
                                                $('.game-container').show();
                                            }
                                            // $('#mobileHeaderContainer').css({'opacity':1});
                                            // $('#wrapper').css({'opacity':1});

                                            if (W <= 768){
                                                $('#mobileHeaderContainer').show();
                                                $('#wrapper').show();    
                                            }
                                            $('#spin').click(function(){
                                                wheelSpinClickStuff();
                                            });
                                        });

                                    } else if (serverDegree > 112.5 && serverDegree <= 157.5) {

                                        showWinForm(isConfettiOn);

                                    } else if (serverDegree > 157.5 && serverDegree <= 202.5) {

                                        showWinForm(isConfettiOn);

                                    } else if (serverDegree > 202.5 && serverDegree <= 247.5) {

                                        showWinForm(isConfettiOn);

                                    } else if (serverDegree > 247.5 && serverDegree <= 292.5) {

                                        showWinForm(isConfettiOn);

                                    } else if (serverDegree > 292.5 && serverDegree <= 337.5) {

                                        showWinForm(isConfettiOn);

                                    }

                                }, 6000);
                            }

                        }catch(e){
                            window.location.reload();
                        }
                        
                    }

                });

    }else{

        location.reload();
    }

            // console.log('out each', aoY);


        }


        function showWinForm(isConfettiOn){

            if(isShowGameFirst == 0) {
                isSound.muted = true;

                W = window.innerWidth;
                if (W <= 768) {

                    $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                    //$('#mobileBgHeaderDesc').show();
                    $('#infoFormModel').hide();
                    $('#winnerModel').show();
                    $('#chanceModel').hide();
                    $('#mobileHeaderContainer').hide();
                    $('#wrapper').hide();
                    setMobileWinPopup();
                } else {
                    $('#userFormDesktop').hide();
                    $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                    $('#secondChanceDesktop').hide();
                    if(isBrowserBase == 1) {
                        if(isShowWinLosPage == 1) {
                            $('#wheelWinnerPage').show();
                            $('#wheelBGHeader').hide();
                            $('.footerText1').hide();
                            $('.footer2').hide();
                            $('#sidebar .form-title').hide();
                            $('.game-container').hide();
                            $('.game-section').css('height',0);
                        } 
                    } else {
                        $('#wheelWinningDesktop').show();
                    }
                    // setDesktopWinPopup();
                }


                if (isConfettiOn == 1) {
                    $('#snowCanvas').hide();
                    $('#canvas').show().showConfetti();
                }else{
                    $('#canvas').hide();
                }

                //wheelUserWin();
            } else {
                if(isRegistrationOn == 0) {
                    setTimeout(function(){
                        var regform = $('#sidebar #userFormDesktop').html();
                        $('.browser-base-regform .reg-container').html(regform);
                        $('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
                        $('#wheelBGHeader').hide();
                        $('.game-container').hide();
                        $('.footerText1').hide();
                        $('.footer2').hide();
                        $('#canvas').hide();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        $('.browser-base-regform').show();
                        prefillFormData();
                        icloudTooltip();
                    }, 1000);
                } else {
                    if(isShowWinLosPage == 1) {
                        $('.game-section').css('height',0);
                        $('#wheelWinnerPage').show();
                    }
                    if (isConfettiOn == 1) {
                        $('#snowCanvas').hide();
                        $('#canvas').show().showConfetti();
                    }else{
                        $('#canvas').hide();
                    }
                }
            }
            if (isShowThankPage == 1 && isRegistrationOn == 1) {	
                $('.game-container').hide();
                $('.thankyou-page').show();
                redirectTimer();
            }
        }

        function redirectTimer() {
            var redirectTimer = '<?php echo $redirectTimer; ?>';
            if(redirectTimer != '') {
                var timer = JSON.parse(redirectTimer);
                var timeHour = timer.hour;
                var timeMinute = timer.minute;
                var timeSecond = timer.second;
                var deadline = new Date(Date.parse(new Date()) + (timeHour * 60 * 60 * 1000) + (timeMinute * 60 * 1000) + (timeSecond * 1000));
                var timeToRedirect = (timeHour * 60 * 60 * 1000) + (timeMinute * 60 * 1000) + (timeSecond * 1000);
                            
                if(timeToRedirect > 0) {
                    $('#clockTimer').show();
                    initializeClock('clockdiv', deadline);
                    if(timerRedirectUrl != '') {
                        setTimeout(()=>{
                            window.location.href = timerRedirectUrl;
                        }, timeToRedirect);
                    }
                }
            }
        }

        function wheelUserWin(){

            var campaignId = $('#campaignId').val();

            $.ajax({

                type : 'post',
                url : BASE_URL + 'wheel/declareUserWin',
                data : {
                    emailId : emailId,
                    campaignId : campaignId
                },
                success:function(response){

                }
            });
        }

        function fillWinForm(wheelWinning){

            if (wheelWinning.wheelWinningHeader != '') {
                $('.winning-header-bg-div').css({'background-color':wheelWinning.wheelWinningHeaderBGColor});
                $('.winning-form-header').text(wheelWinning.wheelWinningHeader).css({'color':wheelWinning.wheelWinningHeaderFontColor,'font-family' : wheelWinning.wheelWinningHeaderStyle});
            }

            if (wheelWinning.wheelWinningDescriptionBeforeImage != '') {
                $('.winning-header-bg-div').css({'background-color':wheelWinning.wheelWinningHeaderBGColor});
                $('.winning-form-description-before-image').text(wheelWinning.wheelWinningDescriptionBeforeImage).css({'color':wheelWinning.wheelWinningDescriptionBeforeImageFontColor,'font-family' : wheelWinning.wheelWinningDescriptionBeforeImageStyle});
            }

            if (wheelWinning.wheelWinningImageForm != '') {
                $('.winning-form-image').css({'background-image':"url("+ wheelWinning.wheelWinningImageForm +")"});
            }else{
                $('.winning-form-image-div').hide();
            }

            
            if (wheelWinning.wheelWinningDescription != '') {
                
                $('.winning-form-description').text(wheelWinning.wheelWinningDescription).css({'color':wheelWinning.wheelWinningDescriptionFontColor,'font-family' : wheelWinning.wheelWinningDescriptionStyle});
            }else{
                $('.winning-form-description').hide();
            }

            if (wheelWinning.wheelWinningValueDescription != '') {

                $('.winning-form-value-description').text(wheelWinning.wheelWinningValueDescription).css({'color':wheelWinning.wheelWinningValueDescriptionFontColor,'font-family' : wheelWinning.wheelWinningValueDescriptionStyle,'background-color':wheelWinning.wheelWinningValueDescriptionBGColor});

            }else{
                $('.winning-form-value-description').css({'background-color':'#ffffff'});
                $('.winning-form-value-description').hide();
            }

            if (wheelWinning.wheelScarcityBarText != '') {

                $('.winning-wheel-scarcity-bar-text').text(wheelWinning.wheelScarcityBarText).css({'color':wheelWinning.wheelWinningScarcityBarFontColor,'font-family' : wheelWinning.wheelWinningScarcityBarFontStyle,'background-color':wheelWinning.wheelScarcityBarBGColor});

            }else{
                $('.winning-wheel-scarcity-bar-text').css({'background-color':'#ffffff'});
                $('.winning-wheel-scarcity-bar-text').hide();
            }

            $('.winning-btn').text(wheelWinning.wheelWinningButtonText).css({'color':wheelWinning.wheelWinningButtonFontColor,'font-family' : wheelWinning.wheelWinningButtonStyle,'background-color':wheelWinning.wheelWinningButtonBGColor});  

            $('.wheel-win-link').attr('onclick','addOfferClick("'+ wheelWinning.wheelWinningButtonLink +'")');    

            if (wheelWinning.isBgTransparent == 1) {

                $('.winning-header-bg-div').css({'background-color':'transparent'});
                $('.winning-form-value-description').css({'background-color':'transparent'});
                //$('.winning-wheel-scarcity-bar-text').css({'background-color':'transparent'});
                $('.winner-desc-container').css({'background-color':'transparent'});
            }


            if (wheelWinning.isHideScarcityBar == 1 ) {
                $('.winning-wheel-scarcity-bar-text').hide();
            }else{
                $('.winning-wheel-scarcity-bar-text').show();
            }


            if (wheelWinning.isHideCountDown == 0 && wheelWinning.wheelScarcityCountDown != '00-00-00' && wheelWinning.wheelScarcityCountDown != '' ) {    

                $('.daysText').text(wheelWinning.days);
                $('.hoursText').text(wheelWinning.hours);
                $('.minutesText').text(wheelWinning.minutes);
                $('.secondsText').text(wheelWinning.seconds);

                var userCountDown = wheelWinning.wheelScarcityCountDown;
                setUserTimeout(userCountDown)

                $('.winner-timer').css({'background-color':wheelWinning.wheelScarcityBarBGColor});

            }else{
                $('.winner-timer').hide();
            }

            
        }




        function getErrorMsg(errorLanguage,errorCode) {
            var tooltipMsg = null;
            var errorMsgAjax = $.ajax({
                url : BASE_URL + 'home/getErrorMsgDetail',
                type : 'post',
                async: false,
                data : {
                    errorLanguage:errorLanguage,
                    errorCode:errorCode
                },
                success : function(response){
                    if (response == 1 ) {
                        var errorCodes = errorLanguage + '_Sys_Pro';
                        getErrorMsg(errorLanguage,errorCodes);
                    }else{
                        if(errorCode == (errorLanguage + '_Icloud_Mail')) {
                            tooltipMsg = response;
                        } else {						
                            $('.userInfoError').text(response).css({'margin-top':'10px'}).addClass('alert alert-danger'); 
                        } 
                    }
                }
            }).responseText;
		    return errorMsgAjax;
        }



        function setUserTimeout(userCountDown) {

            var daysHoursMinutes = userCountDown;
            var arr = daysHoursMinutes.split('-');

            var days = arr[0];
            var hours = arr[1];
            var minutes = arr[2];
            //add days,months,minutes value to current date time
            var nowDateTime = new Date();

            nowDateTime.setDate(nowDateTime.getDate() + parseInt(days));
            nowDateTime.setHours(nowDateTime.getHours() + parseInt(hours));
            nowDateTime.setMinutes(nowDateTime.getMinutes() + parseInt(minutes));
            // nowDateTime.setSeconds(nowDateTime.getSeconds() + parseInt(6));

            dateTimeCountdown(nowDateTime)
        }

        function dateTimeCountdown(addedDateTime) {

        // Set the date we're counting down to
        var countDownDate = new Date(addedDateTime).getTime();
        // $('body').css({'overflow': 'hidden'});

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();
            
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // console.log('distance', distance);
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            /*console.log(days, '-' , hours, '-' , minutes, '-' , seconds);*/

            $('.daysValue').text(days);
            $('.hoursValue').text(hours);
            $('.minutesValue').text(minutes);
            $('.secondsValue').text(seconds);


            if (distance < 1000) {
                clearInterval(x);
            }

        }, 1000);
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
                    $('#cookieLink').text(extraPopup.cookieTermsLink);
                    $('#modalCookieLink').text(extraPopup.cookieTermsLink);
                }
            });
    }

    $(window).on('load', function () {
        $("#wheel-grand-parent").addClass("display-wheel");
    /*    $("#wheel").addClass("slite-rotate");*/
        
        setTimeout(function(){
            $("#wheel").css({'transform':'translateX(0) rotateZ(0deg)'});
        /*$("#wheel").removeClass("slite-rotate");
        $("#wheel").addClass("slite-rotate-back");*/
        }, 1000)
    });

    function setMobileWinPopup() {
        var winHeight = $(window).innerHeight();
        var popupDiv = $('.winner-model-model');
        var popupHeight = $('.winner-model-model').innerHeight();
        // console.log('set mobile win popup');
        // console.log('popupHeight', popupHeight);
        // console.log('winHeight', winHeight);
        
        if ((popupHeight + 20) > winHeight) {
            // console.log('in if');
            popupDiv.css("transform",'scale('+((winHeight- (30*(popupHeight/winHeight)) )/popupHeight)+')');
            popupDiv.css("margin", "auto");

            var p = popupDiv.offset();
            var top = p.top;
            var setTop = -(top - 20) + 'px';
            // popupDiv.css({"top": setTop});
        }
    }

    function setMobileChancePopup() {
        var winHeight = $(window).innerHeight();
        var popupDiv = $('.chance-model-model');
        var popupHeight = $('.chance-model-model').innerHeight();
        // console.log('set mobile win popup');
        // console.log('popupHeight', popupHeight);
        // console.log('winHeight', winHeight);
        
        if ((popupHeight + 20) > winHeight) {
            // console.log('in if');
            popupDiv.css("transform",'scale('+((winHeight- (30*(popupHeight/winHeight)) )/popupHeight)+')');
            popupDiv.css("margin", "auto");

            var p = popupDiv.offset();
            var top = p.top;
            var setTop = -(top - 20) + 'px';
            // popupDiv.css({"top": setTop});
        }
    }


    function getUserDeviceInformation(){

        /* get osname that is which OS user has used */
        var os = 'other';
        if (navigator.appVersion.indexOf("Win")!=-1){
            os="windows";
        } else if (navigator.appVersion.indexOf("Macintosh")!=-1){ 
            os="mac";
        } else if (navigator.appVersion.indexOf("Mac")!=-1){ 
            os="ios";
        }else if (navigator.appVersion.indexOf("X11")!=-1){
            os="unix";
        }else if (navigator.appVersion.indexOf("Android")!=-1){ 
            os="android";
        }else if (navigator.appVersion.indexOf("Linux")!=-1){
            os="linux";  
        }


        /* get browser name that is which browser user has used */
        var browser = 'other';
        //Check if browser is IE or not
        if (navigator.userAgent.search("MSIE") >= 0) {
            browser = 'ie';
        }
        //Check if browser is Chrome or not
        else if (navigator.userAgent.search("Chrome") >= 0) {
            browser = 'chrome';
        }
        //Check if browser is Firefox or not
        else if (navigator.userAgent.search("Firefox") >= 0) {
            browser = 'firefox';
        }
        //Check if browser is Safari or not
        else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            browser = 'safari';
        }
        //Check if browser is Opera or not
        else if (navigator.userAgent.search("Opera") >= 0) {
            browser = 'opera';
        }

        /* get deivce type like pc or mobile */
        var device = 'pc';
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            device = 'mobile';
        } 

        var userOtherData = {
            os : os,
            browser:browser,
            device:device 
        };

        return userOtherData;

    }

    function addOfferClick(offerurl){
        var campaignId = $('#campaignId').val();
        var getUrl = "?campaignId="+campaignId+"&offerurl="+encodeURIComponent(offerurl);

        window.open(BASE_URL + "home/offerClick/"+getUrl);
    }

    function fillWinPage(wheelWinning){

        if (wheelWinning.wheelWinningHeader != '') {
            $('.win-top').css({'background-color':wheelWinning.wheelWinningHeaderBGColor});
            $('.win-main-title').text(wheelWinning.wheelWinningHeader).css({'color':wheelWinning.wheelWinningHeaderFontColor,'font-family' : wheelWinning.wheelWinningHeaderStyle});
        }

        if (wheelWinning.wheelWinningDescriptionBeforeImage != '') {
            $('.wheel-winner-title').text(wheelWinning.wheelWinningDescriptionBeforeImage).css({'color':wheelWinning.wheelWinningDescriptionBeforeImageFontColor,'font-family' : wheelWinning.wheelWinningDescriptionBeforeImageStyle});
        }

        if (wheelWinning.wheelWinningImageForm != '') {
            $('.win-img img').attr('src', wheelWinning.wheelWinningImageForm);
        }else{
            $('.win-img').hide();
        }


        if (wheelWinning.wheelWinningDescription != '') {
            
            $('.winner-txt-title').text(wheelWinning.wheelWinningDescription).css({'color':wheelWinning.wheelWinningDescriptionFontColor,'font-family' : wheelWinning.wheelWinningDescriptionStyle});
        }else{
            $('.winner-txt-title').hide();
        }

        if (wheelWinning.wheelWinningValueDescription != '') {

            $('.winner-txt-highlight').text(wheelWinning.wheelWinningValueDescription).css({'color':wheelWinning.wheelWinningValueDescriptionFontColor,'font-family' : wheelWinning.wheelWinningValueDescriptionStyle});

        }else{
            $('.winner-txt-highlight').hide();
        }

        if (wheelWinning.wheelScarcityBarText != '') {

            $('.winner-txt-small').text(wheelWinning.wheelScarcityBarText).css({'color':wheelWinning.wheelWinningScarcityBarFontColor,'font-family' : wheelWinning.wheelWinningScarcityBarFontStyle, 'background-color': wheelWinning.wheelScarcityBarBGColor});

        }else{
            $('.winner-txt-small').hide();
        }

        $('.winner-btn').text(wheelWinning.wheelWinningButtonText).css({'color':wheelWinning.wheelWinningButtonFontColor,'font-family' : wheelWinning.wheelWinningButtonStyle,'background-color':wheelWinning.wheelWinningButtonBGColor,'border-color':wheelWinning.wheelWinningButtonBGColor});  

        $('.winner-btn').attr('onclick','addOfferClick("'+ wheelWinning.wheelWinningButtonLink +'")');    
    }

    function bornFormat(born_year, born_month, born_day) {
        let d = new Date(born_year, born_month, born_day);
        let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
        let mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(d);
        let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
        return `${ye}-${mo}-${da}`;
    }

    // START:: translate year, month , day & select text according to language of game -DAB
	function translateLang(language_arr) {
		setTimeout(function(){
			$('.combodate .year option:nth-child(1)').text(language_arr.year);
			$('.combodate .month option:nth-child(1)').text(language_arr.month);
			$('.combodate .day option:nth-child(1)').text(language_arr.day);
			$('.question-drop option:nth-child(1)').text(language_arr.select);
		},500);
	}
    // translate day text when select year & month dropdown change - DAB 
    function translateLangDay(language_arr) {               
        $('.combodate .day option:nth-child(1)').text(language_arr.day);               
    }

    function arrayColumn(array, columnName) {
		return array.map(function(value,index) {
			return value[columnName];
		})
	}


    // START:: prefill data in campaign - DAB	
    function prefillFormData(){
        var getRegCookie = Cookies.get('regDetail');
        if(getRegCookie != null && isPrefilldataOn == 1) {		
            var regDetail = jQuery.parseJSON(getRegCookie);
            var regDetailKey = arrayColumn(regDetail, 'name');
            var regDetailValue = arrayColumn(regDetail, 'value');
            var result = regDetailValue.reduce(function (result, field, index) {
                    result[regDetailKey[index]] = field;
                    return result;
            }, {});

            $('.browser-base-regform .userInfoText, #userFormDesktop .userInfoText, .userInfoTextPopup').each(function () {
                var textName = $(this).attr('data-name');
                var textVal = '';
                if (jQuery.inArray(textName, getFirstNameArr) != -1) {
                    textVal = result.firstname;
                } else if(jQuery.inArray(textName, getLastNameArr) != -1) {
                    textVal = result.lastname;
                } else if(jQuery.inArray(textName, getMobileArr) != -1) {
                    textVal = result.mobile;
                } else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
                    textVal = result.birthdate;
                } else if(jQuery.inArray(textName, getEmailArr) != -1) {
                    textVal = result.email;
                } else {
                    if(jQuery.inArray(textName, regDetailKey) != -1) {
                        var index = regDetailKey.findIndex(obj => obj == textName);
                        textVal = regDetailValue[index];
                    }
                }
                $(this).val(textVal);
                if(jQuery.inArray(textName, getBirthdateArr) != -1) {
					$(this).next('.combodate').remove();
					$('#born').combodate({
						minYear: 1920,
						maxYear: 2022,
						smartDays: true,
						firstItem: 'name'
					});
				}
            });
        }
    }
    // END:: prefill data in campaign - DAB

    // Icloud mail tooptip - DAB
    function icloudTooltip() {
        $('.browser-base-regform .userInfoText,#userFormDesktop .userInfoText,.userInfoTextPopup').each(function () {
			var textName = $(this).attr('data-name');
			if(jQuery.inArray(textName, getEmailArr) != -1) {
				$(this).on('keyup',function(){
					var tooltipMsg = '';
					var emailValue = $(this).val();
					if(emailValue.toLowerCase().indexOf('icloud') != -1 && isDisableIcloudEmail == 1) {
						var errorMsg = language + '_Icloud_Mail';
						tooltipMsg = getErrorMsg(language,errorMsg);
						$(this).tooltip({
							placement: 'top',
							title: tooltipMsg
						});
						$(this).focus();
						$(this).css('color', 'red');
						$('.btn_register').attr('disabled' , 'disabled').addClass('disabled');
						
					} else {
						$(this).tooltip("destroy");
						$(this).css('color', '#000000');
						$('.btn_register').removeAttr('disabled').removeClass('disabled');
					}
				});
			}
		});
    }

	$(document).ready(function(){
		var dk_lang = {year: 'År', month: 'Måned', day: 'Dag', select: 'Vælg'};
		var se_lang = {year: 'År', month: 'Månad', day: 'Dag', select: 'Välj'};
		var fi_lang = {year: 'Vuosi', month: 'Kuukausi', day: 'Päivä', select: 'Valitse'};
		var no_lang = {year: 'År', month: 'Måned', day: 'Dag', select: 'velge'};
		var de_lang = {year: 'Jahr', month: 'Monat', day: 'Tag', select: 'Wählen'};
		var common_lang = {year: 'Year', month: 'Month', day: 'Day', select: 'Select'};

		if(language == 'DK') {
			translateLang(dk_lang);
		} else if (language == 'SE') {
			translateLang(se_lang);
		} else if (language == 'FI') {
			translateLang(fi_lang);
		} else if (language == 'NO') {
			translateLang(no_lang);
		} else if (language == 'DE') {
			translateLang(de_lang);
		} else {
			translateLang(common_lang);
		}
        // translate day text when select year & month dropdown change - DAB 
        $('body').on('change','.combodate select.year,.combodate select.month',function(){
            if(language == 'DK') {
                translateLangDay(dk_lang);
            } else if (language == 'SE') {
                translateLangDay(se_lang);
            } else if (language == 'FI') {
                translateLangDay(fi_lang);
            } else if (language == 'NO') {
                translateLangDay(no_lang);
            } else if (language == 'DE') {
                translateLangDay(de_lang);
            } else {
                translateLangDay(common_lang);
            }
        });
        prefillFormData();
        icloudTooltip();		
	});
	// END:: translate year, month , day & select text according to language of game -DAB

    // START:: confetti -DAB
	$.fn.showConfetti = function showConfetti() {
		var duration = 60 * 1000;
		var animationEnd = Date.now() + duration;
		var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

		function randomInRange(min, max) {
		return Math.random() * (max - min) + min;
		}

		var interval = setInterval(function() {
		var timeLeft = animationEnd - Date.now();

		if (timeLeft <= 0) {
			return clearInterval(interval);
		}

		var particleCount = 50 * (timeLeft / duration);
		// since particles fall down, start a bit higher than random
		confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
		confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
		}, 250);
	}
    // END:: confetti -DAB3
</script>
<?php include(APPPATH."views/dashboard/fire_fb_event_script.php"); ?>