<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style type="text/css">

.permission-model-text-box{
    background-color: <?php echo $userFieldBackgroundColor; ?>;
}
.permission-model-text-box::placeholder {
    color: <?php echo $userFieldPlaceholderColor; ?>;
    opacity: 1; /* Firefox */
}

.permission-model-text-box:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: <?php echo $userFieldPlaceholderColor; ?>;
}

.permission-model-text-box::-ms-input-placeholder { /* Microsoft Edge */
    color: <?php echo $userFieldPlaceholderColor; ?>;
}


#spin:after {
    content: "<?php echo $wheelSpinButtonName; ?>";
}
.test-block {
    display: flex;
    align-items: center;
}
.test-mobile-input {
    padding-left: 0px;
    width:65%;    
    /*margin-top:-20px;*/
}

.test-mobile-input-select {
    padding-left: 0px;
    width:65%;
    /*margin-top:-20px;*/
}

.test-countryCode-input {
    padding-right: 5px;
    width: 35%;
}

/***************** new css *************/
.casino-logo img{
  width:100px;
}

#sidebar{
    display: none;
}
.genesis-wheel-circle-logo img {
    width: 100%;
    height: auto;
    margin: 0 auto;
}
.genesis-wheel-circle-inner {
    max-width: 1680px;
    padding-top: 35px;
    margin: 0 auto;
}
.genesis-wheel-circle-logo {
    text-align: center;
    padding-top: 25px;
    width: 180px;
    margin: 0 auto;
}
#wrapper.genesis-wheel-circle{
    width: 515px;
    margin: 0 auto;
    padding: 0;
}
.wheel-container {
    background-color: #000;
    height: auto;
}
.genesis-wheel-circle-wrapper{
    width: 100%;
    background: url(images/banner-desktop.jpg);
    background-repeat: no-repeat;
    background-size: auto;
    background-position: center -20px;
    height: 1000px;
    background-color: #000000;
}
.wheel-pin-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: url(images/jackpot_ring.png) no-repeat center center;
    z-index: 99;
    background-size: 100%;
    transition: all 6s cubic-bezier(0, .99, .44, .99);
}
.genesis-wheel-circle-inner .wheel-pin-bg {
    transform: scale(1.05) !important;
    -webkit-transform: scale(1.05) !important;
    -ms-transform: scale(1.05) !important;
    -moz-transform: scale(1.05) !important;
    -o-transform: scale(1.05) !important;
}
.genesis-wheel-circle-subinner {
    display: flex;
    min-height: 500px;
}
.genesis-wheel-circle-left,
.genesis-wheel-circle-right{
    width: 33.33%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.genesis-wheel-circle #wheel-grand-parent {
    position: absolute;
    top: 26px;
    left: calc(50% - 250px);
    width: 470px;
    height: 470px;
    border: 15px solid transparent;
}
.genesis-wheel-circle-left-text {
  text-align: center;
}
.genesis-wheel-circle-left-text h2 {
    font-size: 80px;
    font-weight: bold;
    margin: 0 auto;
    text-align: center;
    line-height: 60px;
    color: <?php echo !empty($jackpotWheelText1Color)?$jackpotWheelText1Color:'#ffffff' ?>;
    background-color: <?php echo !empty($jackpotWheelText1BGColor)?$jackpotWheelText1BGColor:'' ?>;
    font-family: "<?php echo !empty($jackpotWheelText1Style)?$jackpotWheelText1Style:'shackleton-condensed' ?>";
}
.genesis-wheel-circle-left-text h3 {
    font-size: 80px;
    font-weight: bold;
    color: <?php echo !empty($jackpotWheelText2Color)?$jackpotWheelText2Color:'#dfb946' ?>;
    background-color: <?php echo !empty($jackpotWheelText2BGColor)?$jackpotWheelText2BGColor:'' ?>;
    font-family: "<?php echo !empty($jackpotWheelText2Style)?$jackpotWheelText2Style:'shackleton-condensed' ?>";
}
.genesis-wheel-circle-left-text h5 {
    font-size: 80px;
    font-weight: bold;    
    text-align: center;
    width: 80%;    
    margin: 0 auto;
    color: <?php echo !empty($jackpotWheelText3Color)?$jackpotWheelText3Color:'#ffffff' ?>;
    background-color: <?php echo !empty($jackpotWheelText3BGColor)?$jackpotWheelText3BGColor:'' ?>;
    font-family: "<?php echo !empty($jackpotWheelText3Style)?$jackpotWheelText3Style:'shackleton-condensed' ?>";
}
.genesis-wheel-circle-left-text p {
    font-size: 20px;
    text-align: center;
    margin: 0;
    padding-top: 0;    
    letter-spacing: 0.5px;
    color: <?php echo !empty($jackpotWheelText4Color)?$jackpotWheelText4Color:'#ffffff' ?>;
    background-color: <?php echo !empty($jackpotWheelText4BGColor)?$jackpotWheelText4BGColor:'' ?>;
    font-family: "<?php echo !empty($jackpotWheelText4Style)?$jackpotWheelText4Style:'shackleton-condensed' ?>";
}
.genesis-wheel-circle-right-button button.btn {
    font-size: 35px;
    color: <?php echo !empty($spinNowColor)?$spinNowColor:'#ffffff' ?> !important;
    font-weight: bold;
    background-color: <?php echo !empty($spinNowBGColor)?$spinNowBGColor:'#313131' ?> !important;
    border-radius: 100px;
    position: relative;
    padding: 10px 50px;
    font-family: "<?php echo !empty($spinNowStyle)?$spinNowStyle:'shackleton-condensed' ?>";
    border: 2px solid <?php echo !empty($spinNowColor)?$spinNowColor:'#ffffff' ?>;
    letter-spacing: 4px;
    z-index:2;
}
.genesis-wheel-circle-right-button button.btn:before {
    content: "";
    width: 40px;
    height: 47px;
    margin-top: -7px;
    margin-right: 9px;
    display: none;
    vertical-align: middle;
    background-image: url(images/button-spin-arrows.png);
    background-repeat: no-repeat;
    background-size: contain;
}
.welcome {
    background-image: url(images/final.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    bottom: auto !important;
    top: 35%;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    transform: translate(0, -50%);
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    margin: 0 auto;
}
.wheel-title.firstname-replace-text {
    font-size: 90px;
    font-family: shackleton-condensed;
    color: white;
    text-align: center;
    -webkit-transform: skew(-10deg) rotate(-6deg);
    -moz-transform: skew(-10deg) rotate(-6deg);
    -ms-transform: skew(-10deg) rotate(-6deg);
    -o-transform: skew(-10deg) rotate(-6deg);
    transform: skew(-10deg) rotate(-6deg);
    text-shadow: 5px 5px 0 black;
    z-index: 1;
    font-weight: bolder;
    position: fixed;
    top: 48%;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
    pointer-events: none;
}
#welcome_bg {
    background-color: rgb(0 0 0 / 0.5);
    position: fixed;
    background-image: none !important;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 1;
    width: 100%;
    height: 100% !important;
}
.welcome .wheel-title.firstname-replace-text{
  display: block;
  font-size: 220px;
}
.genesis-wheel-circle-right-disclaimer {
    margin-top: 15px;
    font-size: 15px;
    color: #ffffff;
    text-decoration: underline;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.genesis-wheel-circle-wrapper .wheel-arrow {
    top: -14px;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
    z-index: 100;
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
}
.genesis-wheel-circle-wrapper .wheel-arrow img {
    width: 12%;
    margin: 0 auto;
}
.genesis-wheel-circle-wrapper #wheel {
    transform: translateX(0px) rotateZ(0deg);
    -webkit-transform: translateX(0px) rotateZ(0deg);
    -o-transform: translateX(0px) rotateZ(0deg);
    -ms-transform: translateX(0px) rotateZ(0deg);
    -moz-transform: translateX(0px) rotateZ(0deg);
}
.genesis-wheel-circle-wrapper .wheel-bottom {
    position: absolute;
    bottom: -140px;
    left: 30px;
    right: 0;
    z-index: -1;
}
.genesis-wheel-circle-wrapper #shine {
  background: radial-gradient(ellipse at center, rgb(188 115 2) 0%, rgb(253 220 110) 1%, rgb(255 237 148) 9%, rgb(255 226 110) 100%);
  opacity: 1; 
}
.genesis-wheel-circle-wrapper #spin:after {
  font-weight: 500;
  color: #f5cc58;
}
.genesis-wheel-circle-wrapper #inner-spin {
  background: rgb(51 7 2) !important;
  box-shadow: rgb(43 43 43 / 1) 0px -2px 0px inset, rgb(43 43 43 / 1) 0px 2px 0px inset, rgb(43 43 43 / 0.4) 0px 0px 5px !important;
}
.has-eighteen-plus {
    display: block;
    bottom: -295px;
}
.winner-timer{
  margin-bottom:20px;
  font-size:18px;
}

.val{
  padding-top:5px;
}

/* For Canvas */

canvas {
    overflow-y: hidden;
    overflow-x: hidden;
    width: 100%;
    margin: 0;
    height: 70vh;
    left: 0;
    right :0 ;
    z-index:1;
    pointer-events: none;
}

