$(document).ready(function () {
    /*WHEEL SPIN FUNCTION*/
    //DOCUMENT READY

    // cookie manage
    var pathname = window.location.pathname;
    var allUrl = [];
    setUrlLocal();

    $('.acceptCookies').click(function () {
        // console.log('in accept cookie');
        // var allUrl = [];
        allUrl = JSON.parse(localStorage.getItem('wheel-urls'));

        if (allUrl != null) {
            allUrl.push(pathname);
            localStorage.setItem('wheel-urls', JSON.stringify(allUrl));
            // console.log('all urls else', allUrl);
        } else {
            allUrl = [];
            allUrl.push(pathname);
            localStorage.setItem('wheel-urls', JSON.stringify(allUrl));
        }
        $('#cookieContainer').hide();
        $('body.load-browser-regform').css('padding-bottom',0);
    });

    
    // for mobile model
    W = window.innerWidth;
    if (W <= 768) {
        $('#spin').show();
    } else {
        $('#infoFormModel').hide();
        // $('#spin').hide();
    }


    var getUrl = getUrlVars();
    if (getUrl['hostname'] && getUrl['hostname'] != '') {
        $('#cookieContainer').hide();
    }
});


function cookieFooterResizer() {
    var cookieTop = $('.cookie-position')[0].getBoundingClientRect().top;
    var buttonTop = $('.del-btn').height();

    var buttonHeight = $('.del-btn').height();
    var buttonTopHeight = buttonTop;

    // if (buttonTopHeight > cookieTop) {
    //     $('.cookie-position').css({'bottom': 'auto', 'position': 'static', 'margin-top': '20px'});
    // }
}

function setUrlLocal() {
    //pure javascript
    var pathname = window.location.pathname;
    allUrl = JSON.parse(localStorage.getItem('wheel-urls'));

    // if (allUrl != null && allUrl.indexOf(pathname) != -1) {
    //     $('#cookieContainer').hide();
    // }
}

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}