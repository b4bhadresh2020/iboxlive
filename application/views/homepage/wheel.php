<html style="overflow: hidden;">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/wheelgame/main_au.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/wheelgame/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/wheelgame/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/wheelgame/common.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/wheelgame/magnific-popup.min.css" type="text/css">
    <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
        <script src="<?php echo base_url(); ?>js/snow.js"></script>
    <?php } ?>
    <title> Inboxgame</title>
    <style>
       
       body {
            background: url(<?= base_url()."images/wheelgame/".$backgroundImage ?>);
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center !important;
        }        

        #modal_final{
            background: url(<?= base_url()."images/wheelgame/".@$winnerImage ?>);
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center !important;
            min-height: 350px;
        }
        a.btn{
            background:<?=isset($buttonColor) && !empty($buttonColor) ? $buttonColor : "rgb(83, 145, 1)"?>;
        }
        a.btn:hover{
            background:#2c2c2c !important;
        }

        .topbar h1,
        .rounded .won-label,
        .rounded .price-tag,
        .spin-label{
            color: <?=$fontColor?> !important;
            display: block;
            position: relative;
            font-size: 28px;
            line-height: 30px;            
            margin: 0px;
            font-weight: bold;
            padding: 10px;            
        }

        .headertext{
            font-size:22px; 
            letter-spacing: 0px;
        }
        .isfullWinnerSublabel .spin-label {
            margin: 0;
        }
        .winner-sublabel {
            font-size: 16px;
            color: <?=$fontColor?> !important;
            margin: 1em 0 0 0;
        }
        .price-highlight {
            background-color: rgba(255,255,255,0.12);
            color: <?=$fontColor?> !important;
            font-weight: 900;
            padding: 1em 0;
            margin-bottom: 2em;
            border-radius: 10px;
            text-transform: uppercase;
            font-size: 18px;
            margin: 2em 0 0 0;
            line-height: 36px;
        }

        .timer-main {
            font-size: 20px;
            color: <?=$fontColor?> !important;
            margin: 1em 0 0 0;
        }
        .fa-refresh.fa-spin {
            color : <?=(isset($spinIconColor) && !empty($spinIconColor)) ? $spinIconColor : '';?>
        }
        @media screen and (min-width: 768px) {
            body {
                background: url(<?= base_url()."images/wheelgame/".$backgroundImage ?>) no-repeat center top / cover;
            }
            .block-left{
                margin-right: auto !important;
                margin-left: 30% !important;
            }
            .headertext{
                font-size:30px; 
                letter-spacing: 0px;
            }
        }

        .blink_me {
            animation: blinker 1s linear infinite;
            background: black;
            border-radius: 10px;
            color: <?=$blinkfontColor?> !important;
            margin-top: 10px;
        }

         @keyframes blinker {  
            60% { opacity: 0.5; }
        }

        #icon_user {
        background-image: url("<?php echo base_url(); ?>images/boxgame/user_icon.png");
        background-repeat: no-repeat;
        width: 36px;
        height: 36px;
        background-size: 80%;
        display: block;
        background-position: 6px 4px;
    }

    #icon_email {
        background-image: url("<?php echo base_url(); ?>images/boxgame/email_icon.png");
        background-repeat: no-repeat;
        width: 36px;
        height: 36px;
        background-size: 80%;
        display: block;
        background-position: 6px 4px;
    }

    #icon_phone {
        background-image: url("<?php echo base_url(); ?>images/boxgame/phone_icon.png");
        background-repeat: no-repeat;
        width: 36px;
        height: 36px;
        background-size: 80%;
        display: block;
        background-position: 6px 4px;
    }

    #submitUserForm {
        margin-top: 6%;
        margin-left: 10px;
        margin-right: 10px;
    }
    </style>
