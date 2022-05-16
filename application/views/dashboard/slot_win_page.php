<?php
use function GuzzleHttp\json_decode;
    $slotWinningFormDetail = \json_decode($slotWinningFormDetail,true);
?>
<div id="slotWinnerPage" class="winner-loser-page" style="display:none;">
    <div id="win-page">
        <div class="win-top" style="background-color: <?php echo $slotWinningFormDetail['slotWinningHeaderBGColor'][0]; ?>;">
            <div class="ccontainer">
                <div class="win-top-details">
                    <div class="win-main-title" style="color: <?php echo $slotWinningFormDetail['slotWinningHeaderFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningHeaderStyle'][0]; ?>;"><?php echo $slotWinningFormDetail['slotWinningHeader'][0]; ?></div>
                    <div class="slot-winner-title txt-center" style="color: <?php echo $slotWinningFormDetail['slotWinningDescriptionBeforeImageFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningDescriptionBeforeImageStyle'][0]; ?>;">
                        <?php echo $slotWinningFormDetail['slotWinningDescription'][0]; ?>
                    </div>
                </div>
                <div class="win-img">
                    <img src="<?php echo $slotWinningImageForm1; ?>" class="winner-img">
                </div>
            </div>
        </div>
        <div class="win-bottom">
            <div class="ccontainer">
                <div class="winner-txt">
                    <div class="winner-txt-title" style="color: <?php echo $slotWinningFormDetail['slotWinningDescriptionFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningDescriptionStyle'][0]; ?>;">
                        <?php echo $slotWinningFormDetail['slotWinningDescription'][0]; ?>
                    </div>
                </div>
                <div class="winner-txt-highlight txt-center" style="color: <?php echo $slotWinningFormDetail['slotWinningValueDescriptionFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningValueDescriptionStyle'][0]; ?>; " >
                        <?php echo $slotWinningFormDetail['slotWinningValueDescription'][0]; ?>
                </div>
                <div class="offer-gift winner-bottom-btn">
                    <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $slotWinningFormDetail['slotWinningButtonLink'][0]; ?>');" style="color: <?php echo $slotWinningFormDetail['slotWinningButtonFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningButtonStyle'][0]; ?>; background-color: <?php echo $slotWinningFormDetail['slotWinningButtonBGColor'][0]; ?>; border-color: <?php echo $slotWinningFormDetail['slotWinningButtonBGColor'][0]; ?>;"><?php echo $slotWinningFormDetail['slotWinningButtonText'][0]; ?></button>
                </div>
            </div>
        </div>
        <div class="winner-footer">
            <div class="winner-txt-small" style="color: <?php echo $slotWinningFormDetail['slotWinningScarcityBarFontColor'][0]; ?>; font-family: <?php echo $slotWinningFormDetail['slotWinningScarcityBarFontStyle'][0]; ?>;">
                        <?php echo $slotWinningFormDetail['slotScarcityBarText'][0]; ?>
            </div>
        </div>
    </div>
</div>