@media(max-width: 1400px){
  .genesis-wheel-circle-left-text h3,
  .genesis-wheel-circle-left-text h2,
  .genesis-wheel-circle-left-text h5 {
      font-size: 60px;
  }
  
}
@media(max-width: 1199px){
  .genesis-wheel-circle-left-text p {
    font-size: 18px;
  }
  .genesis-wheel-circle-left-text h3,
  .genesis-wheel-circle-left-text h2,
  .genesis-wheel-circle-left-text h5 {
    font-size: 40px;
  }
  .genesis-wheel-circle-left-text h3 {
    margin-top: 5px;
  }
  .genesis-wheel-circle-right-button button.btn {
      font-size: 26px;
      padding: 7px 30px;
      letter-spacing: 2px;
  }
}
@media(max-width: 991px){
  .genesis-wheel-circle-inner {
      padding-top: 10px;
  }
  .genesis-wheel-circle #wheel-grand-parent {
    position: inherit;
    top: 0;
    left: 0;
    border: none;
    margin: 0 auto;
    transform-origin: 0% 0%;
    transform: scale(1) !important;
  }
  .genesis-wheel-circle-wrapper {
    background-position: center 0;
  }
  .genesis-wheel-circle-subinner {
    display: block;
    min-height: auto;
    text-align: center;
  }
  .genesis-wheel-circle-left, 
  .genesis-wheel-circle-right {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .genesis-wheel-circle-logo img {
    width: 170px;
  }
  .genesis-wheel-circle-left {
    margin-bottom: 0;
  }
  .genesis-wheel-circle-left-text p {
    font-size: 20px;
  }
  #wrapper.genesis-wheel-circle {
    width: 100% !important;
    display: flex;
    align-items: center;
    transform: scale(0.9);
    -webkit-transform: scale(0.9);
    -o-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -moz-transform: scale(0.9);
  }
  .genesis-wheel-circle-right-button button.btn {
    font-size: 18px;
    padding: 6px 30px;
    letter-spacing: 2px;
    position: absolute;
    bottom: 4px;
    left: 0;
    right: 0;
    margin: auto;
  }
  .genesis-wheel-circle-right-disclaimer {
    margin-top: 40px;
    font-size: 18px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    left: 10px;
  }
  .genesis-wheel-circle-left-text h5 {
    font-size: 40px;
    width: 100%;
  }
  .genesis-wheel-circle-left-text h3 {
    font-size: 40px;
    margin: 0;
    text-shadow: 0px 0px 2px #000000;
  }
  .genesis-wheel-circle-logo {
    padding-top: 15px;
  } 
  .genesis-wheel-circle-left-text h2 {
    font-size: 40px;
    line-height: 40px;
  }
  .welcome .wheel-title.firstname-replace-text {
    font-size: 120px;
  }
  .welcome {
    top: 45%;
  }
}
@media(max-width: 768px){
  .genesis-wheel-circle-wrapper .wheel-btn {
    display: none;
  }
}
@media(max-width: 767px){
  .genesis-wheel-circle-wrapper{
    width: 100%;
    background: url(images/banner-mobile.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
    background-color: #000000;
    min-height: 1200px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    left: 0;
    bottom: -150px;
    transform: scale(0.7);
    -webkit-transform: scale(0.7);
    -o-transform: scale(0.7);
    -ms-transform: scale(0.7);
    -moz-transform: scale(0.7);
  }
  .genesis-wheel-circle-right-button button.btn {
    bottom: 10%;
  }
  .has-eighteen-plus {
    bottom: -300px;
  }
}
@media(max-width: 575px){
  .welcome .wheel-title.firstname-replace-text {
    font-size: 60px;
  }
}
@media(max-width: 450px){
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -140px;
  }
}
@media(max-width: 440px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.96);
    -webkit-transform: scale(0.96);
    -o-transform: scale(0.96);
    -ms-transform: scale(0.96);
    -moz-transform: scale(0.96); */
    /* left: -9px; */
  }
  .inner-wheel-box {
    display: block;
    width: 100%;
    height: 100%;
    transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -ms-transform: scale(0.95);
    -moz-transform: scale(0.95);
    -o-transform: scale(0.95);
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 4px;
  }
}
@media(max-width: 430px){
  #wrapper.genesis-wheel-circle {
    padding-top: 20px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -120px;
  }
  .inner-wheel-box {
      transform: scale(0.9);
      -webkit-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -moz-transform: scale(0.9);
      -o-transform: scale(0.9);
      margin-left: -15px;
  }
}
@media(max-width: 425px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.92);
    -webkit-transform: scale(0.92);
    -o-transform: scale(0.92);
    -ms-transform: scale(0.92);
    -moz-transform: scale(0.92); */
    /* left: -9px; */
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 13px;
  }
}
@media(max-width: 420px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.9);
    -webkit-transform: scale(0.9);
    -o-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -moz-transform: scale(0.9); */
    /* left: -17px; */
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 15px;
  }
  .genesis-wheel-circle-wrapper {
    background-repeat: no-repeat;
    background: url(images/banner-mobile-480.jpg);
    background-position: center 0;
    background-size: cover;
    min-height: 1000px;
  }
  #wrapper.genesis-wheel-circle {
    padding-top: 0;
    margin-top: -35px;
  }
  .has-eighteen-plus {
      display:block !important;
      bottom: -285px;
  }
}
@media(max-width:410px){
  .inner-wheel-box {
    transform: scale(0.85);
    -webkit-transform: scale(0.85);
    -ms-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -o-transform: scale(0.85);
  }
}
@media(max-width: 400px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.87);
    -webkit-transform: scale(0.87);
    -o-transform: scale(0.87);
    -ms-transform: scale(0.87);
    -moz-transform: scale(0.87); */
    /* left: -23px; */
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 24px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -117px;
    transform: scale(0.8);
    -webkit-transform: scale(0.8);
    -o-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -moz-transform: scale(0.8);
  }
}
@media(max-width:380px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.8);
    -webkit-transform: scale(0.8);
    -o-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -moz-transform: scale(0.8); */
    /* left: -30px; */
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 35px;
  }
  .inner-wheel-box {
    transform: scale(0.8);
    margin-left: -20px;
  }
}
@media(max-width: 370px){
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -110px;
    left: -8px;
  } 
  #wrapper.genesis-wheel-circle {
    padding-top: 0;
  }
  .inner-wheel-box {
    transform: scale(0.77);
    -webkit-transform: scale(0.77);
    -ms-transform: scale(0.77);
    -moz-transform: scale(0.77);
    -o-transform: scale(0.77);
    margin-left: -30px;
  }
}
@media(max-width: 360px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.78);
    -webkit-transform: scale(0.78);
    -o-transform: scale(0.78);
    -ms-transform: scale(0.78);
    -moz-transform: scale(0.78); */
    /* left: -37px; */
  }
  .inner-wheel-box {
    transform: scale(0.75);
    -webkit-transform: scale(0.75);
    -ms-transform: scale(0.75);
    -moz-transform: scale(0.75);
    -o-transform: scale(0.75);
    margin-left: -30px;
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 45px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
      bottom: -100px;
  }
  #wrapper.genesis-wheel-circle {
    margin-top: -25px;
  }
}
@media(max-width:350px){
  .genesis-wheel-circle-wrapper {
    background-position: center -30px;
  }
  #wrapper.genesis-wheel-circle {
    margin-top: -45px;
  }
  .genesis-wheel-circle-right-button button.btn {
    bottom: 12%;
  }
}
@media(max-width: 340px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.74);
    -webkit-transform: scale(0.74);
    -o-transform: scale(0.74);
    -ms-transform: scale(0.74);
    -moz-transform: scale(0.74); */
    /* left: -40px; */
  }
  .inner-wheel-box {
    transform: scale(0.7);
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    -moz-transform: scale(0.7);
    -o-transform: scale(0.7);
    margin-left: -40px;
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 55px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -90px;
    left: -20px;
  }
  #wrapper.genesis-wheel-circle {
    margin-top: -50px;
  }
  .genesis-wheel-circle-wrapper {
    background-position: center -39px;
    background-repeat: repeat-x;
  }
  .genesis-wheel-circle-right-button button.btn {
    bottom: 14%;
  }
}
@media(max-width:330px){
  #wrapper.genesis-wheel-circle {
    margin-top: -60px;
  }
  .genesis-wheel-circle-wrapper {
    background-position: center -50px;
  }
}
@media(max-width: 320px){
  .genesis-wheel-circle-wrapper #inner-wheel {
    /* transform: scale(0.7);
    -webkit-transform: scale(0.7);
    -o-transform: scale(0.7);
    -ms-transform: scale(0.7);
    -moz-transform: scale(0.7); */
    /* left: -49px; */
  }
  .inner-wheel-box {
    transform: scale(0.66);
    -webkit-transform: scale(0.66);
    -ms-transform: scale(0.66);
    -moz-transform: scale(0.66);
    -o-transform: scale(0.66);
    margin-left: -45px;
  }
  .genesis-wheel-circle-wrapper .wheel-arrow {
    top: 65px;
  }
  .genesis-wheel-circle-wrapper .wheel-bottom {
    bottom: -78px;
    left: -25px;
  }
  #wrapper.genesis-wheel-circle {
    margin-top: -75px;
  }
  .genesis-wheel-circle-wrapper {
    background-position: center -115px;
  }
  .genesis-wheel-circle-right-button button.btn {
    bottom: 21%;
  }
  .genesis-wheel-circle-logo {
    padding-top: 5px;
  }
  .genesis-wheel-circle-left-text h2 {
    font-size: 32px;
    line-height: 32px;
  }
  .genesis-wheel-circle-left-text h3 {
    font-size: 32px;
  }
  .genesis-wheel-circle-left-text h5 {
    font-size: 32px;
  }
}
/******* popup *******/