</head>
<body> 
    <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
        <canvas id="snowCanvas" style="position: absolute;" ></canvas>
        <!-- offer block -->
        <img src="<?php echo base_url(); ?>images/christmas.gif" style="position:fixed;right:0;bottom:0;height:300px">
    <?php } ?>

    <div>
        <div class="mfp-container mfp-s-ready mfp-inline-holder">
            <div class="mfp-content">
                <div id="modal" class="clearfix" style="text-align: center">
                    <audio id="audio" src="<?php echo base_url(); ?>images/wheelgame/20170509122816_casinom.mp3" preload="auto"></audio>
                    <div id="overlay" style="">
                        <div id="pop-up">
                            <p></p>
                            <h1 style="text-align:center">
                                <span style="font-family:georgia,serif">
                                    <span style="color:#3c465f">
                                        <strong>
                                            <img alt="" src="<?php echo base_url(); ?>images/wheelgame/Checkmark.gif"
                                            style="height:100px; width:100px">
                                        </strong>
                                        <br>
                                        <span style="font-size:26px"><?= $popupText1?></span>
                                    </span>
                                </span>
                                <br>
                                <span style="font-size:26px">
                                    <strong>
                                        <span style="font-family:georgia,serif">
                                            <span style="color:#3c465f"><?= $totalSpin ?></span>
                                        </span>
                                    </strong>
                                    <span style="font-family:georgia,serif">
                                        <span style="color:#3c465f"><?= $popupText2?></span>
                                    </span>
                                </span>
                            </h1>
                            <p></p>
                            <div id="popup-footer">
                                <a href="#" class="btn close_popup animated infinite pulse">
                                    <i class="fa fa-arrow-right"></i><?= $popupButton ?>
                                </a>
                            </div>
                            <?php
                                if(!empty($disclaimer)) {
                                ?>
                                    <p class="disclaimer-txt"><?=$disclaimer?></p>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mfp-preloader">Loading...</div>
        </div>
    </div>
    <div id="wrapper">
        <div class="topbar red">
            <div class="content clearfix">
                <h1 style="margin-top: 0px 50px;">     
                    <?php
                        if (!empty($headerlogo)) {
                        ?>
                            <img src="<?php echo base_url(); ?>images/wheelgame/<?= $headerlogo ?>"
                                style="max-width: <?=(isset($headerlogoSize) && !empty($headerlogoSize)) ? $headerlogoSize : '140px';?>; margin-top: 10px;"> 
                            <br/>
                        <?php
                        }
                    ?>            
                    <b>
                        <font class="headertext"><?= @$header?></font>
                    </b>
                </h1>                
            </div>
        </div>
        <div class="content <?php echo ($isBlockLeft)? 'block-left' : ''?>">
            <div class="inner-content clearfix">
                <div class="half">
                    <div class="container">
                        <div class="roulette">
                            <img src="<?php echo base_url(); ?>images/wheelgame/<?= $image ?>"
                                style="display: block; width: 100%; height: auto;">
                        </div>
                        <div class="spinner">
                            <img src="<?php echo base_url(); ?>images/wheelgame/<?= $pinImage ?>">
                        </div>                        
                    </div>
                </div>
                <div class="half">
                    <div id="popup">
                        <div class="rounded red" style="background-color:<?=(isset($bgBalancePopup) && !empty($bgBalancePopup)) ? $bgBalancePopup : '';?>">
                            <h1 style="color: #fff;"><?= $balanceTitle ?>: <span class="cash"></span></h1>
                        </div>
                        <div class="rounded grey" style="background-color:<?=(isset($bgBalancePopup) && !empty($bgBalancePopup)) ? $bgBalancePopup : '';?>">
                            <h2 style="color: #fff;"><?= $spinLeftLabel?> : <span class="spins"><?= $totalSpin ?></span></h2>
                        </div>
                        <br>
                        <h1 class="price" style="font-size:<?=(isset($priceFontSize) && !empty($priceFontSize)) ? $priceFontSize : '';?>"></h1>
                        <br>
                        <p class="spinner_button" style="text-align: center;">
                            <i style="color: #fff;" class="fa fa-arrow-right fa-2x rock"></i> 
                            <a href="#" class="btn"><?= $spinHereLabel ?><i class="fa fa-refresh fa-spin"></i></a>
                        </p>
                        <?php
                            if(!empty($disclaimer)) {
                            ?>
                                <p class="disclaimer-txt"><?=$disclaimer?></p>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mfp-hide"></div>
    <div id="modal_final" class="mfp-hide clearfix red" style="text-align: center;background-color: <?=(isset($winnerBG) ? $winnerBG : '')?>">
        <?php 
        if(isset($fullWinnerLabel) && !empty($fullWinnerLabel)){
        ?>
            <h3 class="h2Modal maven spin-label"><?= @$fullWinnerLabel ?> </h3>
        <?php }?>
        <h3 class="h2Modal maven capital spin-label blink_me">CLAIM UP TO <?= $priceTagLabel?> <?= ($isPrefix) ? $currency.$price : $price ." ".$currency?> <?= !empty($freeSpinLabel)?"+ ".$spin." ".$freeSpinLabel:'' ?></h3>
        <form id="submitUserForm" action="" method="POST" name="submitUserForm" novalidate="novalidate">
                <input type="hidden" name="game" value="1" />
                <div class="form-input form-input-with-icon">
                        <label for="name" id="icon_user" class="icon"></label>
                        <input id="name" type="text" class="input" name="name" placeholder="Name*">
                </div>
                <div class="form-input form-input-with-icon">
                        <label for="email" id="icon_email" class="icon"></label>
                        <input id="email" type="email" name="email" class="input" placeholder="Email*">
                                            
                </div>
                <div class="form-input form-input-with-icon" style="display:none">
                        <label for="phone" id="icon_phone" class="icon"></label>
                        <input id="phone" type="text" name="phone" class="input" placeholder="Number">
                </div>   
                <div class="formSubmitHolder">
                        <button id="userFormSubmit" type="submit" class="formBtn btn gotop animated infinite pulse">
                                <i class="fa fa-arrow-right"></i>
                        <?= $createAccountButton ?></button>
                </div>
        </form>
        <?php        
        if(!empty($timerLabel)) {
        ?>
            <div class="timer-main"><?=$timerLabel;?> <span id="timer"></span></div>
        <?php
        }
        ?>
        <?php
            if(!empty($disclaimer)) {
            ?>
                <p class="disclaimer-txt"><?=$disclaimer?></p>
            <?php
            }
        ?>
    </div>
    <script src="<?php echo base_url(); ?>js/wheelgame/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/wheelgame/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/wheelgame/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/wheelgame/jq_fortune4.js"></script>
    <script src="<?php echo base_url(); ?>js/wheelgame/jquery.validate.min.js"></script>    
    <script>    

    var startAmount = "<?= isset($startAmount)?$startAmount:0 ?>";
    var currency = "<?= isset($currency)?$currency:"$" ?>";
    var spinAgainLabel1 = "<?= isset($spinAgainLabel1)?$spinAgainLabel1:"SPIN IT AGAIN" ?>";
    var spinAgainLabel2 = "<?= isset($spinAgainLabel2)?$spinAgainLabel2:"HAVE ANOTHER GO" ?>";
    var spinAgainLabel3 = "<?= isset($spinAgainLabel3)?$spinAgainLabel3:"SPIN IT AGAIN" ?>";
    var spinAgainLabel4 = "<?= isset($spinAgainLabel4)?$spinAgainLabel4:"TRY AGAIN" ?>";
    var isPrefix = "<?= isset($isPrefix)?$isPrefix:1 ?>";
    var appNameIndex = 0;
    
    var prices = [{
        name: "<?= $wheel[0]['name']?>",
        price: <?= $wheel[0]['price']?>
    }, {
        name: "<?= $wheel[1]['name']?>",
        price: -parseInt(<?= $wheel[1]['price']?>)
    }, {
        name: "<?= $wheel[2]['name']?>",
        price: <?= $wheel[2]['price']?>
    }, {
        name: "<?= $wheel[3]['name']?>",
        price: <?= $wheel[3]['price']?>
    }, {
        name: "<?= $wheel[4]['name']?>",
        price: <?= $wheel[4]['price']?>
    }, {
        name: "<?= $wheel[5]['name']?>",  
        price: parseInt(<?= $wheel[5]['price']?>)
    }, {
        name: "<?= $wheel[6]['name']?>",       
        price: parseInt(<?= $wheel[6]['price']?>)
    }, {
        name: "<?= $wheel[7]['name']?>",
        price: -parseInt(<?= $wheel[7]['price']?>)
    }];

    var spins = 5; // total number of spins
    var cash = parseInt(startAmount); // start amount
    var count = 1; // click counter
    // @TODO : switch to var count = 1 if want to appear faster
    var $spinner = $('.roulette').fortune({
        prices: prices,
        duration: 3000, // The amount of milliseconds the roulette to spin
        separation: 2, // The separation between each roulette price
        min_spins: 3, // The minimum number of spins
        max_spins: 6 // The maximum number of spins
    });
    $('.cash').text((isPrefix == 1)?currency+startAmount:startAmount+' '+currency);
    $('.spins').text(spins);

    function transition(prices) {
        $('#popup').addClass('show');
        setTimeout(function () {
            $('.cash').addClass('swoosh').text((isPrefix == 1)?currency+cash:cash +" "+ currency);            
        }, 300);
        setTimeout(function () {
            $('.spins').addClass('swoosh').text(spins);
        }, 600);
        setTimeout(function () {
            $('.price').addClass('swoosh').text(prices.name);
        }, 900);
        if (prices.price != 588) { // final shot, don't show button anymore
            setTimeout(function () {
                $('.spinner_button').css('visibility', 'visible').addClass('swoosh');
            }, 1200);
        }
    }

    function showSignup() {
        console.log('showsignup');
        $.magnificPopup.open({
            items: {
                src: '#modal_final'
            },
            type: 'inline',
            mainClass: 'mfp-fade',
            closeOnContentClick: false,
            closeOnBgClick: false,
            showCloseBtn: false
        }, 0);
    }
        
    $(document).on('click', '.spinner_button a', function (e) {
        e.preventDefault();
        $('.price').html('&nbsp;').removeClass('swoosh');
        $('.cash, .spins, .spinner_button').removeClass('swoosh');
        $('.spinner_button').css('visibility', 'hidden');
        $('#popup').removeClass('show');
        switch (count) {
            case 1:
                $spinner.spin(7).done(function (prices) {
                    cash = cash + prices.price;
                    spins--;
                    $('.spinner_button a').html(
                        spinAgainLabel1 + ' <i class="fa fa-refresh fa-spin"></i>');
                    transition(prices);
                });
                break;
            case 2:
                $spinner.spin(0).done(function (prices) {
                    $('.spinner_button a').html(
                        spinAgainLabel2 + ' <i class="fa fa-refresh fa-spin"></i>');
                    cash = cash + prices.price;
                    spins--;
                    transition(prices);
                });
                break;
            case 3:
                $spinner.spin(1).done(function (prices) {
                    $('.spinner_button a').html(
                        spinAgainLabel3 + ' <i class="fa fa-refresh fa-spin"></i>');
                    cash = cash + prices.price;
                    spins--;
                    transition(prices);
                });
                break;
            case 4:
                $spinner.spin(6).done(function (prices) {
                    $('.spinner_button a').html(spinAgainLabel4 +' <i class="fa fa-refresh fa-spin"></i>');
                    cash = cash + prices.price;
                    spins--;
                    transition(prices);
                });
                break;
            default:
                $spinner.spin(5).done(function (prices) {
                    // cash = prices.price;
                    cash = '<?= $price ?>';
                    spins--;
                    var audio = document.getElementById('audio');

                    audio.play();
                    $('.cash').text(cash).parent().addClass('blink');
                    $('.message1').fadeIn();
                    $('.spinner_button').hide();
                    transition(prices);
                    setTimeout(function () {
                        $.magnificPopup.open({
                            items: {
                                src: '#modal_final'
                            },
                            type: 'inline',
                            mainClass: 'mfp-fade',
                            closeOnContentClick: false,
                            closeOnBgClick: false,
                            showCloseBtn: false
                        }, 0);
                    }, 4300);
                });
                break;
        }
        count++;
    });

    $.magnificPopup.open({
        items: {
            src: '#modal'
        },
        type: 'inline',
        mainClass: 'mfp-fade',
        closeOnContentClick: false,
        closeOnBgClick: false,
        showCloseBtn: false
    }, 0);

    $(document).on("click", ".close_popup", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
        $('#popup').addClass('show');
    });
        
        
    $("form[name='submitUserForm']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                }
            },
            // Specify validation error messages
            messages: {
                name: {
                    required: "Name is required",
                    minlength: "Minimum 2 characters"
                },
                email: {
                    required: "Email is required",
                }
            }
        });

        $('#submitUserForm').on("submit", function(e) {
            e.preventDefault();
            if ($("form[name='submitUserForm']").valid()) {
               
                var userDetails = $(this).serializeArray();

                $.ajax({
                    type: 'post',
                    url : BASE_URL + 'home/sendLeadToLiveDelivery',
                    data : userDetails,
                    success : function(campaign){
                        console.log(campaign);
                        window.location.assign(campaign);                    
                    }
                });

            } else {
                console.log('FALSE');
            }
        }); 
    
    </script>
    
    <script>       

        // Timer clock - DAB 
        function countdown( elementName, minutes, seconds ){
            var element, endTime, hours, mins, msLeft, time;
            function twoDigits( n )
            {
                return (n <= 9 ? "0" + n : n);
            }

            function updateTimer()
            {
                msLeft = endTime - (+new Date);
                if ( msLeft < 1000 ) {
                    element.innerHTML = "Time is up!";
                } else {
                    time = new Date( msLeft );
                    hours = time.getUTCHours();
                    mins = time.getUTCMinutes();
                    element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                    setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
                }
            }

            element = document.getElementById( elementName );
            endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
            updateTimer();
        }
        countdown( "timer", 10, 0 );


    </script>
</body>
</html>