<div id="winnerPage" class="winner-loser-page">
    <div id="win-page">
        <div class="win-top" style="background-color: <?php echo $winningHeaderBGColor; ?>;">
            <div class="ccontainer">
                <div class="win-top-details">
                    <div class="win-main-title" style="color: <?php echo $winningHeaderFontColor; ?>; font-family: <?php echo $winningHeaderStyle; ?>;"><?php echo $winningPopupHeader; ?></div>
                    <div class="winner-title txt-center" style="color: <?php echo $winningImageHeaderFontColor; ?>; font-family: <?php echo $winningImageHeaderStyle; ?>;">
                        <?php echo $winningImageHeader; ?>
                    </div>
                </div>
                <div class="win-img">
                    <img src="<?php echo $winningImage; ?>" class="winner-img">
                </div>
            </div>
        </div>
        <div class="win-bottom">
            <div class="ccontainer">
                <div class="winner-txt">
                    <div class="winner-txt-title" style="color: <?php echo $winningHeaderBelowImageFontColor; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle; ?>;">
                        <?php echo $headerBelowWinningImage; ?>
                    </div>
                </div>
                <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor; ?>; font-family: <?php echo $valueDescriptionFontStyle; ?>; background-color: <?php echo $valueDescriptionBGColor; ?>;" >
                        <?php echo $winningValue; ?>
                    </div>
                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle; ?>;">
                    <?php echo $descriptionAfterWinningValue; ?>
                </div>
                <div class="offer-gift winner-bottom-btn">
                    <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink; ?>');" style="color: <?php echo $footerButtonFontColor; ?>; font-family: <?php echo $footerButtonFontStyle; ?>; background-color: <?php echo $footerButtonBGColor; ?>; border-color: <?php echo $footerButtonBGColor; ?>;<?=($footerButtonClick == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText; ?></button>
                </div>
            </div>
        </div>
        <div class="winner-footer">
            <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle; ?>;">
                        <?php echo $descriptionBeforeWinningValue; ?>
            </div>
        </div>
    </div>
    <?php if (@$isAddWinningForm2 == 1) { ?>
        <div id="win-page2">
            <div class="win-top" style="background-color: <?php echo $winningHeaderBGColor; ?>;">
                <div class="ccontainer">
                    <div class="win-top-details">
                        <div class="win-main-title" style="color: <?php echo $winningHeaderFontColor2; ?>; font-family: <?php echo $winningHeaderStyle2; ?>;"><?php echo $winningPopupHeader2; ?></div>
                        <div class="winner-title txt-center" style="color: <?php echo $winningImageHeaderFontColor2; ?>; font-family: <?php echo $winningImageHeaderStyle2; ?>;">
                            <?php echo $winningImageHeader2; ?>
                        </div>
                    </div>
                    <div class="win-img">
                        <img src="<?php echo $winningImage2; ?>" class="winner-img">
                    </div>
                </div>
            </div>
            <div class="win-bottom">
                <div class="ccontainer">
                    <div class="winner-txt">
                        <div class="winner-txt-title" style="color: <?php echo $winningHeaderBelowImageFontColor2; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle2; ?>;">
                            <?php echo $headerBelowWinningImage2; ?>
                        </div>
                    </div>
                    <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor2; ?>; font-family: <?php echo $valueDescriptionFontStyle2; ?>; background-color: <?php echo $valueDescriptionBGColor2; ?>;" >
                            <?php echo $winningValue2; ?>
                        </div>
                    <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor2; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle2; ?>;">
                        <?php echo $descriptionAfterWinningValue2; ?>
                    </div>
                    <div class="offer-gift winner-bottom-btn">
                        <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink2; ?>');" style="color: <?php echo $footerButtonFontColor2; ?>; font-family: <?php echo $footerButtonFontStyle2; ?>; background-color: <?php echo $footerButtonBGColor2; ?>; border-color: <?php echo $footerButtonBGColor2; ?>;<?=($footerButtonClick2 == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick2 == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText2; ?></button>
                    </div>
                </div>
            </div>
            <div class="winner-footer">
                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle2; ?>;">
                            <?php echo $descriptionBeforeWinningValue2; ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if (@$isAddWinningForm3 == 1) { ?>
        <div id="win-page3">
            <div class="win-top" style="background-color: <?php echo $winningHeaderBGColor; ?>;">
                <div class="ccontainer">
                    <div class="win-top-details">
                        <div class="win-main-title" style="color: <?php echo $winningHeaderFontColor3; ?>; font-family: <?php echo $winningHeaderStyle3; ?>;"><?php echo $winningPopupHeader3; ?></div>
                        <div class="winner-title txt-center" style="color: <?php echo $winningImageHeaderFontColor3; ?>; font-family: <?php echo $winningImageHeaderStyle3; ?>;">
                            <?php echo $winningImageHeader3; ?>
                        </div>
                    </div>
                    <div class="win-img">
                        <img src="<?php echo $winningImage3; ?>" class="winner-img">
                    </div>
                </div>
            </div>
            <div class="win-bottom">
                <div class="ccontainer">
                    <div class="winner-txt">
                        <div class="winner-txt-title" style="color: <?php echo $winningHeaderBelowImageFontColor3; ?>; font-family: <?php echo $winningHeaderBelowImageFontStyle3; ?>;">
                            <?php echo $headerBelowWinningImage3; ?>
                        </div>
                    </div>
                    <div class="winner-txt-highlight txt-center" style="color: <?php echo $valueDescriptionFontColor3; ?>; font-family: <?php echo $valueDescriptionFontStyle3; ?>; background-color: <?php echo $valueDescriptionBGColor3; ?>;" >
                            <?php echo $winningValue3; ?>
                        </div>
                    <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterWinningValueFontColor3; ?>; font-family: <?php echo $descriptionAfterWinningValueFontStyle3; ?>;">
                        <?php echo $descriptionAfterWinningValue3; ?>
                    </div>
                    <div class="offer-gift winner-bottom-btn">
                        <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $winningFooterButtonLink3; ?>');" style="color: <?php echo $footerButtonFontColor3; ?>; font-family: <?php echo $footerButtonFontStyle3; ?>; background-color: <?php echo $footerButtonBGColor3; ?>; border-color: <?php echo $footerButtonBGColor3; ?>;<?=($footerButtonClick3 == 1) ? ' opacity: 0.5;': ''?>" <?= ($footerButtonClick3 == 1) ? 'disabled' : '';?>><?php echo @$winningFooterButtonText3; ?></button>
                    </div>
                </div>
            </div>
            <div class="winner-footer">
                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeWinningValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeWinningValueFontStyle3; ?>;">
                    <?php echo $descriptionBeforeWinningValue3; ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