.winner-modal .winner-model-model {
    margin: 0 auto;
    background-color: #fff;
    border-radius: 5px;
    position: relative;
    border: none;
}
.winner-modal .winner-model-model .modal-header {
    background: -moz-linear-gradient(top, transparent 0%, rgba(0,0,0,0.13) 95%);
    background: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,0.13) 95%);
    background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.13) 95%);
    border: none;
}
.winner-modal .winner-model-model .tac {
    position: absolute;
    bottom: -40px;
    left: 0;
    right: 0;
}
.winner-modal .winner-model-model .tac p {
    font-size: 13px;
    color: #fff !important;
    font-weight: 400;
    line-height: 16px;
    margin: 0;
}
.winner-modal .winner-model-model .tac p a {
    color: #bbb288 !important;    
}

.winner-modal .winner-model-model .tac p a span {
    color: #bbb288 !important;    
}

/* .winner-modal .winner-model-model .modal-header img {
    width: 140px;
} */
.winner-modal .winner-model-model .modal-header button.close {
    margin: 0;
    position: absolute;
    top: 5px;
    right: 15px;
    color: #000 !important;
}
.winner-modal .winner-model-model .modal-header button.close span {
    font-size: 60px;
}
.winner-modal .winner-model-model .offer-content .orange{
    color: #f7a302;
    font-size: 60px;
    font-family: shackleton-condensed;
    font-weight: 600;
}
.winner-modal .winner-model-model .offer-content .text-md {
    font-size: 75px;
    color: #424242;
    font-family: shackleton-condensed;
    width: 80%;
    margin: 0 auto;
    line-height: 80px;
    font-weight: bold;
    padding-bottom: 10px;
}
.winner-modal .winner-model-model .modal-body .button button,
.winner-modal .winner-model-model .modal-body .button a {
    background-color: #f7a302;
    border: none;
    border-radius: 10px;
    margin: 0 10px;
    display: inline-block;
    vertical-align: middle;
    position: relative;
    z-index: 1000;
}
.winner-modal .winner-model-model .modal-body .button a span:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1;
    transform: scale(1.5);
    border-radius: 10px;
    background-color: rgb(66 66 66 / 40%) !important;
    animation: example 1.5s linear infinite;
}
@keyframes example{
  0%{ 
    transform:scaleX(1) scaleY(1);
    -webkit-transform:scaleX(1) scaleY(1);
    -o-transform:scaleX(1) scaleY(1);
    -ms-transform:scaleX(1) scaleY(1);
    -moz-transform:scaleX(1) scaleY(1);
    opacity:.6
  }
  100%{
    transform:scaleX(1.2) scaleY(1.5);
    transform:scaleX(1.2) scaleY(1.5);
    -webkit-transform:scaleX(1.2) scaleY(1.5);
    -o-transform:scaleX(1.2) scaleY(1.5);
    -ms-transform:scaleX(1.2) scaleY(1.5)
    -moz-transform:scaleX(1.2) scaleY(1.5);
    opacity:0
  }
}
.winner-modal .winner-model-model .modal-body .button button span {
    border: 1px solid #eee;
}
.winner-modal .winner-model-model .modal-body .button button:hover,
.winner-modal .winner-model-model .modal-body .button a:hover{
  background-color: #433817;
}
.winner-modal .winner-model-model .modal-body .button button span,
.winner-modal .winner-model-model .modal-body .button a span {
    line-height: 64px;
    padding: 0px 30px;
    text-transform: uppercase;
    font-size: 24px;
    border-radius:10px;
    font-family: shackleton-condensed;
    letter-spacing: 1px;
}
.winner-modal .winner-model-model .info .winner-terms {
    font-size: 18px;
    color: #8c8c8c;
    font-weight: 500;
    margin: 0;
    display:block;
    padding: 15px;
}
.winner-modal .modal-body {
    padding: 0;
}
.modal-body-winner {
    padding: 15px;
}
.button .spin-again,
.button .wheel-win-link.winning-btn {
    padding: 0;
    height: auto;
    line-height: normal;
    background-color: transparent !important;
}
.button .wheel-win-link.winning-btn span {
    display: block;
    padding: 0px 40px !important;
    line-height: 64px;
    border-radius: 100px;
    width: 100%;
}
.button .spin-again span {
    padding: 0 25px !important;
    line-height: 64px;
    display: block;
    border-radius: 100px;
}
.button.button2 {
    margin: 15px 0;
}
@media(max-width: 768px){
  .winner-model-center{
    top:27%;
  }
  .winner-modal .winner-model-model {
      width: 95%;
  }
  .winner-modal .winner-model-model .offer-content .text-md {
      font-size: 70px;
      width: 70%;
      line-height: 70px;
      padding-bottom: 10px;
  }
  .winner-modal .winner-model-model .modal-body .button button span, 
  .winner-modal .winner-model-model .modal-body .button a span {
      padding: 0px 30px;
      line-height: 50px;
      font-size: 20px;
  }
  .winner-modal .winner-model-model .info .winner-terms {
    font-size: 16px;
  }
  .winner-modal .winner-model-model .offer-content .orange {
    font-size: 50px;
  }
}
@media(max-width: 576px){
  .winner-modal .winner-model-model .offer-content .text-md {
    font-size: 60px;
    width: 80%;
    line-height: 60px;
    padding-bottom: 10px;
  }
  .winner-modal .winner-model-model .modal-body .button button, 
  .winner-modal .winner-model-model .modal-body .button a {
    margin: 0 5px;
  }
  .winner-modal .winner-model-model .modal-body .button button span, 
  .winner-modal .winner-model-model .modal-body .button a span {
      line-height: 42px;
      padding: 0px 20px;
      text-transform: uppercase;
      font-size: 16px;
      font-family: shackleton-condensed;
      letter-spacing: 1px;
  }
  .winner-modal .winner-model-model .info .winner-terms {
      font-size: 14px;
      padding-top: 20px;
      padding-bottom: 10px;
  }
}
@media(max-width: 495px){
  .winner-modal .winner-model-model .modal-header img {
    width: 100px;
  }
  .winner-modal .winner-model-model .offer-content .orange {
    font-size: 50px;
    margin-bottom: 15px;
    margin-top : 25px;
  }
  .winner-modal .winner-model-model .offer-content .text-md {
    font-size: 36px;
    line-height: 45px;
  }
  .winner-modal .winner-model-model .button{
    margin:25px 0px;
  }
}
@media(max-width: 455px){
  .winner-modal .winner-model-model .modal-body .button button span, 
  .winner-modal .winner-model-model .modal-body .button a span {
    line-height: 35px;
    padding: 0px 10px;
    font-size: 14px;
  }
  .winner-modal .winner-model-model .info .winner-terms {
    font-size: 12px;
  }
  .winner-modal .winner-model-model .modal-header button.close span {
    font-size: 40px;
  }
}
@media(max-width: 404px){
  .winner-modal .winner-model-model .offer-content .text-md {
    font-size: 40px;
    line-height: 40px;
  }
  .winner-modal .winner-model-model .modal-body .button button span, 
  .winner-modal .winner-model-model .modal-body .button a span {
    line-height: 30px;
    padding: 0px;
    font-size: 12px;
  }
  .winner-modal .winner-model-model .info .winner-terms {
    font-size: 11px;
  }
}
@media(max-width: 340px){
  .winner-modal .winner-model-model .offer-content .text-md {
    font-size: 32px;
    line-height: 32px;
  }
  .winner-modal .winner-model-model .modal-header img {
    width: 80px;
  }
}
/******* end popup *******/

