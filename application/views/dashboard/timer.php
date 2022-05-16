<div id="clockTimer" class="timer" style="display: none;">
    <div id="clockdiv" class="clock">
        <div>
            <span class="digit days"></span>
            <div class="smalltext">Days</div>
        </div>
        <div>
            <span class="digit hours" style="background-color: <?php if($isTransparentTimerBG == 0) { if(!empty($timerBGColor)) { echo $timerBGColor; } else { echo "#222222"; }} else { echo 'transparent'; }?>; color: <?php if(!empty($timerFontColor)) { echo $timerFontColor; } else { echo '#ffffff';}?>;<?php if($isShowTimerBorder == 1){if(!empty($timerBGColor)){echo 'border: 1px solid '.$timerBGColor; }else{ echo 'border: 1px solid #222222';}}else{echo 'border:1px solid transparent';} ?>;border-radius: <?php if(!empty($timerBorderRadius)) {echo $timerBorderRadius; } else { echo '0'; } ?>px;"></span>
            <div class="smalltext" style="color: <?php if(!empty($timerTitleTextColor)) { echo $timerTitleTextColor;} else {echo '#222222';} ?>">Hours</div>
        </div>
        <div>
            <span class="digit minutes" style="background-color: <?php if($isTransparentTimerBG == 0) { if(!empty($timerBGColor)) { echo $timerBGColor; } else { echo "#222222"; }} else { echo 'transparent'; }?>; color: <?php if(!empty($timerFontColor)) { echo $timerFontColor; } else { echo '#ffffff';}?>;<?php if($isShowTimerBorder == 1){if(!empty($timerBGColor)){echo 'border: 1px solid '.$timerBGColor; }else{ echo 'border: 1px solid #222222';}}else{echo 'border:1px solid transparent';} ?>;border-radius: <?php if(!empty($timerBorderRadius)) {echo $timerBorderRadius; } else { echo '0'; } ?>px;"></span>
            <div class="smalltext" style="color: <?php if(!empty($timerTitleTextColor)) { echo $timerTitleTextColor;} else {echo '#222222';} ?>">Minutes</div>
        </div>
        <div> 
            <span class="digit seconds" style="background-color: <?php if($isTransparentTimerBG == 0) { if(!empty($timerBGColor)) { echo $timerBGColor; } else { echo "#222222"; }} else { echo 'transparent'; }?>; color: <?php if(!empty($timerFontColor)) { echo $timerFontColor; } else { echo '#ffffff';}?>;<?php if($isShowTimerBorder == 1){if(!empty($timerBGColor)){echo 'border: 1px solid '.$timerBGColor; }else{ echo 'border: 1px solid #222222';}}else{echo 'border:1px solid transparent';} ?>;border-radius: <?php if(!empty($timerBorderRadius)) {echo $timerBorderRadius; } else { echo '0'; } ?>px;"></span>
            <div class="smalltext" style="color: <?php if(!empty($timerTitleTextColor)) { echo $timerTitleTextColor;} else {echo '#222222';} ?>">Seconds</div>
        </div>
    </div>
</div>
<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
            clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }
   
</script>