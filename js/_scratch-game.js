$(document).ready(function () {


    // winner Model
    var winnerModel = document.getElementById('winnerModel');
    /*var winnerModelBtn = document.getElementById('winnerModelBtn');*/

    window.onclick = function (event) {
        if (event.target == winnerModel) {
            winnerModel.style.display = 'none';
        }
    }

    // Canvas generation
    var currentWidth = $('.main-image-container').width();
    var textHeight = parseInt((((474 / 830) * 100) * currentWidth) / 100);
    $('.main-image-container').height(textHeight);


    // second chance modal
    var secondChanceModal = document.getElementById('secondChanceModal');
    var secondClose = document.getElementsByClassName('secondClose')[0];

    secondClose.onclick = function () {
        secondChanceModal.style.display = 'none';
    }
    window.onclick = function (event) {
        if (event.target == secondChanceModal) {
            secondChanceModal.style.display = 'none';
        }
    }

    var pathname = window.location.pathname;
    var allUrl = [];
    setUrlLocal();

    $('.acceptCookies').click(function () {
        // var allUrl = [];
        allUrl = JSON.parse(localStorage.getItem('urls'));

        if (allUrl != null) {
            allUrl.push(pathname);
            localStorage.setItem('urls', JSON.stringify(allUrl));
            // console.log('all urls else', allUrl);
        } else {
            allUrl = [];
            allUrl.push(pathname);
            localStorage.setItem('urls', JSON.stringify(allUrl));
        }
        if ($(window).width() < 440) {
            $('#cookieModel').hide();
        } else {
            $('#cookieTitle').hide();
            $('#cookieContainer').hide();
        }
    });

    // resize screen and reduse size
    $(window).on('resize', function () {
        var currentWidth = $('.main-image-container').width();
        var textHeight = parseInt((((474 / 830) * 100) * currentWidth) / 100);
        $('.main-image-container').height(textHeight);
        cookieFooterResizer();
        // canvas.width = window.innerWidth;
        // canvas.height = window.innerHeight;
    });
});

$(window).on('load', function () {
    cookieFooterResizer();
});

function cookieFooterResizer() {
    var cookieTop = $('.cookie-position')[0].getBoundingClientRect().top;
    var buttonTop = $('.del-btn')[0].getBoundingClientRect().top;

    var buttonHeight = $('.del-btn').height();
    var buttonTopHeight = buttonTop + buttonHeight;

    if (buttonTopHeight > cookieTop) {
        $('.cookie-position').css({ 'bottom': 'auto', 'position': 'static', 'margin-top': '20px' });
    }
}


function setUrlLocal() {
    //pure javascript
    var pathname = window.location.pathname;
    allUrl = JSON.parse(localStorage.getItem('urls'));

    if (allUrl != null) {
        if (allUrl.indexOf(pathname) != -1) {
            if ($(window).width() < 440) {
                $('#cookieModel').hide();
            } else {
                $('#cookieTitle').hide();
                $('#cookieContainer').hide();
            }
        } else {
            if ($(window).width() < 440) {
                $('#cookieModel').show();
            } else {
                $('#cookieTitle').show();
                $('#cookieContainer').show();
            }
            // allUrl.push(pathname);
            // localStorage.setItem('urls', JSON.stringify(allUrl));
            // console.log('all urls else', allUrl);
        }
    } else {
        if ($(window).width() < 440) {
            $('#cookieModel').show();
        } else {
            $('#cookieTitle').show();
            $('#cookieContainer').show();
        }
    }
    //  else {
    //     allUrl = [];
    //     allUrl.push(pathname);
    //     localStorage.setItem('urls', JSON.stringify(allUrl));
    // }

}




