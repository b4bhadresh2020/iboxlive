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
            <?php 
            if(file_exists(base_url() . 'images/boxgame/' . $popupBGImage)){
            ?>
                background: url(<?= base_url() . 'images/boxgame/' . $popupBGImage ?>) no-repeat center center /cover;
            <?php } else { ?>
                background: <?= $popupBGColor?>;
            <?php } ?>
        }

        .popup__button {
            background: unset;
            background-color: <?= @$popupButtonBgColor ?>;
            color: <?= @$popupButtonFontColor ?>;
            margin-top: 10px;
        }

        .chests__content li.empty:after {
            background-image: url("<?php echo base_url(); ?>images/boxgame/<?= $gameImageAfterTurn1 ?>");
        }

        .chests__content li.bonus:after {
            background-image: url("<?php echo base_url(); ?>images/boxgame/<?= $gameImageAfterTurn2 ?>");
        }

        .chests__content li.superbonus:after {
            background-image: url("<?php echo base_url(); ?>images/boxgame/<?= $gameImageAfterTurn3 ?>");
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
    <main class="chests">
        <audio id="chest-open" preload="">
            <source src="<?php echo base_url(); ?>sound/boxgame/chest-open.mp3" type="audio/mpeg">            
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
                                background-size: cover;
                                min-height: 250px;
                                background-position: center;
                            }

                            #modal_final {
                                position: fixed;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                            }

                            #modal_final .blink {
                                display: none;
                            }

                            form .error {
                                color: #FFFFFF;
                                font-size: 15px;
                                margin-top: 5px;
                            }

                            .form-input {
                                background: #fff;
                                border: none;
                                font-size: 1.4em;
                                padding-left: 15px;
                                padding-top: 6px;
                                position: relative;
                                border-radius: 8px;
                                margin-bottom: 20px;
                                height:40px;
                                color: #000000;
                            }

                            .form-input .input {
                                background: none;
                                border: none;
                                width: 100%;
                            }

                            .form-input-with-icon .icon {
                                left: 0.15em;
                                position: absolute;
                                top: 0;
                            }

                            .form-input-with-icon .input {
                                padding-left: 2em;
                                color: #000000;
                                margin-top: 0;
                            }

                            .fw600 {
                                font-weight: 600;
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

                            #submitUserForm {
                                margin-top: 4%;
                                margin-left: 10px;
                                margin-right: 10px;
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
                                padding: .4em .7em;
                                position: relative;
                                border-radius: 8px;
                                margin-bottom: 20px;


                            }

                            .form-input .input {
                                background: none;
                                border: none;
                                width: 100%;
                            }

                            .form-input-with-icon .icon {
                                left: 0;
                                margin: .10em;
                                position: absolute;
                                top: 0;
                            }

                            .form-input-with-icon .input {
                                padding-left: 2em;
                                color: #000000;
                                margin-top: 0;
                            }

                            .fw600 {
                                font-weight: 600;
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
                      
                        <form id="submitUserForm" action="" method="POST" name="submitUserForm" novalidate="novalidate">

                                <div class="form-input form-input-with-icon">
                                        <label for="name" id="icon_user" class="icon"></label>
                                        <input id="name" type="text" class="input" name="name" placeholder="Name*">
                                </div>
                                <div class="form-input form-input-with-icon">
                                        <label for="email" id="icon_email" class="icon"></label>
                                        <input id="email" type="email" name="email" class="input" placeholder="Email*">
                                                            
                                </div>
                                <div class="form-input form-input-with-icon">
                                        <label for="phone" id="icon_phone" class="icon"></label>
                                        <input id="phone" type="text" name="phone" class="input" placeholder="Number">
                                </div>   
                                <div class="formSubmitHolder">
                                        <button id="userFormSubmit" type="submit" class="formBtn btn gotop animated infinite pulse">
                                                <i class="fa fa-arrow-right"></i>
                                                <?= $finalPopupButtonText ?></button>
                                </div>
                        </form>
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
        var BASE_URL = '<?php echo base_url(); ?>';

        function showSignup() {

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

</body>
</html>