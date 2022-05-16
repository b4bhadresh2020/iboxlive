<!DOCTYPE html>
<html lang="en_US" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Win the Jackpot!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/boxgame/reset.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>css/boxgame/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>css/boxgame/media.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>js/boxgame/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/boxgame/magnific-popup.min.css" type="text/css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/boxgame/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/boxgame/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>js/boxgame/jquery.validate.min.js"></script>
    <style>
        body {
            background-color: <?= @$bodyBgColor ?>;
            color: <?= @$bodyFontColor ?>
        }

        .chests {
            background: url(<?= base_url() . 'images/boxgame/' . $backgroundImage ?>) no-repeat bottom center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
        }

        .footer {
            background-color: <?= @$footerBgColor ?>;
        }

        .copyright__text {
            color: <?= @$copyrightTextFontColor ?>;
        }

        .popup__content,
        .popup__content:before {
            background: url(<?= base_url() . 'images/boxgame/' . $popupBGImage ?>) no-repeat center center /cover;
        }

        .popup__button {
            background: unset;
            background-color: <?= @$popupButtonBgColor ?>;
            color: <?= @$popupButtonFontColor ?>;
            margin-top: 10px;
        }

        .chests__content li.empty:after {
            background-image: url(<?= '../../images/boxgame/' . $gameImageAfterTurn1 ?>);
        }

        .chests__content li.bonus:after {
            background-image: url(<?= '../../images/boxgame/' . $gameImageAfterTurn2 ?>);
        }

        .chests__content li.superbonus:after {
            background-image: url(<?= '../../images/boxgame/' . $gameImageAfterTurn3 ?>);
        }

        .popup__title,.popup__title1,.popup__text,.popup__text1,.popup__text2,.bonus,.up-to,.h2Modal,.capital,.expire__text{
            color:<?= @$popupFontColor ?> !important;
        }

        .disclaimer-txt {
            margin-top: 10px;
            font-size: 12px;
            color: #ffffff;
            text-align: center;
            position: relative;
        }

    </style>
</head>

