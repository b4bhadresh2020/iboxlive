$(document).ready(function () {
    var f = document.getElementById("winnerModel");
    window.onclick = function (h) {
        if (h.target == f) {
            f.style.display = "none";
        }
    };
    var b = $(".main-image-container").width();
    var g = parseInt(((474 / 830) * 100 * b) / 100);
    $(".main-image-container").height(g);
    var c = document.getElementById("secondChanceModal");
    var a = document.getElementsByClassName("secondClose")[0];
    a.onclick = function () {
        c.style.display = "none";
    };
    window.onclick = function (h) {
        if (h.target == c) {
            c.style.display = "none";
        }
    };
    var e = window.location.pathname;
    var d = [];
    setUrlLocal();
    $(".acceptCookies").click(function () {
        d = JSON.parse(localStorage.getItem("urls"));
        if (d != null) {
            d.push(e);
            localStorage.setItem("urls", JSON.stringify(d));
        } else {
            d = [];
            d.push(e);
            localStorage.setItem("urls", JSON.stringify(d));
        }
        if ($(window).width() < 440) {
            $("#cookieModel").hide();
            $("#cookieContainer").hide();
        } else {
            $("#cookieTitle").hide();
            $("#cookieContainer").hide();
        }
        $('body.load-browser-regform').css('padding-bottom',0);
    });
    $(window).on("resize", function () {
        var h = $(".main-image-container").width();
        var i = parseInt(((474 / 830) * 100 * h) / 100);
        $(".main-image-container").height(i);
        cookieFooterResizer();
    });
});
$(window).on("load", function () {
    cookieFooterResizer();
});
function cookieFooterResizer() {
    if($(".cookie-position")[0]) {
        var a = $(".cookie-position")[0].getBoundingClientRect().top;
        var b = $(".del-btn")[0].getBoundingClientRect().top;
        var d = $(".del-btn").height();
        var c = b + d;
        if (c > a) {
            $(".cookie-position").css({ bottom: "auto", position: "static", "margin-top": "20px" });
        }
    }
}
function setUrlLocal() {
    var a = window.location.pathname;
    allUrl = JSON.parse(localStorage.getItem("urls"));
    // if (allUrl != null) {
    //     if (allUrl.indexOf(a) != -1) {
    //         if ($(window).width() < 440) {
    //             $("#cookieModel").hide();
    //         } else {
    //             $("#cookieTitle").hide();
    //             $("#cookieContainer").hide();
    //         }
    //     } else {
    //         if ($(window).width() < 440) {
    //             $("#cookieModel").show();
    //         } else {
    //             $("#cookieTitle").show();
    //             $("#cookieContainer").show();
    //         }
    //     }
    // } else {
    //     if ($(window).width() < 440) {
    //         $("#cookieModel").show();
    //     } else {
    //         $("#cookieTitle").show();
    //         $("#cookieContainer").show();
    //     }
    // }
}
