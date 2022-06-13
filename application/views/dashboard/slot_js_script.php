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
	var isSound = document.getElementById("slotSound");
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
	var isClicked = 0;

	//slot initialization
	var btnShuffle = document.querySelector('#casinoShuffle');
	var casino1 = document.querySelector('#casino1');
	var casino2 = document.querySelector('#casino2');
	var casino3 = document.querySelector('#casino3');

	var machine1 = new SlotMachine(casino1, { 
		active: 4
	});
	var machine2 = new SlotMachine(casino2, { 
		active: 1
	});
	var machine3 = new SlotMachine(casino3, { 
		active: 0
	});
	var getFirstNameArr = ['Fornavn','Etunimi','Förnamn','Fornavn','First Name','Vorname','fornavn','etunimi','förnamn','fornavn','first name','vorname'];
	var getLastNameArr = ['Sukunimi','Efternamn','Efternavn','Etternavn','Last Name','Nachname','sukunimi','efternamn','efternavn','etternavn','last name','nachname'];
	var getMobileArr = ['Mobilnummer','Matkapuhelin','Mobile Number','mobilnummer','matkapuhelin','mobile number'];
	var getBirthdateArr = ['Born','Født','Född','Geboren'];
	var getEmailArr = ['Email adresse','E-postadress','Sähköposti','E-postadresse','Email address','E-Mail-Adresse','email adresse','e-postadress','sähköposti','e-postadresse','email address','e-mail-adresse'];
	var isPrefilldataOn = '<?php echo $isPrefilldataOn; ?>';
	var isDisableIcloudEmail	 = '<?php echo $isDisableIcloudEmail; ?>';
	var postCode = "";
	var timerRedirectUrl = '<?php echo $timerRedirectUrl; ?>';

	$(document).ready(function () {

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
		$('#slotWinnerPage').hide();
		$('#slotLosePage').hide();
		//isRegistrationOn : True = Disable , False = Enable
		if (isReady == 1) {
			
			if(isRegistrationOn){
				$("#userFormDesktop").hide();
				$("#casinoShuffle").css({"cursor":"pointer"});
				$('#casinoShuffle').click(function(){
					loadGameInstant();
				});
				if(isBrowserBase == 1) {
					$('.cookie-position').hide();
					$('.browser-base-regform').hide();
				}
			}else{	
				if(isBrowserBase == 1) {
					if(isShowGameFirst == 0) {
						var regform = $('#sidebar #userFormDesktop').html();
						$('#sidebar,#slotWrapper').hide();
						$('.browser-base-regform .reg-container').html(regform);
						$('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
						$('.cookie-position').hide();
						$('#wheelBGHeader').hide();
						$('.footerText1').hide();
						$('.footer2').hide();
					} else if(isShowGameFirst == 1) {
						$("#userFormDesktop").hide();
						$('.cookie-position').hide();
						$('.browser-base-regform').hide();
						$("#casinoShuffle").css({"cursor":"pointer"});
						$('#casinoShuffle').click(function(){
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

					//default email array
					var emailArr = <?php echo json_encode(getEmailArr()); ?>

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
								// console.log(textVal);
								var textName = $(this).attr('data-name');
								var textID = $(this).attr('id');                           
								if(textID == 'born'){
									textVal = born;
								}

								//check post code found or not
                                if(textName.toLowerCase().indexOf('postnummer') != -1){
                                    postCode = textVal;
                                }

								var index = null;
								var afTextName = '';
								
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
								if(textID == 'born'){
									textVal = born;
								}

								//check post code found or not
                                if(textName.toLowerCase().indexOf('postnummer') != -1){
                                    postCode = textVal;
                                }

								var index = null;
								var afTextName = '';
								
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
							if(textID == 'born'){
								textVal = born;
							}

							//check post code found or not
							if(textName.toLowerCase().indexOf('postnummer') != -1){
								postCode = textVal;
							}
							var index = null;
							var afTextName = '';
							
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
					}else if(emailSplit[1].toLowerCase().indexOf('icloud') != -1 && isDisableIcloudEmail == 1) {
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

					}else if(country == 'NL' && mobileNumber !='' && typeof mobileNumber != "undefined" && mobileNumber.length != phoneLength){
						errorMsg = language + '_Mobile_Length';
						getErrorMsg(language,errorMsg);
						return false;

					}else if(country == 'NL' && mobileNumber !='' && typeof mobileNumber != "undefined" && !mobileNumber.match(phonePattern)){
						errorMsg = language + '_Mobile_Pattern';
						getErrorMsg(language,errorMsg);
						return false;

					}else if(country == 'CA' && mobileNumber !='' && typeof mobileNumber != "undefined" && mobileNumber.length != phoneLength){
						errorMsg = language + '_Mobile_Length';
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

						if($('input.termsAndCondition').is(':checked') == false){

							errorMsg = language + '_Terms';
							getErrorMsg(language,errorMsg);
							return false;

						}else if(language == 'SE' && swedenExtraTerms == 1 && $('input.termsAndConditionForSweden').is(':checked') == false){

							errorMsg = language + '_Terms';
							getErrorMsg(language,errorMsg);
							return false;

						}else{
							//$(this).attr('disabled','disabled').addClass('disabled');
							var campaignId = $('#campaignId').val();
							var hostName   = $(':hidden#hostName').val();
							var state = $('#winStat').val();
							isConfettiOn = $('#isConfettiOn').val();

							if(country == 'CA'){
								areaCode   = $('#areaCode').val();
							}

							firstnameArr = userInfoTextVal;
							$.ajax({
								url : BASE_URL + 'slot/userRegistration',
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
											var slotResponse  = JSON.parse(response);

											if(!isClicked){
                                            	userByClick("",slotResponse.userId);
                                            	isClicked = 1;
                                        	}											

											if (isRedirectPage == 1) {
												//facebook pixel (do not remove. It is uncomment in live)
												sendRequestToClientApiAndFireFbEvent(response,"slot");
												window.location.href = registerRedirectUrl;
												return false;
											}			
											if (isShowThankPage == 1) {						
												$('#slotWrapper').hide();
												$('.footerText1').hide();
												$('.browser-base-regform .reg-container').addClass('success-reg');
												$('#slotWrapper').addClass('browserslotWrapper');
												// $('#wheelBGHeader').show();
												$('.footer2').show();
												$('.thankyou-page').show();	
												redirectTimer();
												$('.browser-base-regform').hide();
												//facebook pixel (do not remove. It is uncomment in live)
												sendRequestToClientApiAndFireFbEvent(response,"slot");
												return false;
											}		
											if(isBrowserBase == 1 && isShowGameFirst == 0) {
												$('.browser-base-regform .reg-container').addClass('success-reg');
												$('#slotWrapper').show();
												$('#slotWrapper').addClass('browserslotWrapper');
												$('#wheelBGHeader').show();
												$('.footerText1').show();
												$('.footer2').show();
												$('.browser-base-regform').hide();
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
											// $('#successMsgDesk').show();
											
											if (dataFromName == 'mobileView') {

												$('#userInfoFieldsMobile').hide();
												$('#userInfoMobile').hide();
												$('#infoFormModel').hide();
											}											
											
											if(isShowGameFirst == 0) {
												slotSpinStuff();  //spin the slot
											} else {													
												winLossPage(isConfettiOn,state);			
											}
											//facebook pixel (do not remove. It is uncomment in live)
											sendRequestToClientApiAndFireFbEvent(response,"slot");
											return false;
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

		$('.secondChanceButton').click(function(){

			$('.secondChanceButton').off('click');
			$('#canvas').hide();
			$('#chanceModel').hide();
			$('#secondChanceDesktop').hide();
            // $('#mobileHeaderContainer').css({'opacity':1});
            // $('#slotWrapper').css({'opacity':1});

            if (W <= 768){
            	$('#mobileHeaderContainer').show();
            	$('#slotWrapper').show();    
            }
			if(isBrowserBase == 1) {
				$('#slotWrapper').show();
			}

            slotSpinStuff();
        });


	});

	function loadGameInstant(){		
		var campaignId = $('#campaignId').val(); 
        var isConfettiOn = 0;

		if(isSoundOn == 1){

			isSound.play();
			isSound.muted = false;

			setTimeout(function () {
				isSound.volume = 0.5;
			}, 4000);			
		}

		$.ajax({

			url  : BASE_URL + 'slot/loadGameInstant',
			type : 'post',
			data : {
				campaignId : campaignId,
			},
			success : function(response){
				try{
					var responseData = JSON.parse(response);
					if(!isClicked){
						userByClick(emailId);
						isClicked = 1;
					}
					if (responseData.isSecondChance == 1) {

						isConfettiOn = responseData.isConfettiOn;
						slotMachineSeq = responseData.slotExtraChanceSeq;

					}else if(responseData.isSecondChance == 0){
						var state = responseData.slotWinLoseFormData.state;
						var slotStuff = responseData.slotWinLoseFormData.slotStuff;
						
						if (state == 'win') {
							isConfettiOn = slotStuff.isConfettiOnFormSlot;
							slotMachineSeq = slotStuff.winSeq;
							
							if(isBrowserBase != 1) {
								fillSlotWinForm(slotStuff);  								
							} 

						}else if(state == 'lose'){

							isConfettiOn = slotStuff.isConfettiOnFormSlotLose;
							slotMachineSeq = slotStuff.loseSeq;
							if(isBrowserBase != 1) {
								fillSlotLoseForm(slotStuff); 
							}
						}
						$('#winStat').val(state);
						$('#isConfettiOn').val(isConfettiOn);

					}

					$('.firstname-replace-text').each(function() {
						var text = $(this).text();
						$(this).text(text.replace(/firstname/gi, "Guest")); 
					});

					var setTimeOutForMobileHeaderDescription = setTimeout(function(){
						$('#mobileWheelExcitingText').css({'bottom': '0px'});
						clearTimeout(setTimeOutForMobileHeaderDescription);
					},1000);

					// SLOT SHUFFLE & STOP POSITION
					machine1.shuffle(9999);
					machine2.shuffle(9999);
					machine3.shuffle(9999);

					setTimeout(() => { 
						machine1.stop(onComplete);
					}, 1500);
					setTimeout(() => {
						machine2.stop(onComplete);
					}, 2000);
					setTimeout(() => { 
						machine3.stop(onComplete);
					}, 2500);

					machine1.changeSettings({ randomize: function(){ return (slotMachineSeq[0] - 1); }});
					machine2.changeSettings({ randomize: function(){ return (slotMachineSeq[1] - 1);}});
					machine3.changeSettings({ randomize: function(){ return (slotMachineSeq[2] - 1);}});
					
					setTimeout(() => {
						//show win ,lose or extra
						if(responseData.isSecondChance == 1){
							isSound.muted = true;
							
							showSecondChanceStuff();
						}else if(responseData.isSecondChance == 0){	
							if(isBrowserBase != 1) {
								showWinLoseForm(isConfettiOn,state);
							} else {
								if(isShowGameFirst == 0) {									
									winLossPage(isConfettiOn,state);
								} else {
									if(isRegistrationOn == 0) {
										reverseBrowserbaseGame();
									} else {
										winLossPage(isConfettiOn,state);
									}
								}
								if (isShowThankPage == 1 && isRegistrationOn == 1) {	
									$('#slotWrapper').hide();
									$('.thankyou-page').show();	
									redirectTimer();
								}
							}
						}	
					},4500);

					function onComplete() {
						//console.log(`Index: ${this.active}`);
					}

				}catch(e){
					window.location.reload();
				}
			}
		});
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

	// function to show game First - DAB
	function reverseBrowserbaseGame() {
		setTimeout(function(){
			var regform = $('#sidebar #userFormDesktop').html();
			$('.browser-base-regform .reg-container').html(regform);
			$('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
			$('#sidebar,#slotWrapper').hide();
			$('.cookie-position').hide();
			$('#wheelBGHeader').hide();
			$('.footerText1').hide();
			$('.footer2').hide();
			$('#canvas').hide();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$('.browser-base-regform').show();
			prefillFormData();
			icloudTooltip();
		}, 1000);
	}	

	// function to show win/lose page in browser base game - DAB 
	function winLossPage(isConfettiOn = '',state = '') {		
		if(isShowWinLosPage == 1) {
			$('.game-section').css('height',0);
			if(state == 'win') {
				$('#slotWinnerPage').show();
				$('#snowCanvas').hide();
				$('#canvas').show().showConfetti();
			} else if(state == 'lose') {
				$('#slotLosePage').show();
			}
		} else {
			if(state == 'win' && isConfettiOn == 1) {
				$('#snowCanvas').hide();
				$('#canvas').show().showConfetti();
			} 
			// if(isShowGameFirst == 1) {
				$('.browser-base-regform .reg-container').addClass('success-reg');
				$('#slotWrapper').show();
				$('#slotWrapper').addClass('browserslotWrapper');
				$('#wheelBGHeader').show();
				$('.footerText1').show();
				$('.footer2').show();
				$('.browser-base-regform').hide();
			// } 
		}
	}

	function slotSpinStuff(){

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

	        /*isSound.addEventListener('timeupdate', function(){
	        	var buffer = 1;
	        	console.log(this.duration)
	        	if(this.currentTime > this.duration - buffer){
	        		this.currentTime = 0
	        		this.play()
	        	}
	        }, false);*/
	    }

        /**
        Sound stuff end
        */

        numberOfTimeSpin += 1;
        
        var campaignId = $('#campaignId').val(); 
        var isConfettiOn = 0;


        if (emailId != '') {
        	$.ajax({

        		url  : BASE_URL + 'slot/getSlotStuff',
        		type : 'post',
        		data : {
        			campaignId : campaignId,
        			emailId : emailId
        		},
        		success : function(response){
        			// console.log(response);
        			// debugger;
        			try{

        				if (response == 0) {

        					location.reload();

        				}else{

        					var responseData = JSON.parse(response);

        					if (responseData.isSecondChance == 1) {

        						isConfettiOn = responseData.isConfettiOn;
        						slotMachineSeq = responseData.slotExtraChanceSeq;

        					}else if(responseData.isSecondChance == 0){

        						var state = responseData.slotWinLoseFormData.state;
        						var slotStuff = responseData.slotWinLoseFormData.slotStuff;

        						if (state == 'win') {

        							isConfettiOn = slotStuff.isConfettiOnFormSlot;
        							slotMachineSeq = slotStuff.winSeq;

									if(isBrowserBase != 1) {
										fillSlotWinForm(slotStuff); 
									}

        						}else if(state == 'lose'){

        							isConfettiOn = slotStuff.isConfettiOnFormSlotLose;
        							slotMachineSeq = slotStuff.loseSeq;
        							
									if(isBrowserBase != 1) {										
										fillSlotLoseForm(slotStuff); 
									} 
        						}
								$('#winStat').val(state);
								$('#isConfettiOn').val(isConfettiOn);
        					}

        					//console.log('slotMachineSeq',slotMachineSeq);
                            //replace firstname with user's name
                            $('.firstname-replace-text').each(function() {
                            	var text = $(this).text();
                            	$(this).text(text.replace(/firstname/gi, firstnameArr[0]['value'])); 
                            });


                            /*btnShuffle.addEventListener('click', () => {*/

                            	var setTimeOutForMobileHeaderDescription = setTimeout(function(){

                                    $('#mobileWheelExcitingText').css({'bottom': '0px'});

                            		clearTimeout(setTimeOutForMobileHeaderDescription);
                            	},1000);

                            	// SLOT SHUFFLE & STOP POSITION
                            	machine1.shuffle(9999);
                            	machine2.shuffle(9999);
                            	machine3.shuffle(9999);

                            	setTimeout(() => { 
                            		machine1.stop(onComplete);
                            	}, 1500);
                            	setTimeout(() => {
                            		machine2.stop(onComplete);
                            	}, 2000);
                            	setTimeout(() => { 
                            		machine3.stop(onComplete);
                            	}, 2500);

                            	machine1.changeSettings({ randomize: function(){ return (slotMachineSeq[0] - 1); }});
                            	machine2.changeSettings({ randomize: function(){ return (slotMachineSeq[1] - 1);}});
                            	machine3.changeSettings({ randomize: function(){ return (slotMachineSeq[2] - 1);}});


                            	setTimeout(() => {

									//show win ,lose or extra
									if(responseData.isSecondChance == 1){

										isSound.muted = true;

										// if (isConfettiOn == 1 && isBrowserBase != 1) {
										// 	$('#canvas').show();
										// }else{
										// 	$('#canvas').hide();
										// }

										showSecondChanceStuff();

									}else if(responseData.isSecondChance == 0){
										if(isBrowserBase != 1) {
											showWinLoseForm(isConfettiOn,state);
										} else {
											winLossPage(isConfettiOn,state);
										}
									}	
								},4500);
                            	/*});*/


                            	function onComplete() {
						        //console.log(`Index: ${this.active}`);
						    }

						    

						}

					}catch(e){
						/*console.log(e);
						debugger;*/
						window.location.reload();
					}

				}

			});

		}else{

			location.reload();
		}
    }

    function showWinLoseForm(isConfettiOn,state = ''){

    	isSound.muted = true;

    	W = window.innerWidth;
    	if (W <= 768) {

    		$('#mobileWheelExcitingText').css({'bottom':'-100px'});
    		
    		$('#infoFormModel').hide();
    		$('#winnerModel').show();
    		$('#chanceModel').hide();
    		$('#mobileHeaderContainer').hide();
    		$('#slotWrapper').hide();
    		setMobileWinPopup();

    	} else {
    		$('#userFormDesktop').hide();
    		$('#mobileWheelExcitingText').css({'bottom':'-100px'});
    		$('#secondChanceDesktop').hide();
			if(isBrowserBase == 1) {
				$('#secondChanceDesktop').hide();
				winLossPage(isConfettiOn,state);
			} else {
				$('#wheelWinningDesktop').show();
			}
            // setDesktopWinPopup();
        }


        // if (isConfettiOn == 1 && isBrowserBase != 1 ) {
		// 	$('#canvas').show();
        // }else{
        // 	$('#canvas').hide();
        // }

    }



    function fillSlotLoseForm(slotLosing){

    	if (slotLosing.slotLosingHeader != '') {
    		$('.winning-header-bg-div').css({'background-color':slotLosing.slotLosingHeaderBGColor});
    		$('.winning-form-header').text(slotLosing.slotLosingHeader).css({'color':slotLosing.slotLosingHeaderFontColor,'font-family' : slotLosing.slotLosingHeaderStyle});
    	}

    	if (slotLosing.slotLosingDescriptionBeforeImage != '') {
    		$('.winning-header-bg-div').css({'background-color':slotLosing.slotLosingHeaderBGColor});
    		$('.winning-form-description-before-image').text(slotLosing.slotLosingDescriptionBeforeImage).css({'color':slotLosing.slotLosingDescriptionBeforeImageFontColor,'font-family' : slotLosing.slotLosingDescriptionBeforeImageStyle});
    	}

    	if (slotLosing.slotLosingImageForm != '') {
    		$('.winning-form-image').css({'background-image':"url("+ slotLosing.slotLosingImageForm +")"});
    	}else{
    		$('.winning-form-image-div').hide();
    	}


    	if (slotLosing.slotLosingDescription != '') {

    		$('.winning-form-description').text(slotLosing.slotLosingDescription).css({'color':slotLosing.slotLosingDescriptionFontColor,'font-family' : slotLosing.slotLosingDescriptionStyle});
    	}else{
    		$('.winning-form-description').hide();
    	}

    	if (slotLosing.slotLosingValueDescription != '') {

    		$('.winning-form-value-description').text(slotLosing.slotLosingValueDescription).css({'color':slotLosing.slotLosingValueDescriptionFontColor,'font-family' : slotLosing.slotLosingValueDescriptionStyle,'background-color':slotLosing.slotLosingValueDescriptionBGColor});

    	}else{
    		$('.winning-form-value-description').css({'background-color':'#ffffff'});
    		$('.winning-form-value-description').hide();
    	}

    	if (slotLosing.slotLosingScarcityBarText != '') {

    		$('.winning-wheel-scarcity-bar-text').text(slotLosing.slotLosingScarcityBarText).css({'color':slotLosing.slotLosingScarcityBarFontColor,'font-family' : slotLosing.slotLosingScarcityBarFontStyle,'background-color':slotLosing.slotLosingScarcityBarBGColor});

    	}else{
    		$('.winning-wheel-scarcity-bar-text').css({'background-color':'#ffffff'});
    		$('.winning-wheel-scarcity-bar-text').hide();
    	}

    	$('.winning-btn').text(slotLosing.slotLosingButtonText).css({'color':slotLosing.slotLosingButtonFontColor,'font-family' : slotLosing.slotLosingButtonStyle,'background-color':slotLosing.slotLosingButtonBGColor});  

    	$('.wheel-win-link').attr('onclick','addOfferClick("'+ slotLosing.slotLosingButtonLink +'")');    

    	if (slotLosing.isBgTransparentSlotLose == 1) {

    		$('.winning-header-bg-div').css({'background-color':'transparent'});
    		$('.winning-form-value-description').css({'background-color':'transparent'});
    		//$('.winning-wheel-scarcity-bar-text').css({'background-color':'transparent'});
    		$('.winner-desc-container').css({'background-color':'transparent'});
    	}


    	if (slotLosing.isHideScarcityBarSlotLose == 1 ) {
    		$('.winning-wheel-scarcity-bar-text').hide();
    	}else{
    		$('.winning-wheel-scarcity-bar-text').show();
    	}

        if (slotLosing.isHideCountDownSlotLose == 0 && (slotLosing.slotLosingScarcityBarCountDownDays != '' || slotLosing.slotLosingScarcityBarCountDownHours != '' || slotLosing.slotLosingScarcityBarCountDownMinutes != '')) {  

            $('.daysText').text(slotLosing.days);
            $('.hoursText').text(slotLosing.hours);
            $('.minutesText').text(slotLosing.minutes);
            $('.secondsText').text(slotLosing.seconds);

            if (slotLosing.slotLosingScarcityBarCountDownDays == '') {
                slotLosing.slotLosingScarcityBarCountDownDays = 0;
            }

            if (slotLosing.slotLosingScarcityBarCountDownHours == '') {
                slotLosing.slotLosingScarcityBarCountDownHours = 0;
            }

            if (slotLosing.slotLosingScarcityBarCountDownMinutes == '') {
                slotLosing.slotLosingScarcityBarCountDownMinutes = 0;
            }

            var userCountDown = slotLosing.slotLosingScarcityBarCountDownDays + '-' + slotLosing.slotLosingScarcityBarCountDownHours + '-' + slotLosing.slotLosingScarcityBarCountDownMinutes;
            setUserTimeout(userCountDown)

            $('.winner-timer').css({'background-color':slotLosing.slotLosingScarcityBarBGColor});

        }else{
            
            $('.winner-timer').hide();
        }


    }



    function fillSlotWinForm(slotWinning){

    	if (slotWinning.slotWinningHeader != '') {
    		$('.winning-header-bg-div').css({'background-color':slotWinning.slotWinningHeaderBGColor});
    		$('.winning-form-header').text(slotWinning.slotWinningHeader).css({'color':slotWinning.slotWinningHeaderFontColor,'font-family' : slotWinning.slotWinningHeaderStyle});
    	}

    	if (slotWinning.slotWinningDescriptionBeforeImage != '') {
    		$('.winning-header-bg-div').css({'background-color':slotWinning.slotWinningHeaderBGColor});
    		$('.winning-form-description-before-image').text(slotWinning.slotWinningDescriptionBeforeImage).css({'color':slotWinning.slotWinningDescriptionBeforeImageFontColor,'font-family' : slotWinning.slotWinningDescriptionBeforeImageStyle});
    	}

    	if (slotWinning.slotWinningImageForm != '') {
    		$('.winning-form-image').css({'background-image':"url("+ slotWinning.slotWinningImageForm +")"});
    	}else{
    		$('.winning-form-image-div').hide();
    	}


    	if (slotWinning.slotWinningDescription != '') {

    		$('.winning-form-description').text(slotWinning.slotWinningDescription).css({'color':slotWinning.slotWinningDescriptionFontColor,'font-family' : slotWinning.slotWinningDescriptionStyle});
    	}else{
    		$('.winning-form-description').hide();
    	}

    	if (slotWinning.slotWinningValueDescription != '') {

    		$('.winning-form-value-description').text(slotWinning.slotWinningValueDescription).css({'color':slotWinning.slotWinningValueDescriptionFontColor,'font-family' : slotWinning.slotWinningValueDescriptionStyle,'background-color':slotWinning.slotWinningValueDescriptionBGColor});

    	}else{
    		$('.winning-form-value-description').css({'background-color':'#ffffff'});
    		$('.winning-form-value-description').hide();
    	}

    	if (slotWinning.slotScarcityBarText != '') {

    		$('.winning-wheel-scarcity-bar-text').text(slotWinning.slotScarcityBarText).css({'color':slotWinning.slotWinningScarcityBarFontColor,'font-family' : slotWinning.slotWinningScarcityBarFontStyle,'background-color':slotWinning.slotScarcityBarBGColor});

    	}else{
    		$('.winning-wheel-scarcity-bar-text').css({'background-color':'#ffffff'});
    		$('.winning-wheel-scarcity-bar-text').hide();
    	}

    	$('.winning-btn').text(slotWinning.slotWinningButtonText).css({'color':slotWinning.slotWinningButtonFontColor,'font-family' : slotWinning.slotWinningButtonStyle,'background-color':slotWinning.slotWinningButtonBGColor});  

    	$('.wheel-win-link').attr('onclick','addOfferClick("'+ slotWinning.slotWinningButtonLink +'")');    

    	if (slotWinning.isBgTransparentSlot == 1) {

    		$('.winning-header-bg-div').css({'background-color':'transparent'});
    		$('.winning-form-value-description').css({'background-color':'transparent'});
    		//$('.winning-wheel-scarcity-bar-text').css({'background-color':'transparent'});
    		$('.winner-desc-container').css({'background-color':'transparent'});
    	}


    	if (slotWinning.isHideScarcityBarSlot == 1 ) {
    		$('.winning-wheel-scarcity-bar-text').hide();
    	}else{
    		$('.winning-wheel-scarcity-bar-text').show();
    	}
        

        /*&& slotWinning.slotScarcityBarCountDownDays && slotWinning.slotScarcityBarCountDownHours && slotWinning.slotScarcityBarCountDownMinutes && slotWinning.slotScarcityBarCountDownDays != ''  && slotWinning.slotScarcityBarCountDownHours != '' && slotWinning.slotScarcityBarCountDownMinutes != ''*/

    	if (slotWinning.isHideCountDownSlot == 0 && (slotWinning.slotScarcityBarCountDownDays != '' || slotWinning.slotScarcityBarCountDownHours != '' || slotWinning.slotScarcityBarCountDownMinutes != '')) {  

    		$('.daysText').text(slotWinning.days);
    		$('.hoursText').text(slotWinning.hours);
    		$('.minutesText').text(slotWinning.minutes);
    		$('.secondsText').text(slotWinning.seconds);

            if (slotWinning.slotScarcityBarCountDownDays == '') {
                slotWinning.slotScarcityBarCountDownDays = 0;
            }

            if (slotWinning.slotScarcityBarCountDownHours == '') {
                slotWinning.slotScarcityBarCountDownHours = 0;
            }

            if (slotWinning.slotScarcityBarCountDownMinutes == '') {
                slotWinning.slotScarcityBarCountDownMinutes = 0;
            }

    		var userCountDown = slotWinning.slotScarcityBarCountDownDays + '-' + slotWinning.slotScarcityBarCountDownHours + '-' + slotWinning.slotScarcityBarCountDownMinutes;
    		setUserTimeout(userCountDown)

    		$('.winner-timer').css({'background-color':slotWinning.slotScarcityBarBGColor});

    	}else{
            
    		$('.winner-timer').hide();
    	}


    }


    function showSecondChanceStuff(){
		
    	W = window.innerWidth;
    	if (W <= 768) {

    		
    		$('#mobileWheelExcitingText').css({'bottom':'-100px'});
    		$('#infoFormModel').hide();
    		$('#chanceModel').show();
            // $('#mobileHeaderContainer').css({'opacity':0});
            /*$('#slotWrapper').css({'opacity':0});*/
            $('#mobileHeaderContainer').hide();
            $('#slotWrapper').hide();
            setMobileChancePopup();

        } else {
			if(isBrowserBase == 1) {
				$('#slotWrapper').hide();
			}
        	$('#userFormDesktop').hide();
        	$('#mobileWheelExcitingText').css({'bottom':'-100px'});
        	$('#secondChanceDesktop').show();
			
        }
    }


    $('#slotWrapper').click(function () {		
    	if (winWidth <= 768) {
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

    	var days = parseInt(arr[0]);
    	var hours = parseInt(arr[1]);
    	var minutes = parseInt(arr[2]);
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

	function bornFormat(born_year, born_month, born_day) {
		let d = new Date(born_year, born_month, born_day);
		let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
		let mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(d);
		let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
		return `${ye}-${mo}-${da}`;
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

			$('.browser-base-regform .userInfoText, #userFormDesktop .userInfoText,.userInfoTextPopup').each(function () {
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
    // END:: confetti -DAB
</script>
<?php include(APPPATH."views/dashboard/fire_fb_event_script.php"); ?>