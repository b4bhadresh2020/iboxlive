<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots:300,300i,400,400i,600,600i,700,700i,900,900i&mainfont=1&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,900,900i&mainfont=1&display=swap" rel="stylesheet" type="text/css" />
    
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="module" src="<?php echo base_url(); ?>js/js.cookie.min.js"></script>
    <?php if ($appNameIndex == 0) { ?>

        <link href="<?php echo base_url(); ?>css/scratch-game.css" rel="stylesheet">    
        <script src="<?php echo base_url(); ?>js/scratch-game.js"></script>

    <?php }else if($appNameIndex == 1){ ?>
        
        <link href="<?php echo base_url(); ?>css/wheel-game.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/wheel-game.js"></script>

    <?php }else if($appNameIndex == 2){ ?>

        <link href="<?php echo base_url(); ?>css/wheel-game.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>css/slot-game.css" rel="stylesheet">
        <!-- <script src="<?php echo base_url(); ?>js/jquery-3.2.1.slim.min.js"></script> -->
        <script src="<?php echo base_url(); ?>js/slotmachine.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.slotmachine.js"></script>

        <script src="<?php echo base_url(); ?>js/slot-game.js"></script>
        
    <?php }else if($appNameIndex == 3){ ?>
        <link href="<?php echo base_url(); ?>css/jackpot-wheel-game.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/wheel-game.js"></script>
        
    <?php } ?>
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <!-- <script src="<?php echo base_url(); ?>js/confetti.js"></script> -->
    <script src="<?php echo base_url(); ?>js/confetti.browser.min.js"></script>
    <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
        <script src="<?php echo base_url(); ?>js/snow.js"></script>
    <?php } ?>
    <title><?php if(@$pageDisplayTitle != ''){ echo $pageDisplayTitle.' |'; } ?> Game Campaign Portal</title>

    <?php 

        /*
            Below logic : when two or more fonts are same then load it only once.
        */

            $dynamicfontStyleArr = [$backGroundHeaderStyle,$backGroundButtonStyle,$gameImageHeaderStyle,$subHeaderFirstLineStyle,$subHeaderSecondLineStyle,$footerTextFirstLineStyle,$footerTextSecondLineStyle,$footerTextThirdLineStyle,$winningHeaderStyle,$winningImageHeaderStyle,$winningHeaderBelowImageFontStyle,$descriptionBeforeWinningValueFontStyle,$valueDescriptionFontStyle,$descriptionAfterWinningValueFontStyle,$footerButtonFontStyle,$losingHeaderStyle,$losingImageHeaderStyle,$losingHeaderBelowImageFontStyle,$descriptionBeforeLosingValueFontStyle,$losingValueDescriptionFontStyle,$descriptionAfterLosingValueFontStyle,$losingFooterButtonFontStyle,$wheelBGHeaderStyle,$wheelBGDescriptionStyle,$wheelMultiImageTitleFontStyle1,$wheelMultiImageTitleFontStyle2,$wheelMultiImageTitleFontStyle3,$wheelMultiImageTitleFontStyle4,$wheelMultiImageTitleFontStyle5,$wheelMultiImageTitleFontStyle6,$wheelMultiImageTitleFontStyle7,$wheelMultiImageTitleFontStyle8,$wheelSecondChnaceHeaderStyle,$wheelSecondChanceDescriptionStyle,$wheelSecondChanceButtonStyle];

            //slot fonts
            if($appNameIndex == 2){


                //image all fonts style
                if (count($slotMultiImageTitleFontStyle) > 0) {
                    
                    foreach ($slotMultiImageTitleFontStyle as $slotFontStyle) {
                        if ($slotFontStyle != '') {
                            if (!in_array($slotFontStyle,$dynamicfontStyleArr)) {
                                $dynamicfontStyleArr[] = $slotFontStyle;
                            }
                        }
                    }

                }
                


                // win-lose all fonts style
                if (count($slotWinLoseAllFontStyle) > 0) {
                    foreach ($slotWinLoseAllFontStyle as $slotWinLoseFontStyle) {
                        if ($slotWinLoseFontStyle != '') {
                            if (!in_array($slotWinLoseFontStyle,$dynamicfontStyleArr)) {
                                $dynamicfontStyleArr[] = $slotWinLoseFontStyle;
                            }
                        }
                    }
                }
                


            };

            $fontArr = array();

            foreach ($dynamicfontStyleArr as $fontStyle) {
                if ($fontStyle != '') {
                    if (!in_array($fontStyle, $fontArr)) {
                        $fontArr[] = $fontStyle;    
                        ?>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/'.$fontStyle.'/'.$fontStyle.'.css'); ?>"> 
                        <?php 
                    }    
                }
            }
            ?>


            <?php 
            // $campaignNameArr = ['se_egen_energihjul','se_egen_energi','dk_hosted_energihjul','dk_hosted_energi_CPA','no_egen_energi'];
            // if (in_array($campaignName, $campaignNameArr) == false)  {
                if($facebookPixelScript != "" && strpos($facebookPixelScript, 'script') !== false){
                    echo $facebookPixelScript;
                }else if($isLiveUrlEnable == 0) { ?> 
                    <!-- Facebook Pixel Code -->
                        <script>
                        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                        })(window,document,'script','dataLayer','GTM-WNQRZ28');
                        </script>
                    <!-- End Facebook Pixel Code -->
                <?php
                }
            // }
            ?>

            <!-- snap: front page pixel -->
            <?php
            $snapPxCampaignArr = ['CA-Lucky-Snap','CA-Slot-Silverbar-Snap','CA-SilverBar-Snap','ca-ps5-hosted'];
            if(in_array($campaignName, $snapPxCampaignArr)) {
                ?>
                <!-- Snap Pixel Code -->
                <script type='text/javascript'>
                (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
                {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
                a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
                r.src=n;var u=t.getElementsByTagName(s)[0];
                u.parentNode.insertBefore(r,u);})(window,document,
                'https://sc-static.net/scevent.min.js');

                snaptr('init', 'd7ec0f02-4d3d-4342-83ea-0d91fedf8a7d', {
                'user_email': '__INSERT_USER_EMAIL__'
                });

                snaptr('track', 'PAGE_VIEW');

                </script>
                <!-- End Snap Pixel Code -->
                <?php
            }
            ?>
            
        </head>