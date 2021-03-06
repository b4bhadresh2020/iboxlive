<!DOCTYPE html>
<html lang="en">
    <?php 
    $domaindata = explode(".",$_SERVER['HTTP_HOST']);
    $sitename = ucwords(isset($domaindata[1])?$domaindata[1]:$domaindata[0]);
    ?>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $sitename; ?> - Improve your game!</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('website/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- fonts [start] -->
        <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Regular/SourceSansPro-Regular.css" />
        <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Bold/SourceSansPro-Bold.css" />
        <link rel="stylesheet" herf="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Semibold/SourceSansPro-Semibold.css" />
        <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/bootstrap-glyphicons.css" />
        <!-- fonts [end] -->

        <!-- custom CSS [start] -->
        <link rel="stylesheet" href="<?php echo base_url('website/'); ?>css/style.css">
        <!-- custom CSS [end] -->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#"><h3 style="font-weight:bolder"><?php echo $sitename; ?></h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Priser</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Annonc??rer</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Registrer</a>
                      </li> -->
                  </ul>
                </div>
            </div>
        </nav>

        <!-- orange background line -->
        <div class="orange-bg"></div>

        <!-- improve your game text -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="improve-yourgame-text">
                        <span class="improve-text">Improve</span>&nbsp;<span>your game!</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- click for demo section -->
        <div class="slider-div">
            <div class="container slider-innner-div">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="click-demo-text">
                            <?php echo ucfirst($sitename); ?> is a list of engagement building tools which
                            <span class="text-bold">increases conversions by tenfold.</span> We employs game design
                            elements to <span class="text-bold">improve user participation</span> in non-game context.
                            Using gamification in social media is one of the most effective
                            ways to <span class="text-bold">quickly build a large fan base</span> for your business.
                            It is also a smart way to re-activate your passive or even dead
                            email subscribers. <span class="text-bold">Turn your visitors into subscribers </span>
                            and start owning them.
                        </div>

                        <div class="click-demo-btn-cover">
                            <button class="btn btn-primary btn-lg">Click for demo <span class="glyphicon glyphicon-play"></span></button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="slider-wheel-demo-img" src="<?php echo base_url('website/'); ?>images/slider-img.jpg" />
                    </div>
                </div>
                <img class="slider-cartoon-img" src="<?php echo base_url('website/'); ?>images/slider_cartoon.png" />
            </div>
        </div>



        <!-- main content -->
        <div class="main-content-div">
            <img class="contain-cartoon-img" src="<?php echo base_url('website/'); ?>images/content_cartoon.png" />

            <div class="container main-content-inner-div">

                <div class="row main-content-questions">
                    <div class="col-lg-12">
                        <div class="text-1">
                            Did you know that??97% of visitors leave the average website without buying?
                        </div>
                        <div class="text-2">
                            <strong>Y</strong>ep... it???s the shocking truth??and the reality that ecommerce store owners face every day.
                        </div>
                    </div>
                </div>

                <div class="row block-div">
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">You decide who wins</div>
                            <img src="<?php echo base_url('website/'); ?>images/winner.png" style="width:46%;" />
                            <div class="info">Set the winning
                                ratio at any outcome
                                you want. From
                                everyone wins to
                            one person wins</div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">Personalization</div>
                            <img src="<?php echo base_url('website/'); ?>images/personalization.png" style="width:62%;" />
                            <div class="info">Greet the ingame
                                participants by
                                their names.
                            It???s very powerfull.</div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">Custom Made</div>
                            <img src="<?php echo base_url('website/'); ?>images/custom_made.png" />
                            <div class="info">We build the game
                                for you according
                                to your needs.
                                No reason for you
                                to learn yet another
                            system.</div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">GDPR Compliant</div>
                            <img src="<?php echo base_url('website/'); ?>images/gdpr-sparkcentral-logo-white.png" style="width:80%;" />
                            <div class="info">We are GDPR
                                complaint and
                            so will you be</div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">Synchronize</div>
                            <img src="<?php echo base_url('website/'); ?>images/synchronize.png" />
                            <div class="info">Synchronize your
                                mobile or email
                                subscribers auto-
                                matically and use
                                automations to
                                turn leads into
                                customers.
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                        <div class="block">
                            <div class="title">Optimized for
                            all platforms</div>
                            <img src="<?php echo base_url('website/'); ?>images/mobile_setting.png" />
                            <div class="info">Responsive for
                                phones, tablets
                            and desktops</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- accept text -->
        <div class="accept-div">
            <div class="container accept-inner-div">
                <div class="row ">
                    <div class="col-lg-8">
                        <div class="accept-text">This website uses cookies to improve our service and tailor advertising. By using this website, you agree to our use of cookies. <strong><a class="learn-more" href="javascript:;">See our Cookies Policy!</a> </strong></div>
                    </div>
                    <div class="col-lg-4 accept-btn-cover">
                        <a href="javascript:;" class="btn btn-info">OK, I understand!</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- game demo contain -->
        <div class="game-demo-contain">
            <div class="container game-demo-container-cover">
                <div class="row">
                    <div class="col-md-4 game-demo-block">
                        <p class="title">Scratch &amp; See</p>
                        <img class="game-demo-img" src="<?php echo base_url('website/'); ?>images/game_demo_1.jpg" /><br />
                        <a href="javascript:;" class="btn btn-info">SHOW DEMO</a>
                    </div>
                    <div class="col-md-4 game-demo-block">
                        <p class="title">Spin the Wheel</p>
                        <img class="game-demo-img" src="<?php echo base_url('website/'); ?>images/game_demo_2.jpg" /><br />
                        <a href="javascript:;" class="btn btn-info">SHOW DEMO</a>
                    </div>
                    <div class="col-md-4 game-demo-block">
                        <p class="title">Slot Machine</p>
                        <img class="game-demo-img" src="<?php echo base_url('website/'); ?>images/game_demo_3.jpg" /><br />
                        <a href="javascript:;" class="btn btn-info">SHOW DEMO</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        <div class="footer-div">
            <div class="container footer-container">
                <img class="footer-cartoon-img" src="<?php echo base_url('website/'); ?>images/footer_cartoon.png" />
                <div class="row">
                    <div class="col-md-3">
                        Copyright 2018 <?php echo $sitename; ?>
                    </div>
                    <div class="col-md-9 footer-link">
                        <a href="<?php echo base_url('web/privacy-policy'); ?>">Privacy policy</a> &nbsp;|&nbsp;
                        <a href="javascript:;">Cookies and Advertising</a> &nbsp;|&nbsp;
                        <a href="javascript:;">Terms and conditions</a> &nbsp;|&nbsp;
                        <a href="javascript:;">CONTACT : INFO@<?php echo strtoupper($sitename); ?>.COM</a>
                    </div>
                </div>
            </div>
        </div>





        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url('website/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url('website/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
