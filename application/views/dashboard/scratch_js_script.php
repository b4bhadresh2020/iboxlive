<script type="text/javascript">
        var BASE_URL = '<?php echo base_url(); ?>';
        </script>

        <script type="text/javascript">

            var language = '<?php echo $language; ?>';
            var swedenExtraTerms = <?php echo $swedenExtraTerms; ?>;
            var scratchImg = '<?php echo $gameImage; ?>';
            var backgroundImage = '<?php echo $backgroundImage; ?>';
            var extraChance = <?php echo $extraChance; ?>;
            var isSoundOn = <?php echo $isSoundOn; ?>;
            var isRegistrationOn = <?php echo $isRegistrationOn; ?>;
            var isBlackShadowEnabled = <?php echo $isBlackShadowEnabled; ?>;
            var isGridEnabled = <?php echo $isGridEnabled; ?>;
            var ipAddress = '';
            var isReady = <?php echo $isReady; ?>;
            var appNameIndex = <?php echo $appNameIndex; ?>;
            
            var gameImageDescription = '<?php echo $gameImageDescription; ?>';
            var gameFooterImage = '<?php echo @$gameFooterImage; ?>';
            var gameImageFooterText = '<?php echo @$gameImageFooterText; ?>';
            var winSequence = <?php echo $winSequence; ?>;
            var currentChance = 0;
            var trackingUrl = "<?php echo @$trackingUrl; ?>";
            var firstnameArr = [];

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

            /*footerTextArray.sort(function(a,b){
                return a.line == ""
            });
            console.log('footerTextArray', footerTextArray);*/

            footerTextArray.sort(function(a, b){
                return a.line == "" ? 1 : (b.line == "" ? -1 : 0)
            })
            
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
            var filledInPixels = 0;
            var playAudio = document.getElementById("audioDemo");
            // playAudio.loop = "true";


            // myAudio.setAttribute('src','audiofile.mp3');
            var canvasWidth = $("#myCanvas").width();
            var canvasHeight = $("#myCanvas").height();

            var canvasLoadedOnce = false;
            var isFirstTime = 0;
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
            var isPrefilldataOn = '<?php echo $isPrefilldataOn; ?>';
            var isDisableIcloudEmail	 = '<?php echo $isDisableIcloudEmail; ?>';
            var postCode = "";
            var timerRedirectUrl = '<?php echo $timerRedirectUrl; ?>';
            var isClicked = 0;

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
                    // if(isBlackShadowEnabled == 1){
                    //     sources.push(BASE_URL + 'images/lines-with-back.png');  
                    // } 

                    if (isBlackShadowEnabled == 1 && isGridEnabled == 1) {
                        sources.push(BASE_URL + 'images/lines-with-back.png');
                    } else if (isBlackShadowEnabled == 1) {
                        sources.push(BASE_URL + 'images/transparant-gray-img.png'); 
                    } else if (isGridEnabled == 1) {
                        sources.push(BASE_URL + 'images/lines-with-transparent.png'); 
                    }
                    
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

            
            function bornFormat(born_year, born_month, born_day) {
                let d = new Date(born_year, born_month, born_day);
                let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
                let mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(d);
                let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
                return `${ye}-${mo}-${da}`;
            }

            $(document).ready(function(){

                var windowWidth = window.innerWidth;

                if (windowWidth < 768) {
                    $('.model-title').css({'color':'<?php echo $userInfoHeaderMobileFontColor; ?>'});
                }

                $.getJSON("https://jsonip.com/?callback=?", function (data) {
                    ipAddress = data.ip;
                });

                var userOtherInfo = getUserDeviceInformation();

                getStuffsInOtherLanguage();

                if (isSoundOn == 1) {
                    playAudio.volume = 1.0;
                    /*playAudio.play();*/    
                }

                $('#gameContainer').hide();
                $('#winnerPage').hide();
                $('#losePage').hide();
                setCanvasStuffs();
               
                // Get the permissionModel
                var permissionModel = document.getElementById('permissionModel');
                var permissionModelBtn = document.getElementById('permissionModelBtn');
                var permissionClose = document.getElementsByClassName('perClose')[0];
                var joinBtn = document.getElementById('joinBtn');
                var permissionModelBtnCount = isRegistrationOn;

                if (isReady == 1) {
                    if(isBrowserBase == 1 && isShowGameFirst == 0) {
                        var regform = $('.registarion-popup .form-main').html();
                        $('.main-image-container').hide();
                        $('.browser-base-regform .reg-container').html(regform);
                        $('.browser-base-regform .reg-container .form-title').insertBefore('.browser-base-regform .reg-container');
                        
                        if(permissionModelBtnCount == 1){ // registration form disable
                            $('.browser-base-regform').hide();
                            loadGameInstant();
                        } else {
                            $('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
                            $('#backGroundHeader').hide();
                            $('.cookie-position').hide();
                            $('#footer2').hide();
                            $('#joinBtn').hide();
                            $('.footerText1').hide();
                        } 
                    } else if(isBrowserBase == 1  && isShowGameFirst == 1) {
                        loadGameInstant();
                    } else {
                        if(permissionModelBtnCount == 1){
                            permissionModel.style.display = 'none';
                            loadGameInstant();
                            
                        }

                        permissionModelBtn.onclick = function () {
                            if (permissionModelBtnCount == 0) {
                                permissionModel.style.display = 'block';
                                
                                
                            }else if(permissionModelBtnCount == 1){
                                permissionModel.style.display = 'none';
                                loadGameInstant();
                                
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
                                
                            
                                
                            }else if(permissionModelBtnCount == 1){
                                permissionModel.style.display = 'none';
                                loadGameInstant();
                            
                            }
                        }
                    }
                }
               
                $('body').on('click','#btn_register',function(){
                    var emailId = $('#emailId').val();
                    var errorMsg = '';
                    var userInfoTextVal = [];//convert php array to jquery array 
                    var userInfoRequiredFields = <?php echo json_encode($userInfoRequired); ?>;
                    userInfoRequiredFields = JSON.parse(userInfoRequiredFields);

                    //if user fields  empty then store in comma seprated string in below variable
                    var userRequiredFields = '';   
                    var born = '';     
                    var regDetail = [];  
                    var getRegCookie = Cookies.get('regDetail');
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
                    if(isBrowserBase == 1) {
                        var born_year = $(this).siblings('.form-all-inputs').find('.combodate .year').val();
                        var born_month = $(this).siblings('.form-all-inputs').find('.combodate .month').val();
                        var born_day = $(this).siblings('.form-all-inputs').find('.combodate .day').val();
                        if(born_year != '' && typeof born_year != "undefined" && born_month != '' && typeof born_month != "undefined" && born_day != ''  && typeof born_day != "undefined") {
                            born = bornFormat(born_year, born_month, born_day);
                        }

                        $(this).siblings('.form-all-inputs').find('.userInfoText').each(function () {
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
                                    if(textName != 'email') {
                                        if (jQuery.inArray(textName, getFirstNameArr) != -1) {
                                            afTextName = 'firstname';                                       
                                        } else if(jQuery.inArray(textName, getLastNameArr) != -1) {
                                            afTextName = 'lastname';
                                        } else if(jQuery.inArray(textName, getMobileArr) != -1) {
                                            afTextName = 'mobile';
                                        } else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
                                            afTextName = 'birthdate';
                                        } else {
                                            afTextName = textName;
                                        }
                                        if(getRegCookie != ''){
                                            if(cookieResult[afTextName]) {
                                                index = getRegDetail.findIndex(obj => obj.name == afTextName);
                                            } 
                                        }
                                        userInfoTextVal.push({name:textName,value:textVal});
                                        regDetail.push({name:afTextName,value:textVal});
                                        if(getRegCookie != '' && textVal != ''){
                                            if(index >=0 && index != null) {
                                                getRegDetail[index].value = textVal;
                                            } else {                                                
                                                getRegDetail.push({name:textName,value:textVal});
                                            } 
                                        }
                                    } else {
                                        if(getRegCookie !=''){
                                            if(cookieResult['email']) {
                                                index = getRegDetail.findIndex(obj => obj.name == 'email');
                                                if(index >=0 && index != null && textVal != '') {
                                                    getRegDetail[index].value = textVal;
                                                }
                                            }
                                        }
                                    }
                                }
                        });
                    } else {
                        var born_year = $(this).closest('.form-all-inputs').find('.combodate .year').val();
                        var born_month = $(this).closest('.form-all-inputs').find('.combodate .month').val();
                        var born_day = $(this).closest('.form-all-inputs').find('.combodate .day').val();
                        if(born_year != '' && typeof born_year != "undefined" && born_month != '' && typeof born_month != "undefined" && born_day != ''  && typeof born_day != "undefined") {
                            born = bornFormat(born_year, born_month, born_day);
                        }
                        
                        $(this).closest('.form-all-inputs').find('.userInfoText').each(function () {
                            var textVal = $(this).val();
                            var textName = $(this).attr('data-name');
                            var textID = $(this).attr('id');                           
                            if(textID == 'born'){
                                textVal = born;
                            }
                            var index = null;
                            var afTextName = '';
                            
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
                                if(textName != 'email') {
                                    if (jQuery.inArray(textName, getFirstNameArr) != -1) {
                                        afTextName = 'firstname';
                                    } else if(jQuery.inArray(textName, getLastNameArr) != -1) {
                                        afTextName = 'lastname';
                                    } else if(jQuery.inArray(textName, getMobileArr) != -1) {
                                        afTextName = 'mobile';
                                    } else if(jQuery.inArray(textName, getBirthdateArr) != -1) {
                                        afTextName = 'birthdate';
                                    } else {
                                        afTextName = textName;
                                    }
                                    if(getRegCookie != ''){
                                        if(cookieResult[afTextName]) {
                                            index = getRegDetail.findIndex(obj => obj.name == afTextName);
                                        } 
                                    }

                                    userInfoTextVal.push({name:textName,value:textVal});
                                    regDetail.push({name:afTextName,value:textVal});
                                    if(getRegCookie != '' && textVal != ''){
                                        if(index >=0 && index != null) {
                                            getRegDetail[index].value = textVal;
                                        } else {                                                
                                            getRegDetail.push({name:textName,value:textVal});
                                        } 
                                    }
                                } else {
                                    if(getRegCookie != ''){
                                        if(cookieResult['email']) {
                                            index = getRegDetail.findIndex(obj => obj.name == 'email');
                                            if(index >=0 && index != null && textVal != '') {
                                                getRegDetail[index].value = textVal;
                                            }
                                        }
                                    }
                                }  
                            }
                        });
                    }
                    regDetail.push({name:'email',value:emailId});                   
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
                        var postCodeRgex = /^[0-9]*$/;
                        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        var emailSplit = emailId.split('@');
                        if(regex.test(emailId) == false){

                            errorMsg = language + '_Valid_Email';
                            getErrorMsg(language,errorMsg);
                            $('#emailId').focus();
                            return false;

                        } else if(emailSplit[1].toLowerCase().indexOf('icloud') != -1 && isDisableIcloudEmail == 1) {
                            errorMsg = language + '_Icloud_Mail';
                            var tooltipMsg = getErrorMsg(language,errorMsg);
                            $('#emailId').tooltip({
                                placement: 'top',
                                title: tooltipMsg
                            });
                            $('#emailId').focus();
                            $('#emailId').css('color', 'red');
                            return false;

                        } else if($('input#termsAndCondition').is(':checked') == false){

                            errorMsg = language + '_Terms';
                            getErrorMsg(language,errorMsg);
                            return false;

                        }else if(language == 'SE' && swedenExtraTerms == 1 && $('input#termsAndConditionForSweden').is(':checked') == false){

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
                            
                            //$(this).attr('disabled','disabled').addClass('disabled');
                            var campaignId = $('#campaignId').val();
                            var hostName   = $(':hidden#hostName').val();
                            var winStat = $('#winStat').val();

                            firstnameArr = userInfoTextVal;
                            $.ajax({
                                url : BASE_URL + 'home/userRegistration',
                                type: 'post',
                                data : {
                                    transactionId : getUrlParameter('transaction_id'),
                                    campaignId:campaignId,
                                    emailId:emailId,
                                    ipAddress:ipAddress,
                                    browser:userOtherInfo.browser,
                                    device:userOtherInfo.device,
                                    os:userOtherInfo.os,
                                    hostName:hostName,
                                    userInfoTextVal:userInfoTextVal
                                },
                                success:function(response){
                                    console.log(response);
                                    
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
                                        // START::Store form filled details for prefill data in other campaign - DAB
                                        if(getRegDetail) {
                                            Cookies.set('regDetail', getRegDetail);
                                        } else {
                                            Cookies.set('regDetail', regDetail, { expires: 1 });
                                        }                                       

                                        $('#userInfoError').html('');
                                        var mulImages  = JSON.parse(response);
                                        var multipleImages = mulImages.multipleImages;

                                        permissionModel.style.display = 'none';
                                        permissionModelBtnCount = 1;

                                        //click counter by user
                                        if(!isClicked){
                                            userByClick("",mulImages.userId);
                                            isClicked = 1;
                                        }

                                        if(isBrowserBase == 1) {
                                            $('.browser-base-regform').hide();

                                            if(permissionModelBtnCount == 1) {
                                                if(isShowWinLosPage == 1 && isShowGameFirst == 1 ) {
                                                    if(winStat == 1) {
                                                        $('.game-section').css('height',0);
                                                        $('.game-section .page-container').hide(); 
                                                        $("body").prepend('<div id="preloader">Loading...</div>');
                                                        setTimeout(function(){ 
                                                            $('#winnerPage').show();
                                                            $('#snowCanvas').hide();
                                                            $('#canvas').show().showConfetti();
                                                            $('#preloader').remove();
                                                        }, 500);
                                                    } else if (winStat == 0) {
                                                        $('.game-section').css('height',0);
                                                        $('.game-section .page-container').hide(); 
                                                        $("body").prepend('<div id="preloader">Loading...</div>');
                                                        setTimeout(function(){ 
                                                            $('#losePage').show();
                                                            $('#preloader').remove();
                                                        }, 500);
                                                    }
                                                } else if (isRedirectPage == 1) {
                                                    //facebook pixel (do not remove. It is uncomment in live)
                                                    sendRequestToClientApiAndFireFbEvent(response,"home");
                                                    window.location.href = registerRedirectUrl;
                                                    return false;
                                                } else if (isShowThankPage == 1) {
                                                    $('#permissionModelBtn').hide();
                                                    $('.thankyou-page').show();
                                                    redirectTimer();
                                                    // $('#backGroundHeader').show();
                                                    $('#footer2').show();
                                                    //facebook pixel (do not remove. It is uncomment in live)
                                                    sendRequestToClientApiAndFireFbEvent(response,"home");
                                                    return false;
                                                } else {
                                                    $('#permissionModelBtn').show();
                                                }
                                            }
                                        }
                                        $('#permissionModelBtn').show();
                                        $('#myCanvas').addClass('diff-cursor');
                                        $('#gameContainer').show();
                                    
                                        
                                        setCanvasStuffs(function(){
                                            multipleImagesStuff(multipleImages);
                                        });
                                        //facebook pixel (do not remove. It is uncomment in live)
                                        sendRequestToClientApiAndFireFbEvent(response,"home");
                                        if(isBrowserBase == 1) {
                                            $('#backGroundHeader').show();
                                            $('#footer2').show();
                                        }
                                    }
                                }
                            }); 
                        }
                    } 
                });

                
            });

            function loadGameInstant(){
                var campaignId = $('#campaignId').val();
                $.ajax({
                    url : BASE_URL + 'home/loadGameInstant',
                    type: 'post',
                    data : {
                        campaignId:campaignId,
                    },
                    success:function(response){
                        $('#userInfoError').html('');                        

                        var mulImages  = JSON.parse(response);
                        var multipleImages = mulImages.multipleImages;
                        
                        $('#myCanvas').addClass('diff-cursor');
                        $('#gameContainer').show();
                        if(isBrowserBase == 1) {
                            $('#permissionModelBtn').show();
                            $('.browser-base-regform').hide();
                        }
                        setCanvasStuffs(function(){
                            multipleImagesStuff(multipleImages);
                        });              
                    }
                });
            }


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

                //console.log('filledInPixels', filledInPixels);
                //replace firstname with user's name
                if(firstnameArr.length){
                    $('.firstname-replace-text').each(function() {
                        var text = $(this).text();
                        $(this).text(text.replace(/firstname/gi, firstnameArr[0]['value'])); 
                    });
                }else{
                    $('.firstname-replace-text').each(function() {
                        var text = $(this).text();
                        $(this).text(text.replace(/firstname/gi, "Guest")); 
                    });
                }                

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

                setTimeout(function() {
                    $('#gameMultipleImages').html('');
                    for (var i = 0; i < multipleImages.length; i++) {

                        var mulImage = multipleImages[i];
                        $('#gameMultipleImages').append('<div class="scal-' + (i+1) + '" style = "background-image: url('+ mulImage +')" ></div>');
                    }
                }, 500 );
                

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
                        var permissionModelBtnCount = isRegistrationOn;
                        $.ajax({
                            type:"post",
                            url :BASE_URL+'home/checkUserWinOrNot',
                            data:{
                                campaignId:campaignId,
                                emailId:emailId,
                                multipleImages:multipleImages
                            },
                            success:function(winStat){
                                $('#winStat').val(winStat);
                                
                                // We need to increment click once the game scratch.
                                if(!isClicked){
                                    userByClick(emailId);
                                    isClicked = 1;
                                }
                                if (winStat == 1 ) {

                                    //draw win line
                                    $('#winSequenceDiv').html('');
                                    var winSequenceClass = 'winning-line-' + winSequence ;
                                    $('#winSequenceDiv').addClass(winSequenceClass);
                                    $(".tracking-pixel").html("").html(trackingUrl);

                                    if(isBrowserBase != 1) {
                                        var winSetTimeOut = setTimeout(function(){ 
                                            $('#winnerModel').show();
                                            clearTimeout(winSetTimeOut);
                                        }, 1500);
                                    }
                                    
                                    // $('#userOffer').hide();
                                    $('#loserModel').hide();
                                    $('#joinBtn').hide();
                                    $('#snowCanvas').hide();
                                    $('#canvas').show().showConfetti();
                                    userWin(emailId);
                                    if(isBrowserBase == 1  && isShowGameFirst == 1 && permissionModelBtnCount == 0) {
                                        reverseBrowserbaseGame();
                                    }
                                    // START:: show winner page according checkbox selection (https://prnt.sc/10vpyas) - DAB
                                    if(isBrowserBase == 1) {
                                        $('#winnerModel').hide();
                                        if((isShowWinLosPage == 1 && permissionModelBtnCount == 1) ||
                                            (isShowWinLosPage == 1 && isShowGameFirst == 1 && permissionModelBtnCount == 1) ||
                                            (isShowWinLosPage == 1 && isShowGameFirst == 0 && permissionModelBtnCount == 0)){ 
                                            $('.game-section').css('height',0);
                                            $('.game-section .page-container').hide(); 
                                            $('#winnerPage').show();
                                            $('#snowCanvas').hide();
                                            $('#canvas').show().showConfetti();
                                        }  else {
                                            if((isShowWinLosPage == 0 && permissionModelBtnCount == 1) ||
                                                (isShowWinLosPage == 0 && permissionModelBtnCount == 0 && isShowGameFirst == 0)) {
                                                // $("body").prepend('<div id="preloader" class="remove-bg">Loading...</div>');
                                                // setTimeout(function(){
                                                //     $('#preloader').remove();
                                                //     location.reload();
                                                // }, 2000);
                                            }
                                        }  
                                    }
                                    // END:: show winner page according checkbox selection (https://prnt.sc/10vpyas) - DAB 

                                }else if(winStat == 0){

                                     $('#canvas').hide();

                                    if (extraChance > 0 && currentChance < extraChance ) {

                                        $(".tracking-pixel").html("").html(trackingUrl);
                                        $('#secondChanceModal').show();
                                        $('#secondChanceOk').off().click(function(){

                                        $('#secondChanceModal').hide();
                                            
                                            //get muliple images
                                            $.ajax({
                                                url : BASE_URL + 'home/getShuffledImages',
                                                type : 'post',
                                                data : {
                                                    campaignId:campaignId   
                                                },
                                                success:function(response){
                                                    clearCanvas();
                                                    filledInPixels = 0;
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
                                            if(isBrowserBase != 1) {
                                                $('#loserModel').show();
                                            } 
                                            $('#permissionModelBtn').hide();
                                            $('#gameMultipleImages').html('');
                                            $('#backGroundHeader').hide();
                                            if(isBrowserBase == 1) {
                                                $('.cookie-position').hide();
                                                $('#footer2').hide();
                                                $('.footerText1').hide();
                                            }
                                            clearTimeout(offerSetTimeOut);                   
                                            
                                        }, 1000);
                                        if(isBrowserBase == 1  && isShowGameFirst == 1 && permissionModelBtnCount == 0) {
                                            reverseBrowserbaseGame();
                                        }
                                        // START:: show loss page according checkbox selection (https://prnt.sc/10vpyas) - DAB
                                        if(isBrowserBase == 1) {
                                            $('#loserModel').hide();
                                            if((isShowWinLosPage == 1 && permissionModelBtnCount == 1) ||
                                            (isShowWinLosPage == 1 && isShowGameFirst == 1 && permissionModelBtnCount == 1) ||
                                            (isShowWinLosPage == 1 && isShowGameFirst == 0 && permissionModelBtnCount == 0)){ 
                                                $('.game-section').css('height',0);
                                                $('.game-section .page-container').hide(); 
                                                $('#losePage').show();
                                            }  else {
                                                if((isShowWinLosPage == 0 && permissionModelBtnCount == 1) ||
                                                    (isShowWinLosPage == 0 && permissionModelBtnCount == 0 && isShowGameFirst == 0)) {
                                                    $("body").prepend('<div id="preloader" class="remove-bg">Loading...</div>');
                                                    setTimeout(function(){
                                                        $('#preloader').remove();
                                                        location.reload();
                                                    }, 2000);
                                                }
                                            }  
                                        } 
                                        // END:: show loss page according checkbox selection (https://prnt.sc/10vpyas) - DAB
                                    }
                                }else if(winStat == 3){
                                    // location.reload();
                                    if(isBrowserBase == 1  && isShowGameFirst == 1 && permissionModelBtnCount == 0) {
                                        reverseBrowserbaseGame();
                                    }
                                }else{

                                    errorMsg = language + '_Sys_Pro';
                                    getErrorMsg(language,errorMsg);
                                    $('#emailId').focus();
                                    if(isBrowserBase == 1  && isShowGameFirst == 1 && permissionModelBtnCount == 0) {
                                        reverseBrowserbaseGame();
                                    }
                                }

                                if (isShowThankPage == 1 && permissionModelBtnCount == 1) {
                                    $('#permissionModelBtn').hide();
                                    $('.footerText1').hide();
                                    $('#joinBtn').hide();
                                    $('.thankyou-page').show();
                                    redirectTimer();
                                }
                            }
                        });
                    }
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

            function reverseBrowserbaseGame() {
                setTimeout(function(){
                    var regform = $('.registarion-popup .form-main').html();
                    $('.browser-base-regform .reg-container').html(regform);
                    $('.browser-base-regform .reg-container .form-title').insertBefore('.browser-base-regform .reg-container');
                    $('.browser-base-regform #btn_register').insertAfter('.browser-base-regform .form-bottom-text');
                    $(".tracking-pixel").html("").html(trackingUrl);
                    $('#backGroundHeader').hide();
                    $('.cookie-position').hide();
                    $('#permissionModelBtn').hide();
                    $('#canvas').hide();
                    $('#winnerModel').hide();
                    $('#loserModel').hide();
                    $('#joinBtn').hide();
                    $('#footer2').hide();
                    $('.footerText1').hide();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('.browser-base-regform').show();
                    prefillFormData();
                    icloudTooltip();
                }, 1000);
            }

            function thankyouPage() {

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
                                $('#userInfoError').html('<p style = "color:red" ><strong>'+ response +'</strong></p>');   
                            }
                       }

                   }
                }).responseText;
                return errorMsgAjax;
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

        function arrayColumn(array, columnName) {
			return array.map(function(value,index) {
				return value[columnName];
			})
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

                $('.browser-base-regform .userInfoText, .form-all-inputs .userInfoText').each(function () {
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
                    } else if(textName == 'email') {
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
            $('#emailId').on('keyup',function(){
                var tooltipMsg = ''
                var emailValue = $(this).val();
                if(emailValue.toLowerCase().indexOf('icloud') != -1 && isDisableIcloudEmail == 1) {
                    var errorMsg = language + '_Icloud_Mail';                    
                    tooltipMsg = getErrorMsg(language,errorMsg);
                    $(this).tooltip({
                        placement: 'top',
                        title: tooltipMsg
                    });
                    $('#emailId').focus();
                    $('#emailId').css('color', 'red');
                    $('#btn_register').attr('disabled' , 'disabled').addClass('disabled');
                    
                } else {
                    $(this).tooltip("destroy");
                    $('#emailId').css('color', '#000000');
                    $('#btn_register').removeAttr('disabled').removeClass('disabled');
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

        //START:: close modal popup - DAB
        $('.modal-close').click(function(){
            $(this).closest('.modal').hide();
        });
        //END:: close modal popup - DAB       

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