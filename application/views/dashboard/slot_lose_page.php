<?php
use function GuzzleHttp\json_decode;
    $slotLosingFormDetail = \json_decode($slotLosingFormDetail,true);
?>
<div id="slotLosePage" class="winner-loser-page" style="display:none;">
    <div id="win-page">
        <div class="win-top" style="background-color: <?php echo $slotLosingFormDetail['slotLosingHeaderBGColor'][0]; ?>;">
            <div class="ccontainer">
                <div class="win-top-details">
                    <div class="win-main-title" style="color: <?php echo $slotLosingFormDetail['slotLosingHeaderFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingHeaderStyle'][0]; ?>;"><?php echo $slotLosingFormDetail['slotLosingHeader'][0]; ?></div>
                    <div class="slot-winner-title txt-center" style="color: <?php echo $slotLosingFormDetail['slotLosingDescriptionBeforeImageFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingDescriptionBeforeImageStyle'][0]; ?>;">
                        <?php echo $slotLosingFormDetail['slotLosingDescriptionBeforeImage'][0]; ?>
                    </div>
                </div>
                <div class="win-img">
                    <img src="<?php echo $slotLosingImageForm1; ?>" class="winner-img">
                </div>
            </div>
        </div>
        <div class="win-bottom">
            <div class="ccontainer">
                <div class="winner-txt">
                    <div class="winner-txt-title" style="color: <?php echo $slotLosingFormDetail['slotLosingDescriptionFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingDescriptionStyle'][0]; ?>;">
                        <?php echo $slotLosingFormDetail['slotLosingDescription'][0]; ?>
                    </div>
                </div>
                <div class="winner-txt-highlight txt-center" style="color: <?php echo $slotLosingFormDetail['slotLosingValueDescriptionFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingValueDescriptionStyle'][0]; ?>; " >
                        <?php echo $slotLosingFormDetail['slotLosingValueDescription'][0]; ?>
                </div>
                <div class="offer-gift winner-bottom-btn">
                    <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $slotLosingFormDetail['slotLosingButtonLink'][0]; ?>');" style="color: <?php echo $slotLosingFormDetail['slotLosingButtonFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingButtonStyle'][0]; ?>; background-color: <?php echo $slotLosingFormDetail['slotLosingButtonBGColor'][0]; ?>; border-color: <?php echo $slotLosingFormDetail['slotLosingButtonBGColor'][0]; ?>;"><?php echo $slotLosingFormDetail['slotLosingButtonText'][0]; ?></button>
                </div>
            </div>
        </div>
        <div class="winner-footer">
            <div class="winner-txt-small" style="color: <?php echo $slotLosingFormDetail['slotLosingScarcityBarFontColor'][0]; ?>; font-family: <?php echo $slotLosingFormDetail['slotLosingScarcityBarFontStyle'][0]; ?>;">
                        <?php echo $slotLosingFormDetail['slotLosingScarcityBarText'][0]; ?>
            </div>
        </div>
    </div>
</div>