<body>
    <header class="header">
        <?php if (!empty($headerImage)) { ?>
            <a href="#" class="header__logo exit-button">
                <img style="max-width:180px; margin-top: 10px;" src="<?php echo base_url(); ?>images/boxgame/<?= $headerImage ?>">
            </a>
        <?php } ?>
    </header>
    <main class="chests">
        <audio id="chest-open" preload="">
            <source src="<?php echo base_url(); ?>sound/boxgame/chest-open.mp3" type="audio/mpeg">
            <!-- <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/chest-open.ogg" type="audio/ogg; codecs=vorbis">
            <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/chest-open.wav" type="audio/wav"> -->
        </audio>
        <div>
            <h3 style="color:white;    margin-bottom: 1em;display: none;" id="valiForHolder">
                <span style="    background: #ffffff63;padding: 1em;border-radius: 10px;">
                    Valid for: <span id="validForDetails"></span>
                </span>
            </h3>
        </div>
        <section class="chests__content">
            <ul>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
            </ul>
            <ul>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
            </ul>
            <ul>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
                <li class="item closed">
                    <img src="<?php echo base_url(); ?>images/boxgame/<?= $gameImage ?>" class="chest" alt="">
                </li>
            </ul>
        </section>
    </main>
    <?php
        if(isset($disclaimer) && !empty($disclaimer)) {
        ?>
            <p class="disclaimer-txt"><?=$disclaimer?></p>
        <?php
        }
    ?>
    <article class="article">
        <h1><?= @$sectionOneTitle; ?></h1>
        <p>
        </p>
    </article>
    <footer class="footer">
        <section class="footer__copyright">
            <p class="copyright__text">
                <br>
                <?= @$sectionTwoTitle; ?>
            </p>
            <img class="copyright__logo" src="<?php echo base_url(); ?>images/boxgame/<?= $detailImageOne ?>" alt="">
            <img class="copyright__logo" src="<?php echo base_url(); ?>images/boxgame/<?= $detailImageTwo ?>" alt="">
            <img class="copyright__logo" src="<?php echo base_url(); ?>images/boxgame/<?= $detailImageThree ?>" alt="">
        </section>
    </footer>
    <!-- Popup -->
    <section class="popup welcome-popup active">
        <div class="popup-aligner"></div>
        <section class="popup__content">
            <?php if (!empty($welcomePopupTitle)) { ?>
                <h2 class="popup__title"><?= $welcomePopupTitle ?></h2>
            <?php }
            if (!empty($welcomePopupDesc)) { ?>
                <p class="popup__text"><?= $welcomePopupDesc ?></p>
            <?php } ?>
            <button class="button popup__button"><?= @$welcomePopupButtonText ?></button>
            <?php
                if(isset($disclaimer) && !empty($disclaimer)) {
                ?>
                    <p class="disclaimer-txt"><?=$disclaimer?></p>
                <?php
                }
            ?>
        </section>
    </section>
    <!-- Popup -->
    <section class="popup empty-popup">
        <div class="popup-aligner"></div>
        <section class="popup__content">
            <audio id="fanfare0" preload="">
                <source src="<?php echo base_url(); ?>sound/boxgame/fanfare-0.mp3" type="audio/mpeg">
                <!-- <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-0.ogg" type="audio/ogg; codecs=vorbis">
                <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-0.wav" type="audio/wav"> -->
            </audio>
            <?php
            if (!empty($emptyPopupTitle)) { ?>
                <h2 class="popup__title"><?= $emptyPopupTitle ?></h2>
            <?php }
            if (!empty($emptyPopupSubTitle)) { ?>
                <p class="popup__text"><span class="bonus"><?= $emptyPopupSubTitle ?></span> <span class="up-to">2</span>!</p>
            <?php } ?>
            <button class="button popup__button "><?= $emptyPopupButtonText ?></button>
            <?php
                if(isset($disclaimer) && !empty($disclaimer)) {
                ?>
                    <p class="disclaimer-txt"><?=$disclaimer?></p>
                <?php
                }
            ?>
        </section>
    </section>
    <!-- Popup -->
    <section class="popup bonus-popup">
        <div class="popup-aligner"></div>
        <section class="popup__content">
            <audio id="fanfare1" preload="">
                <source src="<?php echo base_url(); ?>sound/boxgame/fanfare-1.mp3" type="audio/mpeg">
                <!-- <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-1.ogg" type="audio/ogg; codecs=vorbis">
                <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-1.wav" type="audio/wav"> -->
            </audio>
            <img class="popup__image" src="<?php echo base_url(); ?>images/boxgame/popup-decor.png" alt="">
            <?php if (!empty($bonusPopupTitle)) { ?>
                <h2 class="popup__title"><?= $bonusPopupTitle ?>!</h2>
            <?php } ?>
            <p class="popup__text">
                <?php if (!empty($bonusPopupDesc)) {
                    echo $bonusPopupDesc;
                } ?>
                Chances left: 1
            </p>
            <button class="button popup__button"><?= $bonusPopupButtonText ?></button>
            <?php
                if(isset($disclaimer) && !empty($disclaimer)) {
                ?>
                    <p class="disclaimer-txt"><?=$disclaimer?></p>
                <?php
                }
            ?>
        </section>
    </section>
    <!-- Popup -->
    <section class="superbonus-popup">
        <div class="popup-aligner"></div>
        <section>
            <audio id="fanfare2" preload="">
                <source src="<?php echo base_url(); ?>sound/boxgame/fanfare-2.mp3" type="audio/mpeg">
                <!-- <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-2.ogg" type="audio/ogg; codecs=vorbis">
                <source src="https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/images/fanfare-2.wav" type="audio/wav"> -->
            </audio>
            <div class="mfp-hide"></div>

            <div id="modal_final" class="popup__content mfp-hide clearfix" style="text-align: center;">
                <div class="rounded maven noLeftPadding noRightPadding">
                    <?php if (!empty($finalPopupTitle)) { ?>
                        <h2 class="popup__title1"><?= $finalPopupTitle ?></h2>
                    <?php } ?>
                    <?php if (!empty($finalPopupDesc)) { ?>
                        <h5 class="popup__text1"><?= $finalPopupDesc ?></h5>
                    <?php } ?>
                    <?php if (!empty($finalPopupDetail)) { ?>
                        <h3 class="h2Modal maven capital popup__text2"><?= $finalPopupDetail ?></h3>
                    <?php } ?>
                    <div>
                        <style>
                            @keyframes animatedBackground {
                                from {
                                    background-position: 0 0;
                                }

                                to {
                                    background-position: 0 100%;
                                }
                            }

                            #animate-area {
                                width: 365px;
                                height: 400px;
                                background-image: url(../../../../../www.javwall.net/uploads/20201129072842_spinman-fly.png);
                                background-position: center;
                                background-repeat: no-repeat;
                                position: absolute;
                                animation: animatedBackground 3s linear infinite alternate;
                                animation-timing-function: ease-in-out;
                            }

                            h3 {
                                font-size: 16px !important;
                            }

                            .maven {
                                font-family: 'Maven Pro', sans-serif;
                            }

                            .h2Modal {
                                color: #fff;
                                font-weight: 300;
                                padding-top: 10px;
                                font-family: 20px !important;

                            }

                            .capital {
                                text-transform: uppercase;
                                color: #fff;
                            }

                            #modal_final h1,
                            #popup h1 {
                                padding-top: 20px;
                                color: #ffffff;
                                font-family: Maven Pro !important;
                                line-height: 30px !important
                            }



                            #modal_final .red {
                                /* background: url(https://s3-eu-central-1.amazonaws.com/igamingcloudstr/images/Pokiebanner.jpg); */
                                background-size: cover;
                                min-height: 250px;
                                background-position: center;


                            }

                            #modal_final {

                                position: fixed;
                                top: 50%;
                                left: 50%;
                                /* bring your own prefixes */
                                transform: translate(-50%, -50%);

                            }

                            #modal_final .blink {
                                display: none;
                            }

                            form .error {
                                color: #ff0000;
                                font-size: 0.8em;
                            }


                            .popup__title1 {
                                display: block;
                                position: relative;
                                font-size: 26px;
                                line-height: 30px;
                                color: #fff;
                                margin: 0px;

                            }

                            .popup__text1 {
                                display: block;
                                position: relative;
                                font-size: 14px;
                                line-height: 16px;
                                margin: 5px;
                                color: white;
                                margin: 1em 0 2em 0;
                            }

                            .popup__text2 {
                                font-weight: 900;
                                background: #ffffff1f;
                                padding: 1em 0;
                                margin-bottom: 2em;
                                border-radius: 10px;
                                display: block;
                                position: relative;

                            }

                            .expire__text {
                                color: white;
                                margin: 1em 0 0 0;
                                padding: 0;
                                font-weight: 200;
                                display: block;
                                position: relative;
                            }

                            .formBtn {
                                display: inline-block;
                                position: relative;
                                color: #fff;
                                width: 100%;
                                background: linear-gradient(-135deg, <?=$popupButtonBgColor?> 0, <?=$popupButtonBgColor?> 100%);
                                border-radius: 20px !important;
                                font-family: Maven Pro !important;
                                font-size: 26px;
                                font-weight: bold;
                                line-height: 32px;
                                text-decoration: none;
                                text-align: center;
                                display: inline-block;
                                padding: 10px;
                                border: none;

                            }

                            @media screen and (min-width:960px) {
                                #modal_final img {
                                    width: 40% !important;
                                }

                            }

                            @media screen and (max-width:959px) {
                                #modal_final img {
                                    width: 40% !important;
                                }

                                #modal_final h1 #popup h1 {
                                    line-height: 0px !important;
                                    padding-top: 0px;

                                }


                            }

                            @media screen and (max-width: 661px) {
                                #modal_final img {
                                    width: 40% !important;
                                }
                            }



                            @media screen and (max-width: 590px) {
                                #modal_final img {
                                    width: 40% !important;
                                }



                                #modal_final h1 #popup h1 {
                                    line-height: 0px !important;
                                    padding-top: 0px;

                                }

                                #modal_final h1 {
                                    font-size: 28px !important;
                                }

                                h3 {
                                    font-size: 14px !important;
                                }

                                .formBtn {
                                    width: 60%;

                                    font-size: 20px;
                                    line-height: 26px;

                                }

                                .popup__title1 {
                                    display: block;
                                    position: relative;
                                    font-size: 20px;
                                    line-height: 25px;
                                    color: #fff;
                                    margin: 0px;

                                }

                                .popup__text1 {
                                    display: block;
                                    position: relative;
                                    font-size: 16px;
                                    line-height: 18px;
                                    margin: 5px;
                                }

                                .popup__text2 {
                                    font-weight: 900;
                                    background: #ffffff1f;
                                    padding: .7em 0;
                                    margin-bottom: .5em;
                                    border-radius: 10px;
                                    display: block;
                                    position: relative;

                                }

                                .expire__text {
                                    color: white;
                                    margin: .7em 0 0 0;
                                    padding: 0;
                                    font-weight: 100;
                                    display: block;
                                    position: relative;
                                }

                            }


                            @media screen and (max-width: 527px) {
                                #modal_final img {
                                    width: 40% !important;
                                }
                            }

                            @media screen and (max-width: 449px) {
                                #modal_final img {
                                    width: 40% !important;
                                }
                            }

                            @media screen and (max-width: 380px) {
                                .formBtn {
                                    width: 60%;
                                    height: 85%;
                                    font-size: 12px;
                                    line-height: 16px;

                                }

                                .form-input {
                                    height: 40px;


                                }


                                .popup__title1 {
                                    display: block;
                                    position: relative;
                                    font-size: 16px;
                                    line-height: 18px;
                                    color: #fff;
                                    padding-top: 20px;

                                }

                                .popup__text1 {
                                    display: block;
                                    position: relative;
                                    font-size: 12px;
                                    line-height: 14px;
                                    margin: 5px;
                                }

                                .expire__text {
                                    color: white;
                                    margin: .7em 0 0 0;
                                    padding: 0;
                                    font-weight: 100;
                                    display: block;
                                    position: relative;
                                }
                            }

                            .form-input {
                                background: #fff;
                                border: none;
                                font-size: 1.4em;
                                padding: .9em .7em;
                                position: relative;
                                border-radius: 8px;
                                margin-bottom: 10px;


                            }

                            .form-input .input {
                                background: none;
                                border: none;
                                width: 100%;
                            }

                            .form-input-with-icon .icon {
                                left: 0;
                                margin: .65em;
                                position: absolute;
                                top: 0;
                            }

                            .form-input-with-icon .input {
                                padding-left: 2em;
                            }

                            .fw600 {
                                font-weight: 600;
                            }

                            #icon_user {
                                background-image: url(https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/spinner_files/user_icon.png);
                                background-repeat: no-repeat;
                                width: 36px;
                                height: 36px;
                                background-size: 80%;
                                display: block;
                                background-position: 6px 4px;
                            }

                            #icon_phone {
                                background-image: url(https://www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/spinner_files/phone_icon.png);
                                background-repeat: no-repeat;
                                width: 36px;
                                height: 36px;
                                background-size: 80%;
                                display: block;
                                background-position: 6px 4px;
                            }

                            button,
                            input:focus {
                                outline: none;
                            }


                            #submitUserForm {
                                margin-top: 6%;
                                margin-left: 10px;
                                margin-right: 10px;
                            }
                        </style>
                        <a href="<?= $url ?>" id="" type="" class="formBtn exit-button btn gotop animated infinite pulse">
                            <i class="fa fa-arrow-right"></i>
                            <?= $finalPopupButtonText ?>
                        </a>
                        <br>
                        <h4 class="expire__text">This bonus expires in <span id="time"></span></h4>
                        <h4 class="showError"></h4>
                        <?php
                            if(isset($disclaimer) && !empty($disclaimer)) {
                            ?>
                                <p class="disclaimer-txt"><?=$disclaimer?></p>
                            <?php
                            }
                        ?>
                    </div>
                </div>
        </section>
    </section>
    <br>

    <script src="<?php echo base_url(); ?>js/boxgame/main.js"></script>


    <script type="application/javascript">
        function showSignup() {
            // console.log('showsignup');

            setTimeout(function() {
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
            }, 1000);
        }

        //@action   countdown timer
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function() {
            var fiveMinutes = 60 * 10.5,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };

        //@action   check does url contain all params
        //firstname
        //zipcode
        //city
        //phone
        function checkUrlParams() {
            var vFname = '';
            var vZipcode = '';
            var vCity = '';
            var vPhone = '';
            var vParams = {};
            var vFnameTrue = false;
            var vZipcodeTrue = false;
            var vCityTrue = false;
            var vPhoneTrue = false;
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            //console.log(format.test("My@string-with(some%text)"));
            //console.log(format.test("My string with spaces"));
            //console.log(format.test("MyStringContainingNoSpecialChars}}"));
            // on localhost is search
            window.parent.location.search.slice(1).split('&').forEach(elm => {
                if (elm === '') return;
                var spl = elm.split('=');
                const d = decodeURIComponent;
                vParams[d(spl[0])] = (spl.length >= 2 ? d(spl[1]) : true);
            });

            var getQueryString = window.parent.location.search;
            if (getQueryString.indexOf("firstname") > -1) {
                vFname = vParams.firstname || '';
                // console.log('vFname', vFname);
                if (vFname !== '' && vFname !== undefined) {

                    vFnameTrue = true;
                }

                console.log('exists')
            }
            if (getQueryString.indexOf("zipcode") > -1) {
                vZipcode = vParams.zipcode || '';
                if (vZipcode !== '' && vZipcode !== undefined) {

                    vZipcodeTrue = true;
                }
            }
            if (getQueryString.indexOf("city") > -1) {
                vCity = vParams.city || '';
                if (vCity !== '' && vCity !== undefined) {
                    vCityTrue = true;
                }

                console.log('exists')
            }
            if (getQueryString.indexOf("phone") > -1) {
                vPhone = vParams.phone || '';
                if (vPhone !== '' && vPhone !== undefined) {

                    vPhoneTrue = true;

                } else {
                    console.log('EMPTY')
                }

                console.log('exists')
            }
            var vFinal = {};
            //console.log('v params:', vFnameTrue, vZipcode, vCity, vPhone);
            if (vFnameTrue) {
                if (!!~vFname.indexOf("{")) {
                    vFname = '';
                } else {
                    vFinal['vFname'] = vFname
                }
            }
            if (vZipcodeTrue) {
                if (!!~vZipcode.indexOf("{")) {
                    vZipcode = '';
                } else {
                    vFinal['vZipcode'] = vZipcode
                }

            }
            if (vCityTrue) {
                if (!!~vCity.indexOf("{")) {
                    vCity = '';
                } else {
                    vFinal['vCity'] = vCity
                }
            }
            if (vPhoneTrue) {
                if (!!~vPhone.indexOf("{")) {
                    vPhone = '';
                } else {
                    vFinal['vPhone'] = vPhone
                }
            }

            if (!jQuery.isEmptyObject(vFinal)) {
                $('#valiForHolder').show();
                $('#validForDetails').html(vFname + ' ' + vZipcode + ' ' + vCity + ' ' + vPhone);
                $('#vFFname').html(vFname);
            }
        }


        checkUrlParams();

        // @action      Get Geo User Detail
        // @info        IP etc...
        //
        var geoUser = {
            country: '',
            city: '',
            zip: ''
        }

        function geoUserData() {
            var geoOne = 'https://pro.ip-api.com/json?key=hNUkHDYnFUMGV80';
            var geoTwo = 'https://api.ipregistry.co/?key=qz9cojuq54a1g7';
            var geoThree = 'https://json.geoiplookup.io/';
            try {
                $.getJSON(geoOne, function(data) {
                    //On Success do something.
                    // console.log('RESP GEO', data);
                    geoUser.country = data.countryCode || '';
                    geoUser.city = data.city || '';
                    geoUser.zip = data.zip || '';
                }).fail(function(jqXHR) {
                    if (jqXHR.status == 404) {
                        $.getJSON(geoTwo, function(data) {
                            //On Success do something.
                            // console.log('RESP GEO 2', data);
                            geoUser.country = data.location.country.code || '';
                            geoUser.city = data.location.city || '';
                            geoUser.zip = data.location.postal || '';
                        }).fail(function(jqXHR) {
                            if (jqXHR.status == 404) {
                                $.getJSON(geoThree, function(data) {
                                    //On Success do something.
                                    //console.log('RESP GEO 3', data);
                                    geoUser.country = data.country_code || '';
                                    geoUser.city = data.city || '';
                                    geoUser.zip = data.postal_code || '';
                                }).fail(function(jqXHR) {
                                    if (jqXHR.status == 404) {
                                        alert("404 Not Found");
                                    } else {
                                        alert("Other non-handled error type");
                                    }
                                });
                            } else {
                                $.getJSON(geoThree, function(data) {
                                    //On Success do something.
                                    //console.log('RESP GEO 3', data);
                                    geoUser.country = data.country_code || '';
                                    geoUser.city = data.city || '';
                                    geoUser.zip = data.postal_code || '';
                                }).fail(function(jqXHR) {
                                    if (jqXHR.status == 404) {
                                        alert("404 Not Found");
                                    } else {
                                        alert("Other non-handled error type");
                                    }
                                });
                            }
                        });
                    } else {
                        $.getJSON(geoTwo, function(data) {
                            //On Success do something.
                            // console.log('RESP GEO 2', data);
                            geoUser.country = data.location.country.code || '';
                            geoUser.city = data.location.city || '';
                            geoUser.zip = data.location.postal || '';
                        }).fail(function(jqXHR) {
                            if (jqXHR.status == 404) {
                                $.getJSON(geoThree, function(data) {
                                    //On Success do something.
                                    // console.log('RESP GEO 3', data);
                                    geoUser.country = data.country_code || '';
                                    geoUser.city = data.city || '';
                                    geoUser.zip = data.postal_code || '';
                                }).fail(function(jqXHR) {
                                    if (jqXHR.status == 404) {
                                        alert("404 Not Found");
                                    } else {
                                        alert("Other non-handled error type");
                                    }
                                });
                            } else {
                                $.getJSON(geoThree, function(data) {
                                    //On Success do something.
                                    // console.log('RESP GEO 3', data);
                                    geoUser.country = data.country_code || '';
                                    geoUser.city = data.city || '';
                                    geoUser.zip = data.postal_code || '';
                                }).fail(function(jqXHR) {
                                    if (jqXHR.status == 404) {
                                        alert("404 Not Found");
                                    } else {
                                        alert("Other non-handled error type");
                                    }
                                });
                            }
                        });
                    }
                });
            } catch (error) {
                console.log('404 ERR');
            }
            // console.log(geoUser);
        }
        geoUserData();
        // https://json.geoiplookup.io/' 10k per hour
        // http://ip-api.com/json/ 45 per minute
        // ipregistry ::keys  qz9cojuq54a1g7 //default : xk71h7htd9lbeo
        // https://api.ipregistry.co/?key=qz9cojuq54a1g7 -- 100
        // @action      Submit User Detail to DB API
        // @info        Phone Name
        // Wait for the DOM to be ready

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
                phone: {
                    required: true,
                    minlength: 6
                }
            },
            // Specify validation error messages
            messages: {
                name: {
                    required: "Name is required",
                    minlength: "Minimum 2 characters"
                },
                phone: {
                    required: "Phone is required",
                    minlength: "Minimum 6 characters"
                },
            }
        });

        $('#submitUserForm').on("submit", function(e) {
            e.preventDefault();
            if ($("form[name='submitUserForm']").valid()) {
                console.log('TRUE');
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                var origin = window.location.origin;
                //  get exit url value
                var exitUri = $("#theExitUrl").attr('href') || '';
                var pid = $('.product-url').attr('pid') || '';
                console.log(pid);
                //var userDetails = $(this).serializeArray();
                //  get user details
                var userNameDb = $('input[name="name"]').val();
                var userPhoneDb = $('input[name="phone"]').val();
                // var cmp = 0;
                // // build object from url params - cmp
                // var queryDict = {}
                // location.search.substr(1).split("&").forEach(function (item) {
                //     queryDict[item.split("=")[0]] = item.split("=")[1]
                // })
                // //check does cmp param exists in the url
                // if (queryDict.hasOwnProperty('cmp')) {
                //     //check does cmp param exists and assign the value
                //     cmp = queryDict.cmp;
                // }
                var data = {
                    "name": userNameDb,
                    "phone": userPhoneDb,
                    "domain": window.parent.location.href || window.parent.location.origin,
                    "company": '1',
                    'country': geoUser.country,
                    'city': geoUser.city,
                    'zip': geoUser.zip,
                }

            } else {
                console.log('FALSE');
            }
        });



        // Create a new script element
        var prelander_script = document.createElement('script');

        // Set the script element `src`
        prelander_script.src = parent.path_prefix + '/prelanders/prelander.js';

        //inject the new script after this scritp tag
        document.body.appendChild(prelander_script);
    </script>

</body>


<!-- Mirrored from www.yodaystar.com/prelanders/jld1/leadgen/ca-spinaway-chest-noleadgen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 10:32:32 GMT -->

</html>