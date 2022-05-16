<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cookie.min.js"></script>
<script type="text/javascript">
    var BASE_URL = '<?php echo base_url(); ?>';
</script>

<script type="text/javascript">
    var x = Math.floor((Math.random() * 10) + 1);
$('.permission-model-text-box').each(function(){
    var value = $(this).attr('data-name');
    var text = "demo" + x;
    if(value == "Fornavn"){
        $(this).val(text);
    }
     if(value == "Efternavn"){
        $(this).val(text);
    }
     if(value == "Email adresse"){
        $(this).val(text + '@gmail.com');
    }
});
$('#mobileNumber').val('886690203' + x);

$('.termsAndCondition').prop('checked', true);

$(document).on("click","#spin,#spinnow",function() {
    wheelSpinClickStuff();
});
    var language = '<?php echo $language; ?>';
    var swedenExtraTerms = <?php echo $swedenExtraTerms; ?>;
    var isSoundOn = <?php echo $isSoundOn; ?>;
    var ipAddress = '';
    var isReady = <?php echo $isReady; ?>;
    var mobileNumber = '';
    var numberOfTimeSpin = 0;
    var isSound = document.getElementById("wheelSound");
    var isWinnerSound = document.getElementById("winnerSound");
    var winWidth = window.innerWidth;
    var firstnameArr = [];
    var appNameIndex = <?php echo $appNameIndex; ?>;
    var phonePattern = "<?php echo $phonePattern; ?>";
    var phoneLength = "<?php echo $phoneLength; ?>";    
    var country = "<?php echo $country; ?>";
    var areaCode   = "";
    var isTimerOff = true;
    var isTermPopupOn = '<?php echo $isTermPopupOn; ?>';

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

        $('#wheel').click(function () {
            if (winWidth <= 768) {
                /** when user click on spin button in mobile view then add click */
                $('.userInfoError').text('').removeClass('alert alert-danger');
                //$('#infoFormModel').show();
            }
        });

        $('.close-win-model').click(function(){
            $("#winnerModel").hide();
            $('canvas').hide();
            $('#wrapper').show();
        });

        $('.spin-again').click(function(){
            $("#winnerModel").hide();
            $('canvas').hide();
            $("#wrapper").show();            
            $("#spin").click();            
        });

        $('.extra-term-fold-btn').click(function(){
            $(this).closest('li.offer').toggleClass('open');
        });
    });


    $('#mobileWheelBtn').click(function(){
        /** when user click on button below the wheel
            in mobile view then add click
        */
        wheelSpinClickStuff();
        //$('#infoFormModel').show();
    });


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
        if(numberOfTimeSpin > 8){
            numberOfTimeSpin = 2; // reset if number of spin grater then 7
        }
        $('#spin').off('click');
        var campaignId = $('#campaignId').val(); 
        var isConfettiOn = 0;
        var serverDegree;
        $.ajax({
            url  : BASE_URL + 'wheel/getWheelStuff',
            type : 'post',
            data : {
                campaignId : campaignId,
                numberOfTimeSpin : numberOfTimeSpin
            },
            success : function(response){    
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
                            console.log(wheelWinning);
                            fillWinForm(wheelWinning);

                        }
                        $('#mobileWheelExcitingText').hide();

                        //replace firstname with user's name
                        $('.firstname-replace-text').each(function() {
                          var text = "Congrats!";
                          $(this).text(text); 
                          //$(this).text(text.replace(/firstname/gi, firstnameArr[0]['value'])); 
                        });


                        totalDegree = (serverDegree) + ((14 * 360) * numberOfTimeSpin);
                        /* console.log('after total degree',serverDegree);
                        console.log('total degree', totalDegree); */

                        $('#inner-wheel, .wheel-pin, .wheel-pin-bg').css({
                            'transform': 'rotate(' + totalDegree + 'deg)'
                        });
                        
                        var setTimeOutForMobileHeaderDescription = setTimeout(function(){
                            
                            $('#mobileWheelExcitingText').addClass('welcome');
                                var div = document.createElement('div');
                                    var container = document.createElement('div');
                                    div.id = 'overlay';
                                    container.id = 'welcome_bg';
                                if (document.body.firstChild){
                                    document.body.insertBefore(div, document.body.firstChild);
                                    document.body.insertBefore(container, document.body.firstChild);
                                    } else {
                                    document.body.appendChild(div);
                                    document.body.appendChild(container);
                                }

                            clearTimeout(setTimeOutForMobileHeaderDescription);
                        },6000);
                        

                        setTimeout(function () {

                            if (serverDegree >= 0 && serverDegree <= 22.5 || serverDegree > 337.5 && serverDegree <= 360) {

                                showWinForm(isConfettiOn);

                            } else if (serverDegree > 22.5 && serverDegree <= 67.5) {

                                showWinForm(isConfettiOn);

                            } else if (serverDegree > 67.5 && serverDegree <= 112.5) {
                                
                                showWinForm(isConfettiOn);

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

                            } else if (serverDegree > 337.5 && serveDegree <=360){
                                isSound.muted = true;

                                W = window.innerWidth;
                                
                                if (W <= 768) {

                                    //$('#mobileBgHeaderDesc').show();
                                    // $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                    $('#infoFormModel').hide();
                                    $('#chanceModel').show();
                                    // $('#mobileHeaderContainer').css({'opacity':0});
                                    /*$('#wrapper').css({'opacity':0});*/
                                    $('#mobileHeaderContainer').hide();
                                    $('#wrapper').hide();
                                    setMobileChancePopup();

                                } else {

                                    $('#userFormDesktop').hide();
                                    // $('#mobileWheelExcitingText').css({'bottom':'-100px'});
                                    $('#secondChanceDesktop').show();
                                }
                                

                                if (isConfettiOn == 1) {
                                    $('#canvas').show();
                                }else{
                                    $('#canvas').hide();
                                }

                                $('.secondChanceButton').click(function(){

                                    $('.secondChanceButton').off('click');
                                    $('#canvas').hide();
                                    $('#chanceModel').hide();
                                    $('#secondChanceDesktop').hide();
                                    // $('#mobileHeaderContainer').css({'opacity':1});
                                    // $('#wrapper').css({'opacity':1});

                                    if (W <= 768){
                                        $('#mobileHeaderContainer').show();
                                        $('#wrapper').show();    
                                    }

                                    wheelSpinClickStuff();
                                });
                            }
                            $('#mobileWheelExcitingText').show();
                            $('#mobileWheelExcitingText .firstname-replace-text').text('Congrats!');
                            if(responseData.wheelWinningForm.congratsText != ''){
                                $('#mobileWheelExcitingText .firstname-replace-text').text(responseData.wheelWinningForm.congratsText).css({
                                    'color':responseData.wheelWinningForm.congratsColor, 'font-family':responseData.wheelWinningForm.congratsStyle});
                            }
                            $('#infoFormModel').hide();
                            
                        }, 6000);
                    }

                }catch(e){
                    window.location.reload();
                }
                
            }
        });
    }

    function closeCongratePopup(){
        // winner sound play    
        isWinnerSound.currentTime = 0;
        isWinnerSound.play();
        isWinnerSound.muted = false;
        
        setTimeout(function () {
            isWinnerSound.volume = 0.5;
        }, 4000);

        isWinnerSound.addEventListener('timeupdate', function(){
            var buffer = 1;                                    
            if(this.currentTime > this.duration - buffer){
                this.currentTime = 0
                this.play()
        }}, false);

        // winner sound stop
        setTimeout(function(){   
            isWinnerSound.muted = true;            
            $('#welcome_bg').hide();
            $('#mobileWheelExcitingText').hide();   
            $('#winnerModel').show();
            //$('.spin-again').css('pointer-events','none');
        }, 2000);
    }

    
    function showWinForm(isConfettiOn){

        isSound.muted = true;
        W = window.innerWidth;
        if (W <= 768) {

            // $('#mobileWheelExcitingText').css({'bottom':'-100px'});
            //$('#mobileBgHeaderDesc').show();
            $('#infoFormModel').hide();            
            $('#chanceModel').hide();
            $('#mobileHeaderContainer').hide();
            $('#wrapper').hide();
            setMobileWinPopup();
            closeCongratePopup();
        } else {


            $('#userFormDesktop').hide();
            // $('#mobileWheelExcitingText').css({'bottom':'-100px'});
            $('#secondChanceDesktop').hide();
            $('#wheelWinningDesktop').show();
            // setDesktopWinPopup();
            closeCongratePopup();
        }


        if (isConfettiOn == 1) {
            $('#canvas').show();
        }else{
            $('#canvas').hide();
        }

        //wheelUserWin();
    }

    function wheelUserWin(){

        var campaignId = $('#campaignId').val();

        $.ajax({

            type : 'post',
            url : BASE_URL + 'wheel/declareUserWin',
            data : {
                mobileNumber : mobileNumber,
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
            $('.winning-form-image-tag').attr("src",wheelWinning.wheelWinningImageForm);
        }else{
            $('.winning-form-image-div').hide();
            $('.winning-form-image-tag').hide();
        }

        
        if (wheelWinning.wheelWinningDescription != '') {
            
            $('.winning-form-description').text(wheelWinning.wheelWinningDescription).css({'color':wheelWinning.wheelWinningDescriptionFontColor,'font-family' : wheelWinning.wheelWinningDescriptionStyle});
        }else{
            $('.winning-form-description').hide();
        }

        if (wheelWinning.wheelWinningValueDescription != '') {

            $('.winning-form-value-description').text(wheelWinning.wheelWinningValueDescription);

        }else{
            
            $('.winning-form-value-description').hide();
        }

        if (wheelWinning.congratsText != '') {

            $('.congrats-text').text(wheelWinning.congratsText).css({'color':wheelWinning.congratsColor,'font-family' : wheelWinning.congratsStyle});

        }else{
            
            $('.winning-form-value-description').hide();
        }
        
        if (wheelWinning.wheelWinningTermsText != '') {
            $('.winner-terms').html(wheelWinning.wheelWinningTermsText).css({'color':wheelWinning.wheelWinningTermsFontColor,'font-family' : wheelWinning.wheelWinningTermsStyle,'background-color':wheelWinning.wheelWinningTermsBGColor});

        }else{
            
            $('.winning-form-value-description').hide();
        }

        if (wheelWinning.wheelScarcityBarText != '') {

            $('.winning-wheel-scarcity-bar-text').text(wheelWinning.wheelScarcityBarText).css({'color':wheelWinning.wheelWinningScarcityBarFontColor,'font-family' : wheelWinning.wheelWinningScarcityBarFontStyle,'background-color':wheelWinning.wheelScarcityBarBGColor});

        }else{
            $('.winning-wheel-scarcity-bar-text').css({'background-color':'#ffffff'});
            $('.winning-wheel-scarcity-bar-text').hide();
        }

        $('.winning-btn span').text(wheelWinning.wheelWinningButtonText).css({'color':wheelWinning.wheelWinningButtonFontColor,'font-family' : wheelWinning.wheelWinningButtonStyle,'background-color':wheelWinning.wheelWinningButtonBGColor});  
        
        $('.spin-again span').text(wheelWinning.wheelWinningAgainButtonText).css({'color':wheelWinning.wheelWinningAgainButtonFontColor,'font-family' : wheelWinning.wheelWinningAgainButtonStyle,'background-color':wheelWinning.wheelWinningAgainButtonBGColor});  

        $('.wheel-win-link').attr('href',wheelWinning.wheelWinningButtonLink);    

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
            setTimeout(() => {
                setUserTimeout(userCountDown)
            }, 8000);

            $('.winner-timer').css({'background-color':wheelWinning.wheelScarcityBarBGColor});

        }else{
            $('.winner-timer').hide();
        }

        
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
                 $('.userInfoError').text(response).css({'margin-top':'10px'}).addClass('alert alert-danger');   
             }

         }
     });

    }



    function setUserTimeout(userCountDown) {

        var daysHoursMinutes = userCountDown;
        var arr = daysHoursMinutes.split('-');

        var days = (arr[0] != '')?arr[0]:0;
        var hours = (arr[1] != '')?arr[1]:0;
        var minutes = (arr[2] != '')?arr[2]:0;
        var seconds = (arr[3] != '')?arr[3]:0;

        //add days,months,minutes value to current date time
        var nowDateTime = new Date();

        nowDateTime.setDate(nowDateTime.getDate() + parseInt(days));
        nowDateTime.setHours(nowDateTime.getHours() + parseInt(hours));
        nowDateTime.setMinutes(nowDateTime.getMinutes() + parseInt(minutes));
        nowDateTime.setSeconds(nowDateTime.getSeconds() + parseInt(seconds));

        dateTimeCountdown(nowDateTime)
    }

    function blink_text() {
        $('.blink').fadeOut(500);
        $('.blink').fadeIn(500);
    }

    function dateTimeCountdown(addedDateTime) {

    // Set the date we're counting down to
    var countDownDate = new Date(addedDateTime).getTime();
    // $('body').css({'overflow': 'hidden'});

    // Update the count down every 1 second
    
    if(isTimerOff){
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
            
            // console.log(days, '-' , hours, '-' , minutes, '-' , seconds);

            /* $('.daysValue').text(days);
            $('.hoursValue').text(hours); */
            if(minutes >=0 && seconds >=0){
                $('.minutesValue').text(minutes.toLocaleString('en-US', {minimumIntegerDigits: 2}));
                $('.secondsValue').text(seconds.toLocaleString('en-US', {minimumIntegerDigits: 2}));   
                isTimerOff = false;        
            }   

            if(minutes == 0 && seconds == 0){
                /* $('.spin-again').css('pointer-events','unset');            
                setInterval(blink_text, 1000); */
                isTimerOff = true;
                clearInterval(x);
            }

            if (distance < 1000) {
                clearInterval(x);
            }

        }, 1000);
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
    var isSetTermCookie =  $.cookie('term_popup_18_plus_compliance');
    if(isSetTermCookie == 'true') {
        isSetTermCookie = 'true';
    } else {
        isSetTermCookie = 'false';
    }
    if(isTermPopupOn == 1 && isSetTermCookie == 'false') {
        $('#termModel').modal('show');
    }
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
});
// END:: translate year, month , day & select text according to language of game -DAB

// term popup - close button
$('body').on('click','#closeBtn',function(){
    $('#termModel').modal('hide');
});

$("#termModel #confirmBtn").on('click',function(){
    $.cookie("term_popup_18_plus_compliance", "true", { expires : 1 });
    $('#termModel').modal('hide');
});
</script>