/***************** new css *************/
</style>  
<style type="text/css">
*,
*::before,
*::after {
  box-sizing: border-box;
}
.container-fluid {
  padding: 0;
}
.wheelofgenesis-bonuses-top {
    background-color: #000000;
}
.wheelofgenesis-logo-wrapper {
    padding-top: 25px;
}
.wheelofgenesis-logo-inner img {
    width: 260px;
    margin: 0 auto;
}
.wheelofgenesis-logo-inner {
    text-align: center;
}
.wheelofgenesis-bonuses-wrapper {
    padding: 50px 0;
}
.wheelofgenesis-bonuses-title {
    text-align: center;
    margin-bottom: 30px;
}
.wheelofgenesis-bonuses-title h2 {
    font-size: 45px;
    line-height: 45px;
    color: #ffffff;
    font-weight: 600;
    margin: 0 auto 30px auto;
}
.wheelofgenesis-bonuses-title p {
    color: #808080;
    font-size: 16px;
    margin: 0 auto;
    font-weight: 500;
    line-height: 1.5;
    padding: 0;
    width: 60%;
}
.wheelofgenesis-bonuses-ul ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.wheelofgenesis-bonuses-ul li.offer-title {
    border-radius: 10px;
    border: 2px solid #363636;
    height: auto;
    background: #363636;
    color: #10e0ff;
    font-size: 15px;
    letter-spacing: 1px;
    font-weight: 500;
}
.wheelofgenesis-bonuses-ul li.offer-title,
.wheelofgenesis-bonuses-ul li .top {
    display: flex;
    align-items: center;
}
.wheelofgenesis-bonuses-ul li .top,
.wheelofgenesis-bonuses-ul li .bottom {
  position: relative;
  z-index: 2;
}
.wheelofgenesis-bonuses-ul .no {
    width: 8%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .casino {
    width: 17%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .welcome-offer {
    width: 25%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .terms {
    width: 20%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .free-spins {
    width: 10%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .free-bonus {
    width: 20%;
    padding: 15px;
    text-align: center;
}
.wheelofgenesis-bonuses-ul .offer-gray {
    background-color: #f8f8f8;
}
.wheelofgenesis-bonuses-ul .offer-white {
    background-color: #ffffff;
}
.vertical-no span {
    background-color: #2fd1ec;
    width: 35px;
    height: 35px;
    color: #ffffff;
    display: block;
    text-align: center;
    line-height: 35px;
    font-size: 22px;
    font-weight: 600;
    border-radius: 100px;
    margin: 0 auto;
}
.brand-logo {
    display: flex;
    min-height: 85px;
    align-items: center;
}
.brand-logo img {
    max-width: 153px;
    height: 55px;
    display: flex;
    align-items: center;
    margin: 0 auto;
}
.welcome-offer .vertical-offer {
    font-size: 14px;
    color: #000000;
    font-weight: 500;
}
.vertical-terms p {
    margin: 0;
    font-size: 14px;
    color: #777777;
    font-weight: 500;
}
.vertical-terms p a {
    color: #777777;
    text-decoration: underline;
    padding-left: 5px;
}
.vertical-free-spins .value {
    font-size: 25px;
    color: #000;
    font-weight: 600;
}
.vertical-free-spins .games {
    font-weight: 400;
    font-size: 14px;
    color: #e841df;
}
.vertical-bonus a {
    background-color: #10e0ff;
    padding: 11px 25px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 100px;
    font-size: 16px;
    text-decoration: none;
    font-weight: bold;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
}
.vertical-bonus a:hover {
  background-color: #e841df;
  color: #ffffff;
}
.wheelofgenesis-payment-icon-inner .icon {
    width: 120px;
    height: 55px;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
}
.wheelofgenesis-payment-icon-inner .icon img {
    height: 100%;
    width: 100%;
    margin: 0 auto;
    opacity: 0.6;
}
.wheelofgenesis-payment-icon-inner .icon:hover img{
    opacity: 1;
}
.wheelofgenesis-payment-icon-inner {
    width: 90%;
    margin: 0 auto;
    text-align: center;
}
.licensing-block {
    text-align: center;
    width: 71%;
    margin: 0 auto;
    padding-bottom: 60px;
}
.wheelofgenesis-payment-wrapper {
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-bottom: 1px solid #57544f;
}
.licensing-block h2 {
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
    color: #57544f;
    margin-bottom: 15px;
}
.licensing-block p {
    font-size: 16px;
    color: #57544f;
    font-weight: 500;
    line-height: 26px;
    margin-bottom: 0;
}
.licensing-block p a {
    color: #57544f;
    text-decoration: underline;
}
.footer-logo {
    text-align: center;
    padding-bottom: 50px;
}
.footer-icon {
    width: 120px;
    height: 55px;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    margin: 0 10px;
}
.footer-icon img {
    max-width: 100%;
    height: 100%;
    opacity: .6;
    margin: 0 auto;
}
.footer-icon:hover img{
  opacity: 1;
}

.wheelofgenesis-bonuses-ul li.offer {
  margin-top: 10px;
  border-radius: 10px;
  position: relative;
  z-index: 2;
  margin-bottom: 35px;
}
.list__terms1 {
  font-size: 12px;
  text-align: center;
  padding: 0 .4rem .4rem .5rem;
}
.list__terms2 {
  font-size: 12px;
  margin-top: 10px;
}
.list__terms2 a {
  text-decoration: underline;
}
/* extra term unfold  */
.wheelofgenesis-bonuses-ul .offer .offer-wrap  {
  position: relative;
  z-index: 2;
}
.wheelofgenesis-bonuses-ul .offer .offer-wrap .offer-inner  {
  position: relative;
  z-index: 8;
  border-radius: 10px;
  min-height: 160px;
  box-shadow: 3px 3px 5px 0 #00000099;
}
.wheelofgenesis-bonuses-ul li.offer .offer-wrap:after {
    content: '';
    position: absolute;
    background: #41abc4;
    display: block;
    bottom: -10px;
    right: -10px;
    min-width: 100%;
    height: 178px;
    border-radius: 10px;
    z-index: 1;
}
.extra-terms {
    margin: -10px -10px -10px 10px;
    padding: 32px;
    background-color: #41abc4;
    display: none;
    border-radius: 0 0 10px 10px;
}
.list__dropdown-header {
    display: grid;
    position: relative;
    font-weight: 600;
    font-size: 12px;
    text-transform: uppercase;
    padding-bottom: 8px;
    color: #ffffff;
    grid-template-columns: auto!important;
}
.extra-term-fold-btn {
  position: absolute;
  right: 0;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  padding: 0;
  border: 1px solid #10e0ff;
  background: #10e0ff;
  cursor: pointer;
  z-index: 3;
  bottom: -15px;
  left: 0;
  margin: auto;
}
.extra-term-fold-btn .list__arrow-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.extra-term-fold-btn .list__arrow-container:after {
  content: '+';
  position: absolute;
  display: block;
  font-size: 33px;
  line-height: 33px;
  margin: auto;
  text-align: center;
  width: 100%;
  left: 0;
  top: 0;
  color: #ffffff;
}
.wheelofgenesis-bonuses-ul li.offer.open .extra-terms {
  display: block;
}
.wheelofgenesis-bonuses-ul li.offer.open .extra-term-fold-btn {
  background: #000000;
  border-color: #000000;
}

.wheelofgenesis-bonuses-ul li.offer.open .extra-term-fold-btn .list__arrow-container:after {
  transform: rotateZ(45deg);
}
.list__dropdown-list>ul,
.list__dropdown-description>p,
.list__dropdown-description>ul{
    background-color: #338ea3;
    padding: 9px 20px!important;
    border-radius: 10px;
    font-size: 13px;
    color: #ffffff;
    margin: 0;
}
.list__dropdown-description {
  margin-bottom: 30px;
}
.list__dropdown-image {
    vertical-align: middle;
    margin: 0 .6rem 0 0;
}
.list__dropdown-pros, .list__dropdown-cons {
    display: grid;
    gap: .5rem;
}
.action-btn {
  text-align: center;
}
.action-btn a {
  text-decoration: none;
  padding: 12px 20px;
  border-radius: 30px;
  text-align: center;
  box-shadow: 3px 3px 5px 0 #00000099;
  display: inline-block;
  vertical-align: middle;
}
@media(min-width: 992px){
    .list__terms1 {
        padding: 0 200px 40px;
    }
    .wheelofgenesis-bonuses-ul li.offer .offer-wrap:after {
        height: 140px;
    }
}
/* extra term -unfold - DAB */
/********** Mobile view ************/
@media(max-width: 1439px){
  .wheelofgenesis-payment-icon-inner {
    width: 78%;
  }
}
@media(max-width: 1250px){
  .wheelofgenesis-payment-icon-inner {
    width: 90%;
  }
}
@media (min-width: 1200px){
  .container {
      max-width: 1440px;
  }
}
@media(max-width: 1199px){
  .container {
    max-width: 100%;
  }
  .wheelofgenesis-payment-icon-inner {
      width: 100%;
  }
  .licensing-block {
    width: 90%;
  }
  .footer-icon {
    margin: 0 7px;
  }
}
@media(max-width: 991px){
  .wheelofgenesis-bonuses-ul .welcome-offer {
    width: 22%;
  }
  .wheelofgenesis-bonuses-ul .free-spins {
    width: 13%;
  }
  .vertical-bonus a {
    padding: 11px 15px;
    font-size: 13px;
  }
  .vertical-free-spins .games {
    font-size: 12px;
  }
  .vertical-terms p {
    font-size: 11px;
  }
  .welcome-offer .vertical-offer {
    font-size: 12px;
  }
}
@media(max-width: 767px){
  .wheelofgenesis-bonuses-ul li.offer-title {
    display: none;
  }
  .wheelofgenesis-bonuses-ul .offer {
    margin-bottom: 10px;
    display: flex;
    position: relative;
    flex-wrap: wrap;
  }
  .wheelofgenesis-bonuses-ul .no {
    width: auto;
    padding: 0;
    text-align: left;
    position: absolute;
    top: 20px;
    left: 20px;
  }
  .wheelofgenesis-bonuses-ul .casino {
    width: 100%;
    padding: 0;
    text-align: center;
    padding-top: 40px;
  }
  .wheelofgenesis-bonuses-ul .welcome-offer {
    width: 100%;
  }
  .wheelofgenesis-bonuses-ul .free-spins {
    background-color: #e841df;
    display: flex;
    border-radius: 100%;
    align-items: center;
    position: absolute;
    top: 25px;
    right: 35px;
    width: 100px;
    height: 100px;
    transform: rotate(-10deg);
    -webkit-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    justify-content: center;
    text-align: center;
  }
  .vertical-free-spins .value {
    font-size: 20px;
    color: #fff;
  }
  .vertical-free-spins .games {
    font-size: 14px;
    color: #fff;
  }
  .welcome-offer .vertical-offer {
    font-size: 14px;
  }
  .wheelofgenesis-bonuses-ul .terms {
    width: 100%;
    padding: 20px 15px;
    text-align: center;
    order: 5;
  }
  .wheelofgenesis-bonuses-ul .free-bonus {
    width: 100%;
    padding: 15px 15px 0 15px;
    text-align: center;
  }
  .vertical-bonus a {
    padding: 14px 35px;
    font-size: 15px;
  }
  .wheelofgenesis-bonuses-ul {
    width: 70%;
    margin: 0 auto;
  }
  .brand-logo img {
    max-width: 180px;
    height: 90px;
  }
  .vertical-terms p {
    font-size: 14px;
  }
  .licensing-block {
    width: 100%;
  }
  .footer-logo {
    padding-bottom: 30px;
  }
  .wheelofgenesis-bonuses-title p {
      width: 100%;
  }
}
@media(max-width: 660px){
  .wheelofgenesis-bonuses-ul {
    width: 80%;
  }
}
@media(max-width: 575px){
  .wheelofgenesis-bonuses-ul {
    width: 100%;
  }
}
@media(max-width: 480px){
  .wheelofgenesis-bonuses-ul .free-spins {
    top: 6px;
    right: 6px;
    width: 80px;
    height: 80px;
    padding: 5px;
  }
  .vertical-free-spins .games {
    font-size: 11px;
  }
  .vertical-free-spins .value {
    font-size: 16px;
  }
  .brand-logo img {
    max-width: 140px;
    height: 60px;
  }
  .licensing-block h2 {
    font-size: 24px;
  }
  .licensing-block p {
    font-size: 14px;
  }
  .wheelofgenesis-bonuses-title h2 {
    font-size: 40px;
    margin: 0 auto 15px auto;
    line-height: 40px;
  }
  .wheelofgenesis-bonuses-title p {
    font-size: 14px;
  }
}
/********** timmer *********/
.winner-timmer {
    display: inline-block;
    vertical-align: middle;
}
.winner-timmer-inner {
    margin-bottom: 30px;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.winner-timmer .val {
    font-family: 'Orbitron',sans-serif;
    font-size: 4rem;
    padding: 0;
    letter-spacing: .1rem;
    min-width: 70px;
}
.winner-timmer .secondsText,
.winner-timmer .minutesText {
    font-size: 14px;
    text-transform: capitalize;
    color:#000;
    font-weight: 500;
}
.winner-timmer .secondsText{
    text-align:right;
}
.winner-timmer .minutesText{
    text-align:left;
}
.winner-timmer-dot {
    display: inline-block;
    vertical-align: top;
    color: #000;
    margin: 0 3px;
    font-size: 40px;
    line-height: 50px;
}
/********** end timmer *********/
</style>

<body class="selection-none" style="height: 100vh; <?php if ($wheelBGImage != '') { ?> 
    background-image: url(<?php echo $wheelBGImage; ?>);
    background-position: center;
    background-size: cover;
<?php }else{ ?>
    background-color: <?php echo $wheelBGColor; ?> ;
    <?php } ?>">

  <?php if(getConfigVal('isSnowEffectOn') == 1){ ?>
    <canvas id="snowCanvas" style="position: absolute;" ></canvas>
  <?php } ?>

    <audio class="audioDemo" id="wheelSound" muted="muted">
        
        <source src="<?php echo base_url(); ?>sound/wheel-sound.m4a" type="audio/mpeg" />
        <source src="<?php echo base_url(); ?>sound/wheel-sound.ogg" type="audio/ogg" />
        <source src="<?php echo base_url(); ?>sound/wheel-sound.mp3" type="audio/mpeg" />
        <source src="<?php echo base_url(); ?>sound/wheel-sound.wav" type="audio/mpeg" />
    </audio>
    <audio class="audioDemo" id="winnerSound" muted="muted">
        
        <source src="<?php echo base_url(); ?>sound/winner.m4a" type="audio/mpeg" />
        <source src="<?php echo base_url(); ?>sound/winner.ogg" type="audio/ogg" />
        <source src="<?php echo base_url(); ?>sound/winner.mp3" type="audio/mpeg" />
        <source src="<?php echo base_url(); ?>sound/winner.wav" type="audio/mpeg" />
    </audio>

    <div class="wheel-container row">
        <?php if(@$wheelSlotLogo != ''){ ?>
            <div class="wheel-header-logo">
                <img src="<?php echo $wheelSlotLogo; ?>" class="wheel-logo-img">
            </div>
        <?php } ?>
        
        <div style="height: auto; display: <?php if($wheelBGHeader == '' && $wheelBGDescription == ''){ echo 'none';  } ?>" id="mobileHeaderContainer">
            <div class="mobile-wheel-header" id="mobileBgHeaderDesc" >
                <div class="wheel-title" style="max-height:<?php if($wheelHeaderCustomHeight != '' ){ echo $wheelHeaderCustomHeight.'px'; }else{ echo '56px'; } ?>; overflow:hidden; font-family: <?php echo $wheelBGHeaderStyle; ?>; color: <?php echo $wheelBGHeaderColor; ?>; display: <?php if($wheelBGHeader == ''){ echo 'none';  } ?> ">
                    <?php echo $wheelBGHeader; ?>
                </div>
                <p class="title-txt-small" style="max-height:<?php if($wheelDescriptionCustomHeight != '' ){ echo $wheelDescriptionCustomHeight.'px'; }else{ echo '65px'; } ?>; overflow:hidden;font-family: <?php echo $wheelBGDescriptionStyle; ?>; color: <?php echo $wheelBGDescriptionColor; ?>; display: <?php if($wheelBGDescription == ''){ echo 'none';  } ?>"><?php echo $wheelBGDescription; ?>
                    </p> 
            </div>
        </div>
        <div class="genesis-wheel-circle-wrapper">
            <div class="genesis-wheel-circle-logo">
                <img src="images/logo.png" alt="logo" title="logo">
            </div>
            <div class="genesis-wheel-circle-inner">
                <div class="genesis-wheel-circle-subinner">
                    <div class="genesis-wheel-circle-left">
                        <div class="genesis-wheel-circle-left-inner">
                            <div class="genesis-wheel-circle-left-text">
                                <?php if(!empty($jackpotWheelText1)) { ?>
                                    <h2><?=$jackpotWheelText1?></h2>
                                <?php } ?>
                                <?php if(!empty($jackpotWheelText2)) { ?>
                                    <h3><?=$jackpotWheelText2?></h3>
                                <?php } ?> 
                                <?php if(!empty($jackpotWheelText3)) { ?>
                                    <h5><?=$jackpotWheelText3?></h5>
                                <?php } ?>
                                <?php if(!empty($jackpotWheelText4)) { ?>
                                    <p><?=$jackpotWheelText4?></p>
                                <?php } ?>                                
                            </div>
                        </div>
                    </div>
                    <div id="wrapper" class="genesis-wheel-circle">
                        <div id="wheel-grand-parent">
                            <div id="wheel">
                                <div id="wheel-circle">
                                    <div id="inner-wheel">
                                        <div class="inner-wheel-box">
                                          <?php for ($i=1; $i <= 8; $i++) {


                                              if($multipleStuffArray['wheelGameTileImage'.$i] != ""){ ?>

                                                  <span class="img-txt-<?php echo $i; ?> img-txt">
                                                      <img src="<?php echo $multipleStuffArray['wheelGameTileImage'.$i]; ?>" class="whole-img">
                                                  </span>

                                              <?php }else{ ?>

                                                      <div class="sec" style="border-color:<?php echo $multipleStuffArray['wheelMultiImageBGColor'.$i] ?> transparent;">

                                                          <?php if($multipleStuffArray['wheelGameMultiImage'.$i] != '' && $multipleStuffArray['wheelMultiImageTitle'.$i] != ''){ ?>

                                                              <?php if($i == 1 || $i == 7 || $i == 8){ ?>

                                                                  <span class="img-txt">

                                                                      <div class="sub-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></div>

                                                                      <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img" style="height: 100px;"  />

                                                                  </span>

                                                              <?php }else{ ?>

                                                                  <span class="img-txt">

                                                                      <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img"  style="height: 100px;" />

                                                                      <div class="sub-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></div>

                                                                  </span>

                                                              <?php } ?>

                                                          <?php }else if($multipleStuffArray['wheelGameMultiImage'.$i] != ''){ ?>

                                                              <span class="img-txt">
                                                                  <img src="<?php echo $multipleStuffArray['wheelGameMultiImage'.$i]; ?>" class="sub-img" />
                                                              </span>

                                                          <?php }else if($multipleStuffArray['wheelMultiImageTitle'.$i] != ''){ ?>

                                                              <span class="only-txt" style="font-family: <?php echo $multipleStuffArray['wheelMultiImageTitleFontStyle' .$i]; ?>; color: <?php echo $multipleStuffArray['wheelMultiImageTitleFontColor' .$i]; ?>;"><?php echo @$multipleStuffArray['wheelMultiImageTitle' .$i]; ?></span>

                                                          <?php } ?>

                                                      </div>
                                              
                                          <?php   } 
                                              }
                                          ?>
                                        </div>

                                    </div>
                                    <div id="spin">
                                        <div id="inner-spin"  style="background-image: url(<?php echo @$spinImage; ?>);"></div>
                                        <div id="shine"></div>
                                    </div>
                                </div>
                                <div class="wheel-pin-bg"></div>
                                <!-- <div class="wheel-pin">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin1" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin2" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin3" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin4" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin5" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin6" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin7" class="wheel-pin-img">
                                    <img src="<?php echo base_url(); ?>images/small-pin.png" id="pin8" class="wheel-pin-img">
                                </div> -->
                                <div class="wheel-arrow">
                                    <?php if($wheelNibImage == ""){ ?>
                                        <img src="<?php echo base_url(); ?>images/jackpot_wheel_arrow.png">
                                    <?php }else{ ?>
                                        <img src="<?php echo $wheelNibImage; ?>">
                                    <?php } ?>
                                    
                                </div>
                                <div class="wheel-bottom">
                                  <img src="images/wheel_bottom.png">
                                </div>
                            </div>
                            <div id="mobileWheelBtn" class="wheel-btn">
                                <?php $buttonName = "wheel_btn_".strtolower($language).".png" ?>
                                <img src="<?php echo base_url('images/'.$buttonName) ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="genesis-wheel-circle-right">
                        <div class="genesis-wheel-circle-right-inner">
                            <div class="genesis-wheel-circle-right-button">
                                <button id="spinnow" class="btn"><?php echo !empty($spinNowText)?$spinNowText:'Spin Now' ?></button>
                                <!-- <div class="genesis-wheel-circle-right-disclaimer">Disclaimer</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-4 col-sm-1"></div> -->
        <div class="col-4 col-sm-6" id="sidebar">
            
            <div class="form-title">
                <div id = "desktopBgHeaderDesc" style="text-align: center;">
                    <div class="wheel-title"  style="font-family: <?php echo $wheelBGHeaderStyle; ?>; color: <?php echo $wheelBGHeaderColor; ?>; ">
                        <?php echo $wheelBGHeader; ?>
                    </div>
                    <p class="title-txt-small" style="font-family: <?php echo $wheelBGDescriptionStyle; ?>; color: <?php echo $wheelBGDescriptionColor; ?>; "><?php echo $wheelBGDescription; ?>
                    </p> 
                </div>
            </div>
            <div class="title txt-center form-title side-form-model del-btn" id="userFormDesktop">

                <!-- <div class="register-success" id="successMsgDesk" style="display: none;">
                    <div class="success-container">
                        <img style="width: 30%;" src="<?php echo base_url('images/checkbox.png'); ?>" />
                        <div class="form-success-text">
                            <?php echo $successMsg; ?>   
                        </div>
                    </div>
                </div> -->

                <div id="userInfoFieldsDesk">
                    <div style="font-size: 25px;color: <?php echo $userInfoHeaderFontColor; ?>;"><?php echo $userInfoHeader; ?></div>

                    <div class="form-container color-white">
                        <div class="userInfoError"></div>

                        <?php if($isReady == 1){ ?>

                            <div class="form-container">

                                <?php 

                                $userInfo = json_decode($userInfo);
                                $userInfoRequired = json_decode($userInfoRequired);
                                if (count($userInfoRequired) == 0) {
                                    $userInfoRequired = array();   
                                }

                                $userInfoSubTitle = json_decode($userInfoSubTitle,true);

                                //make associative array for subtitle array
                                $subTitle = array();
                                if (count($userInfoSubTitle) > 0) {
                                    foreach ($userInfoSubTitle as $ufst) {
                                        $subTitle[$ufst['title']] = $ufst['value'];
                                    }    
                                }

                                
                            /*
                                Mobile Number is always required and will always show it to user
                            */

                                $replaceArr = array('Mobilnummer','Mobilnummer','Matkapuhelin','Mobilnummer','Mobile Number');

                            //check how many fields are required

                                $differArrUserInfo = array_diff($userInfo, $replaceArr);

                                $placeholder = '';
                                $mobileNumber = '';

                                foreach (@$userInfo as $uf) {
                                    if (in_array($uf,$replaceArr)) {
                                        $placeholder = $uf.' *'; 
                                        $mobileNumber = str_replace(' ', '', $uf);
                                        $subPlaceholder = $uf;
                                    }
                                }
                                ?>

                                <?php foreach (@$differArrUserInfo as $uInfo) { 
                                    $getValueByGet = str_replace(' ', '', $uInfo);
                                    $bornNameArr = ['Born','Født','Född','Geboren'];
                                    ?>
                                    <?php
                                    if(in_array($uInfo, $bornNameArr)) {
                                    ?>  
                                        <div style="position: relative; height: 60px;">
                                        <!-- START: born section - DAB -->
                                        <label class="born-label" style="color: #ffffff;"><?php echo @$uInfo; ?>:</label>
                                        <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                        <!-- END: born section - DAB -->
                                        </div>
                                    <?php
                                    } else {
                                        $answerLists = [];
                                        if(array_key_exists($uInfo,$subTitle)) {
                                            $answerLists= explode(',',$subTitle[$uInfo]);
                                        }
                                        if(count($answerLists) > 1) {
                                          ?>
                                            <div style="position: relative; height: 60px;">
                                              <label class="question-label"><?php echo @$uInfo; ?>:</label>
                                              <select class="userInfoText question-drop" data-name = "<?php echo $uInfo; ?>">
                                                <option value="">select</option>
                                                <?php
                                                foreach($answerLists as $answer) {
                                                ?>
                                                  <option value="<?php echo $answer; ?>"><?php echo $answer; ?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>
                                            </div>
                                          <?php
                                        } else {
                                        ?>
                                            <div style="position: relative; height: 60px;">
                                              <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>"> 

                                              <div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$uInfo]; ?></font></font></div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                    

                                <?php } ?>
                                <?php if($country == "NL"){ ?>    
                                <div class="test-block" style="position: relative; height: 60px;">
                                    <div class="test-countryCode-input">
                                        <input type="text" id="countryCode" class="model-txt-box txt-center permission-model-text-box" value="<?php echo $countryCode ?>" readonly/>
                                    </div>
                                    <div class="test-mobile-input">
                                        <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumber" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" ><div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                    </div>
                                </div>
                                <?php } else if($country == "CA"){ ?> 
                                    <div class="test-block" style="position: relative; height: 60px;">
                                        <div class="test-countryCode-input">
                                            <select class="model-txt-box txt-center permission-model-text-box" id="areaCode" name="areaCode" style="padding:10px">
                                                <?php foreach($areaCode as $area){ ?>
                                                    <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="test-mobile-input-select">
                                            <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumber" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" ><div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div style="position: relative; height: 60px;">
                                        <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumber" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" ><div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                </div>
                                <?php } ?>

                                <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">

                                <input type="hidden" name="hostName" id="hostName" value="<?php echo @$_GET['hostname']; ?>" />

                                <button class="model-txt-box txt-center form-btn btn_register" data-form-name = 'desktopView' style="background: <?php echo $userInfoButtonBackgroundColor; ?>; color: <?php echo $userInfoButtonFontColor; ?>;"> <?php echo $userInfoButton; ?> </button>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="form-bottom-text">
                        <input type="checkbox" class=" form-check termsAndCondition" name="termsAndCondition">
                        <div class="form-term"  style="color:white;">
                            <?php echo $shortDescriptionOfTerms; ?>
                            <div class="form-term-link">
                                <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_self"><?php echo $shortTermsLinkInUserInfo; ?></a>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>



                    <?php if($language == 'SE'  && $swedenExtraTerms == 1){ ?>

                        <div class="form-bottom-text" style="margin-top: 5px;">
                            <input type="checkbox" class="form-check termsAndConditionForSweden" name="termsAndConditionForSweden">
                            <div class="form-term" style="color: white;">
                                Jag är inte registrerad hos Spelpaus.se
                                <div class="form-term-link">
                                    <a href="https://www.spelpaus.se/" target="_self">Les mer</a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                    <?php } ?>
                </div>

                <?php if(@$hasEighteenPlusTerms){ ?>

                    <div style="padding-top: 10px;">
                        <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?>
                    </div>

                <?php } ?>
            </div>
        </div>

        <?php if($wheelMobileBGHeader == '' || $wheelMobileBGDescription == ''){ ?>

            <div class="mobile-wheel-header wheel-spin-time-txt" id="mobileWheelExcitingText">
                <div class="wheel-title firstname-replace-text">
                    <div class="spin-time-txt"><?php echo $wheelMobileBGHeader; ?></div>
                </div>
                <!-- <div class="title-txt-small firstname-replace-text" style="font-family: <?php echo $wheelMobileBGDescriptionStyle; ?>; color: <?php echo $wheelMobileBGDescriptionColor; ?>; background-color: <?php echo $wheelMobileBGDescriptionBGColor; ?>">
                    <div class="spin-time-txt"><?php echo $wheelMobileBGDescription; ?></div>
                </div> -->
            </div>

        <?php } ?>
        <?php
            if($isDisableCookie == 0) {
        ?>
        <div class="cookie-position" id="cookie-outers">

            <div class="cookie-bg <?php echo ($isOpacityOn==1) ? 'has-opacity-bg' : ''; ?>" style="background: <?php echo @$backgroundFooterBackgroundColor; ?>;"></div>

            <div id="cookieContainer" class="cookie-container selection-none">
                <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
                <div class="cookie-sub-contain">
                    <span class="cookie-txt" style="color: <?php echo @$backGroundFooterFontColor; ?>;">
                        <?php echo @$backgroundFooterFontText; ?>
                        <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" target="_target"  style="color: <?php echo @$backGroundFooterMoreColor; ?>;" ><?php echo @$backgroundFooterMoreText; ?></a>

                    </span>
                    <button class="cookie-btn acceptCookies" style="background-color: <?php echo @$backgroundFooterButtonBackgroundColor; ?>; color: <?php echo @$backGroundFooterButtonFontColor; ?>;"><?php echo @$backgroundFooterButtonText; ?></button>
                </div>

                <div id="cookieTitle" class="main-title txt-center cookie-title selection-none">
                    <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="cookieLink" target="_self" style = "color: <?php echo @$backGroundCookieColor; ?>; font-size : 12px;"></a>
                </div>
                <!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
            </div>  
        </div>
        <?php } ?>
        <div class="form-bottom form-model modal special-26" id="infoFormModel" style="display: none">

            <div class="title txt-center form-title side-form-model" style="background-color: <?php echo $userInfoHeaderBackgroundColor; ?>" id = 'userInfoMobile'>
                <span class="close close-form" style="font-size: 30px;"  id="infoFormModelClose">&times;</span>
                    
                <div id="userInfoFieldsMobile">
                    <div style="font-size: 2.5rem;line-height:25px;color: <?php echo $userInfoHeaderMobileFontColor; ?>;"><?php echo $userInfoHeader; ?></div>
                    <div class="form-container color-white" style="clear: both;">
                        <div class="userInfoError"></div>

                        <?php if($isReady == 1){ ?>

                            <div class="form-container">


                                <?php foreach (@$differArrUserInfo as $uInfo) { 
                                    $getValueByGet = str_replace(' ', '', $uInfo);
                                    $bornNameArr = ['Born','Født','Född','Geboren'];
                                    ?>
                                    <?php
                                    if(in_array($uInfo, $bornNameArr)) {
                                    ?>  
                                        <div style="position: relative; height: 60px;">
                                        <!-- START: born section - DAB -->
                                        <label class="born-label" style="color: #ffffff;"><?php echo @$uInfo; ?>:</label>
                                        <input type="text" class="model-txt-box txt-center userInfoText permission-model-text-box" id="born" data-format="YYYY-MM-DD" data-template="YYYY M D" name="born" value="" data-name = "<?php echo $uInfo; ?>">
                                        <!-- END: born section - DAB -->
                                        </div>
                                    <?php
                                    } else {
                                        $answerLists = [];
                                        if(array_key_exists($uInfo,$subTitle)) {
                                            $answerLists= explode(',',$subTitle[$uInfo]);
                                        }
                                        if(count($answerLists) > 1) {
                                          ?>
                                            <div style="position: relative; height: 60px;">
                                              <label class="question-label"><?php echo @$uInfo; ?>:</label>
                                              <select class="userInfoText question-drop" data-name = "<?php echo $uInfo; ?>">
                                                <option value="">select</option>
                                                <?php
                                                foreach($answerLists as $answer) {
                                                ?>
                                                  <option value="<?php echo $answer; ?>"><?php echo $answer; ?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>
                                            </div>
                                          <?php
                                        } else {
                                        ?>
                                          <div style="position: relative; height: 60px;">
                                              <input type="text" class="model-txt-box txt-center userInfoTextPopup permission-model-text-box" data-name = "<?php echo $uInfo; ?>" placeholder="<?php echo $uInfo; if(in_array($uInfo, $userInfoRequired)){ echo ' *'; } ?>" value="<?php echo @$_GET[$getValueByGet]; ?>" >
                                              <div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo @$subTitle[$uInfo]; ?></font></font></div>
                                          </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                <?php } ?>
                                <?php if($country == "NL"){ ?> 
                                <div class="test-block" style="position: relative; height: 60px;">
                                    <div class="test-countryCode-input">
                                        <input type="text" id="countryCode" class="model-txt-box txt-center permission-model-text-box" value="<?php echo $countryCode ?>" readonly/>
                                    </div>
                                    <div class="test-mobile-input">
                                        <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumberPopup" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                        <div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                    </div>
                                </div>   
                                <?php } else if($country == "CA"){ ?> 
                                    <div class="test-block" style="position: relative; height: 60px;">
                                        <div class="test-countryCode-input">
                                            <select class="model-txt-box txt-center permission-model-text-box" id="areaCode" name="areaCode" style="padding:10px">
                                                <?php foreach($areaCode as $area){ ?>
                                                    <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="test-mobile-input-select">
                                            <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumberPopup" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                            <div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                        </div>
                                    </div>                           
                                <?php }else { ?>
                                    <div style="position: relative; height: 60px;">
                                        <input type="number" class="model-txt-box txt-center permission-model-text-box" id="mobileNumberPopup" placeholder="<?php echo $placeholder; ?>" value="<?php echo @$_GET[$mobileNumber]; ?>" >
                                        <div style="color: <?php echo $userFieldPlaceholderColor; ?>; margin-top: -25px; margin-bottom: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><font style="vertical-align: inherit;"  ><font style="vertical-align: inherit;"><?php echo @$subTitle[$subPlaceholder]; ?></font></font></div>
                                    </div>
                                <?php } ?>     
                                <input type="hidden" name="campaignId" id="campaignId" value="<?php echo @encrypt($campaignId); ?>">

                                <input type="hidden" name="hostName" id="hostName" value="<?php echo @$_GET['hostname']; ?>" />

                                <button class="model-txt-box txt-center form-btn btn_register" data-form-name = 'mobileView' style="background: <?php echo $userInfoButtonBackgroundColor; ?>; color: <?php echo $userInfoButtonFontColor; ?>;"> <?php echo $userInfoButton; ?> </button>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="form-bottom-text">
                        <input type="checkbox" class="form-check termsAndCondition" name="termsAndCondition">
                        <div class="form-term"  style="color:white;">
                            <?php echo $shortDescriptionOfTerms; ?>
                            <div class="form-term-link">
                                <a href="<?php echo base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html'); ?>" id="termsLink" target="_self"><?php echo $shortTermsLinkInUserInfo; ?></a>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                     <?php if($language == 'SE'  && $swedenExtraTerms == 1){ ?>

                        <div class="form-bottom-text" style="margin-top: 5px;">
                            <input type="checkbox" class="form-check termsAndConditionForSweden" name="termsAndConditionForSweden">
                            <div class="form-term" style="color: white;">
                                Jag är inte registrerad hos Spelpaus.se
                                <div class="form-term-link">
                                    <a href="https://www.spelpaus.se/" target="_self">Les mer</a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>

        <div class="winner-modal modal" id="winnerModel" style="display: none">
             
            <div class="winner-model-center">
                <div class="title txt-center form-title winner-model-model">
                  <canvas id="canvas" style="display: none; position: absolute;" ></canvas>  
                  <div class="modal-header">
                    <div class="gradient">
                      <div class="casino-logo">
                        <img class="winning-form-image-tag" alt="spela" title="spela">
                      </div>
                      <button type="button" class="close close-win-model" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                  </div>
                  <div class="modal-body">
                    <div class="modal-body-winner">
                      <div class="offer-content">
                        <div class="text-sm congrats-text orange">Congrats!</div>
                        <div class="text-md winning-form-value-description"></div>
                      </div>
                      <div class="winner-item-left txt-center winning-wheel-scarcity-bar-text"></div>
                      <div class="winner-timmer-wrapper">
                         <div class="winner-timmer-inner">
                            <div class="winner-timmer-min winner-timmer">  
                              <div class="val minutesValue" style="color:black"></div>
                              <!-- <div class="minutesText" style="color:black">MINUTES</div>                           -->
                              <div class="" style="color:black">MINUTES</div>                          
                            </div>
                            <div class="winner-timmer-dot">:</div>
                            <div class="winner-timmer-sec winner-timmer">
                                <div class="val secondsValue" style="color:black"></div>
                                <!-- <div class="secondsText" style="color:black">SECONDS</div> -->
                                <div class="" style="color:black">SECONDS</div>
                            </div>
                          </div>
                      </div>
                      <div class="button">
                        <a href="#!" target="_blank" class="btn btn-primary btn-xlg wheel-win-link winning-btn"><span>Claim Now</span></a>
                      </div>
                      <div class="button button2">
                        <button class="btn btn-primary btn-xlg js-wof-spin spin-again" data-dismiss="winnerModel"><span class="blink">spin again</span></button>
                      </div>
                    </div>
                    <div class="info">
                      <div class="winner-terms">Free spins will be given away the day after deposit after 12 GMT.</div>
                    </div>
                  </div>
                  <div class="tac">                   
                    <?php if(@$hasEighteenPlusTerms){ ?>
                      <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?> 
                    <?php } ?>
                  </div>                  
                </div>
            </div>
        </div>

        <div class="form-bottom modal" id="chanceModel"  style="display: none">
            <div class="chance-model-center">
                <div class="form-title chance-model-model" style="background-color: transparent;">
                    <!-- <span class="close close-chance" style="font-size: 30px;margin-right: 10px;margin-top: 5px;" onClick="closeIcon()">&times;</span> -->
                    <div class="title txt-center " >
                        <div class="chance-title firstname-replace-text" style="color: <?php echo $wheelSecondChanceHeaderFontColor; ?>; font-family: <?php echo $wheelSecondChnaceHeaderStyle; ?>;">
                            <?php echo @$wheelSecondChanceHeader; ?>
                        </div>
                        <div class="chance-desc-container">
                            <?php if ($wheelSecondChanceImage != '') { ?>

                                <div class="chance-img-div">
                                    <img src="<?php echo $wheelSecondChanceImage; ?>" class="chance-img">
                                </div>

                            <?php } ?>

                            <div class="chance-img-txt firstname-replace-text" style="color: <?php echo $wheelSecondChanceDescriptionFontColor; ?>; font-family: <?php echo $wheelSecondChanceDescriptionStyle; ?>;">
                                <?php echo @$wheelSecondChanceDescription; ?>
                            </div>

                            <div class="chance-btn-container">
                                <button class="btn chance-btn secondChanceButton firstname-replace-text" style="background : <?php echo $wheelSecondChanceButtonBGColor; ?>; color: <?php echo $wheelSecondChanceButtonFontColor; ?>; font-family: <?php echo $wheelSecondChanceButtonStyle; ?>;"><?php echo $wheelSecondChanceButtonText; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- term popup( (18+ and compliance text)) - DAB -->
        <div class="term-modal modal" id="termModel" style="display: none">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                    <?php echo @$popupText;	?>   
                  </div>
              </div>
          </div>     
      </div>
    </div>
    <div class="wheelofgenesis-bonuses-top">
      <div class="container-fluid wheelofgenesis-bonuses-wrapper">
      <div class="container">
        <?php
            if(@$footerText1){ ?>
              <div class="footerText1">
                <div class="custom-container">
                  <?php echo $footerText1; ?>
                </div>
              </div>
            <?php }
        ?>
        <?php if(@$hasEighteenPlusTerms){ ?>
              <div style="" class="db-has-eighteen-plus"> <?php echo getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor); ?>
              </div>
        <?php } ?>
        <div class="wheelofgenesis-bonuses-title">
          <h2><?php echo $bonusHeader['title'];?></h2>
          <p><?php echo $bonusHeader['description'];?></p>
        </div>
        <div class="wheelofgenesis-bonuses-ul">
          <ul>
            <li class="offer-title">
                <div class="no"></div>
                <div class="casino">Casino</div>
                <div class="welcome-offer">Welcome offer</div>
                <div class="terms">Terms</div>
                <div class="free-spins">Free Spins</div>
                <div class="free-bonus"></div>
            </li>
            <?php foreach ($bonuses as $key => $bonus) {?>
            <li class="offer">
              <div class="offer-wrap">
                <div class="offer-inner <?php echo ($key % 2 == 0) ? "offer-gray" : "offer-white"?>">
                <div class="top" >
                  <div class="no">
                    <div class="vertical-no"><span><?php echo $key + 1?></span></div>
                  </div>
                  <div class="casino">
                    <div class="brand-logo">
                      <img src="<?php echo $bonus["image"]; ?>" alt="<?php echo $bonus["header"]; ?>" title="<?php echo $bonus["header"]; ?>">
                    </div>
                  </div>
                  <div class="welcome-offer">
                      <div class="vertical-offer"><?php echo $bonus["header"]; ?></div>
                  </div>
                  <div class="terms">
                      <div class="vertical-terms">
                        <a href="<?php echo $bonus["termLink"]; ?>" target="_blank"><?php echo $bonus["term"]; ?></a>
                    </div>
                  </div>
                  <div class="free-spins">
                    <div class="vertical-free-spins">
                      <div class="value"><?php echo $bonus["spins"]; ?></div>
                      <!-- <div class="games">Starburst</div> -->
                    </div>
                  </div>
                  <div class="free-bonus">
                        <div class="vertical-bonus">
                          <a href="<?php echo $bonus["bonusLink"]; ?>" target="_blank" class="btn-primary btn-normal"><?php echo $bonus["buttonName"]; ?></a>
                        </div>
                        <div class="list__terms2">
                          <?php echo $bonus["termText2"]; ?>
                        </div>
                  </div>
                </div>
                <div class="bottom" >
                  <div class="list__terms1">
                    <?php echo $bonus["termText1"]; ?>
                  </div>
                </div>
                <?php 
                  if($isExtraTermsOn	== 1) {
                    if(!empty($bonus["termWagering"]) || !empty($bonus["termBonusStructure"]) || !empty($bonus["termReview"]) || !empty($bonus["termAdvantage"])) {
                    ?>
                    <div class="extra-term-fold-btn">
                      <div class="list__arrow-container"></div>
                    </div>
                    <?php
                    }
                  }
                ?>
                </div>
              </div>
              <?php 
                if($isExtraTermsOn	== 1) {
                  if(!empty($bonus["termWagering"]) || !empty($bonus["termBonusStructure"]) || !empty($bonus["termReview"]) || !empty($bonus["termAdvantage"])) {
                  ?>
                  <div class="extra-terms">
                    <div class="terms-main">
                      <?php echo $bonus["termWagering"] . $bonus["termBonusStructure"] . $bonus["termReview"]. $bonus["termAdvantage"] ; ?>
                    </div>
                    <div class="action-btn">
                      <?php echo $bonus["termActionButton"]; ?>
                    </div>
                  </div>
                  <?php
                  }
                }
              ?>
            </li>                                  
            <?php } ?>
          </ul>
        </div>
        </div>
      </div>
      <!-- <div class="container-fluid wheelofgenesis-payment-wrapper">
        <div class="container">
          <div class="wheelofgenesis-payment-inner">
            <div class="wheelofgenesis-payment-icon-inner">
              <div class="icon">
                <img src="images/custom/visa.svg" alt="visa" title="visa">
              </div>
              <div class="icon">
                <img src="images/custom/mastercard.svg" alt="mastercard" title="mastercard">
              </div>
              <div class="icon">
                <img src="images/custom/maestro.svg" alt="maestro" title="maestro">
              </div>
              <div class="icon">
                <img src="images/custom/neteller.svg" alt="neteller" title="neteller">
              </div>
              <div class="icon">
                <img src="images/custom/skrill.svg" alt="skrill" title="skrill">
              </div>
              <div class="icon">
                <img src="images/custom/trustly-v2.svg" alt="trustly-v2" title="trustly-v2">
              </div>
              <div class="icon">
                <img src="images/custom/sofort.svg" alt="sofort" title="sofort">
              </div>
              <div class="icon">
                <img src="images/custom/giropay.svg" alt="giropay" title="giropay">
              </div>
              <div class="icon">
                <img src="images/custom/paysafecard.svg" alt="paysafecard" title="paysafecard">
              </div>
              <div class="icon">
                <img src="images/custom/boku.svg" alt="boku" title="boku">
              </div>
              <div class="icon">
                <img src="images/custom/euteller.svg" alt="euteller" title="euteller">
              </div>
              <div class="icon">
                <img src="images/custom/ecopayz.svg" alt="ecopayz" title="ecopayz">
              </div>
              <div class="icon">
                <img src="images/custom/interac2.svg" alt="interac2" title="interac2">
              </div>
              <div class="icon">
                <img src="images/custom/idebit.svg" alt="idebit" title="idebit">
              </div>
              <div class="icon">
                <img src="images/custom/instadebit.svg" alt="instadebit" title="instadebit">
              </div>
              <div class="icon">
                <img src="images/custom/easyeft2.svg" alt="easyeft2" title="easyeft2">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid footer">
        <div class="container">
          <div class="licensing-block">
            <h2>LICENSING AND REGULATION</h2>
            <p>Wheel of Genesis is owned and operated by Genesis Global Limited. Genesis Global Limited&nbsp;is incorporated under the laws of Malta (C65325) at registered address 28, GB Buildings, Level 3, Watar Street, Ta’ Xbiex, XBX 1301, Malta. Genesis Global Limited is licensed and regulated by the <a href="#" target="_blank">Malta Gaming Authority</a> with licence number MGA/B2C/314/2015 issued on the 5th August 2016 and also by the <a href="#" target="_blank">UK Gambling Commission</a> with licence number 000-045235-R-324169-008. Gambling can be harmful; our <a href="#" target="_blank">Responsible Gaming page</a>&nbsp;helps you to stay in control.</p>
          </div>
          <div class="footer-logo">
            <div class="footer-icon">
              <img src="images/custom/18.svg" alt="18" title="18">
            </div>
            <div class="footer-icon">
              <img src="images/custom/mga.svg" alt="mga" title="mga">
            </div>
            <div class="footer-icon">
              <img src="images/custom/gc.svg" alt="gc" title="gc">
            </div>
            <div class="footer-icon">
              <img src="images/custom/gambleaware.svg" alt="gambleaware" title="gambleaware">
            </div>
            <div class="footer-icon">
              <img src="images/custom/rgf.svg" alt="rgf" title="rgf">
            </div>
            <div class="footer-icon">
              <img src="images/custom/genesissafeplay.svg" alt="genesissafeplay" title="genesissafeplay">
            </div>
            <div class="footer-icon">
              <img src="images/custom/stodlinjen.svg" alt="stodlinjen" title="stodlinjen">
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <script>
        $(document).ready(function() {
            var wheelMarginTop = <?php echo !empty($wheelTopMargin)? $wheelTopMargin:0 ?>;
            console.log("width : "+ wheelMarginTop);
            if (wheelMarginTop > 0) {
                var winWidth = $(window).width();
                console.log("width : "+ winWidth);
                if (winWidth < 768) {
                    $('#wrapper').css({'margin-top':wheelMarginTop + 'px'})
                }    
            }
        })
    </script>
 <?php $this->load->view('dashboard/jackpot_wheel_js_script'); ?>