<?php 
    $approveLeadTofireFbEventCampign = array(
        "DK-IKEA-Vel",
        "Vita-2offer",
        "no_api_Sensor_luksushytte",
        "no_api_Sensor_Bio",
        "no_api_vitaepro_dagligvare"
    );
?>
<input type="hidden" id="isLiveUrlEnableForFb" value="<?php echo ($isLiveUrlEnable == 1 && in_array($campaignName,$approveLeadTofireFbEventCampign)) ? 1 : 0; ?>">
<?php if($isLiveUrlEnable == 0){ ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNQRZ28" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php }else{ ?>
    <span id="nodeScript"></span>
<?php  } ?>