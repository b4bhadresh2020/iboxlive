<script type="text/javascript">
    //facebook pixel event called
	function fireFacebookPixcelEvent(response){
        var response = JSON.parse(response);
        if($('#isLiveUrlEnableForFb').val() == 1){
            if(response.is_liveurl_response == 1){
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-WNQRZ28');
                $('#nodeScript').html(`<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNQRZ28" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>`);
                setTimeout(() => {     
                    fbq('track', 'CompleteRegistration');
                    fbq('track', 'Lead');
                }, 100);
            }
        }else{
            fbq('track', 'CompleteRegistration');
            fbq('track', 'Lead');
        }
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    function sendRequestToClientApiAndFireFbEvent(response,url){
        var liveUrl = JSON.parse(response);

        // load thank you page snap pixel after user registration only for this campaign (snap: thank you page pixel)
        let snapxlCampaignArr = ['CA-Lucky-Snap','CA-Slot-Silverbar-Snap','CA-SilverBar-Snap'];
        if(liveUrl.campaignName != '' && snapxlCampaignArr.indexOf(liveUrl.campaignName) !== -1) {
            (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
            {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https://sc-static.net/scevent.min.js');

            snaptr('init', 'd7ec0f02-4d3d-4342-83ea-0d91fedf8a7d', {
            'user_email': '__INSERT_USER_EMAIL__'
            });

            snaptr('track', 'SIGN_UP');
        }

        let anotherSnapxlCampaign = ['ca-ps5-hosted'];
        if(liveUrl.campaignName != '' && anotherSnapxlCampaign.indexOf(liveUrl.campaignName) !== -1) {
            (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
            {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https‍://sc-static.‍net/scevent.min.‍js');

            snaptr('init', 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx', {
                'user_email': '__INSERT_USER_EMAIL__'
            });

            snaptr('track', 'SIGN_UP');
        }

        // load another fb pixel after user registartion only for this campaigns
        // var campaignNameArr = ['se_egen_energihjul','se_egen_energi','dk_hosted_energihjul','dk_hosted_energi_CPA','no_egen_energi','NZ-Silver-Wheel','NZ-Gold_Wheel','NZ-Silver-FB-Scratch','NZ-Gold-FB-Scratch','dk_hosted_power1','dk_hosted_HaraldNyborg','dk_hosted_remakundevogn','dk_hosted_byggemarked','dk_hosted_vaskemaskine','dk_hosted_tv','dk_hosted_sommerhus','dk_hosted_spa','dk_hosted_netto','dk_hosted_påskeæg','no_hosted_spaophold','no_hosted_elcykel','no_hosted_drivhus','no_hosted_byggemarked','no_hosted_clasohlson','no_hosted_LeCruset','no_hosted_rema','no_hosted_elkjop','no_hosted_paaske','no_hosted_tv','no_hosted_vaskemaskine','no_hosted_spabad','no_guldbar_fb','no_silverbar_hosted','no_terninger_hosted'];
        // if(liveUrl.campaignName != '' && campaignNameArr.indexOf(liveUrl.campaignName) !== -1) {
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '180500904165576');
            fbq('track', 'CompleteRegistration');
        // } else {
            if(liveUrl.is_liveurl_enable == "1"){
                $.ajax({
                    url : BASE_URL + url +'/sendRequestToClient',
                    type: 'post',
                    data : {
                        'campaignId' : liveUrl.campaignId,
                        'userId' : liveUrl.userId,
                        'transactionId' : liveUrl.transactionId,
                    },
                    success:function(liveUrlResponse){
                        fireFacebookPixcelEvent(liveUrlResponse);
                    }
                });
            }
        // }
    }
</script>