<div id="losePage" class="winner-loser-page">
    <div id="lose-page">
        <div class="lose-top" style="background-color: <?php echo $losingHeaderBGColor; ?>;">
            <div class="ccontainer">
                <div class="win-top-details">
                    <div class="win-main-title" style="color: <?php echo $losingImageHeaderFontColor; ?>; font-family: <?php echo $losingHeaderStyle; ?>;"><?php echo $losingPopupHeader; ?></div>
                    <div class="winner-title txt-center" style="color: <?php echo $losingImageHeaderFontColor; ?>; font-family: <?php echo $losingImageHeaderStyle; ?>;">
                        <?php echo $losingImageHeader; ?>
                    </div>
                </div>
                <div class="win-img">
                    <img src="<?php echo $losingImage; ?>" class="winner-img">
                </div>
            </div>
        </div>
        <div class="lose-bottom">
            <div class="ccontainer">
                <div class="winner-txt">
                    <div class="winner-txt-title" style="color: <?php echo $losingHeaderBelowImageFontColor; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle; ?>;">
                        <?php echo $headerBelowLosingImage; ?>
                    </div>
                </div>
                <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor; ?>; font-family: <?php echo $losingValueDescriptionFontStyle; ?>; background-color: <?php echo $losingValueDescriptionBGColor; ?>;" >
                        <?php echo $losingValue; ?>
                    </div>
                <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle; ?>;">
                    <?php echo $descriptionAfterLosingValue; ?>
                </div>
                <div class="offer-gift winner-bottom-btn">
                    <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink; ?>');" style="color: <?php echo $losingFooterButtonFontColor; ?>; font-family: <?php echo $losingFooterButtonFontStyle; ?>; background-color: <?php echo $losingFooterButtonBGColor; ?>; border-color: <?php echo $losingFooterButtonBGColor; ?>;"><?php echo @$losingFooterButtonText; ?></button>
                </div>
            </div>
        </div>
        <div class="winner-footer">
            <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle; ?>;">
                        <?php echo $descriptionBeforeLosingValue; ?>
            </div>
        </div>
    </div>
    <?php if (@$isAddLosingForm2 == 1) { ?>
        <div id="lose-page2">
            <div class="lose-top" style="background-color: <?php echo $losingHeaderBGColor; ?>;">
                <div class="ccontainer">
                    <div class="win-top-details">
                        <div class="win-main-title" style="color: <?php echo $losingImageHeaderFontColor2; ?>; font-family: <?php echo $losingHeaderStyle2; ?>;"><?php echo $losingPopupHeader2; ?></div>
                        <div class="winner-title txt-center" style="color: <?php echo $losingImageHeaderFontColor2; ?>; font-family: <?php echo $losingImageHeaderStyle2; ?>;">
                            <?php echo $losingImageHeader2; ?>
                        </div>
                    </div>
                    <div class="win-img">
                        <img src="<?php echo $losingImage2; ?>" class="winner-img">
                    </div>
                </div>
            </div>
            <div class="lose-bottom">
                <div class="ccontainer">
                    <div class="winner-txt">
                        <div class="winner-txt-title" style="color: <?php echo $losingHeaderBelowImageFontColor2; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle2; ?>;">
                            <?php echo $headerBelowLosingImage2; ?>
                        </div>
                    </div>
                    <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor2; ?>; font-family: <?php echo $losingValueDescriptionFontStyle2; ?>; background-color: <?php echo $losingValueDescriptionBGColor2; ?>;" >
                            <?php echo $losingValue2; ?>
                        </div>
                    <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor2; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle2; ?>;">
                        <?php echo $descriptionAfterLosingValue2; ?>
                    </div>
                    <div class="offer-gift winner-bottom-btn">
                        <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink2; ?>');" style="color: <?php echo $losingFooterButtonFontColor2; ?>; font-family: <?php echo $losingFooterButtonFontStyle2; ?>; background-color: <?php echo $losingFooterButtonBGColor2; ?>; border-color: <?php echo $losingFooterButtonBGColor2; ?>;"><?php echo @$losingFooterButtonText2; ?></button>
                    </div>
                </div>
            </div>
            <div class="winner-footer">
                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor2; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle2; ?>;">
                            <?php echo $descriptionBeforeLosingValue2; ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if (@$isAddLosingForm3 == 1) { ?>
        <div id="lose-page3">
            <div class="lose-top" style="background-color: <?php echo $losingHeaderBGColor; ?>;">
                <div class="ccontainer">
                    <div class="win-top-details">
                        <div class="win-main-title" style="color: <?php echo $losingImageHeaderFontColor3; ?>; font-family: <?php echo $losingHeaderStyle3; ?>;"><?php echo $losingPopupHeader3; ?></div>
                        <div class="winner-title txt-center" style="color: <?php echo $losingImageHeaderFontColor3; ?>; font-family: <?php echo $losingImageHeaderStyle3; ?>;">
                            <?php echo $losingImageHeader3; ?>
                        </div>
                    </div>
                    <div class="win-img">
                        <img src="<?php echo $losingImage3; ?>" class="winner-img">
                    </div>
                </div>
            </div>
            <div class="lose-bottom">
                <div class="ccontainer">
                    <div class="winner-txt">
                        <div class="winner-txt-title" style="color: <?php echo $losingHeaderBelowImageFontColor3; ?>; font-family: <?php echo $losingHeaderBelowImageFontStyle3; ?>;">
                            <?php echo $headerBelowLosingImage3; ?>
                        </div>
                    </div>
                    <div class="winner-txt-highlight txt-center" style="color: <?php echo $losingValueDescriptionFontColor3; ?>; font-family: <?php echo $losingValueDescriptionFontStyle3; ?>; background-color: <?php echo $losingValueDescriptionBGColor3; ?>;" >
                            <?php echo $losingValue3; ?>
                        </div>
                    <div class="winner-txt-bottom txt-center" style="color: <?php echo $descriptionAfterLosingValueFontColor3; ?>; font-family: <?php echo $descriptionAfterLosingValueFontStyle3; ?>;">
                        <?php echo $descriptionAfterLosingValue3; ?>
                    </div>
                    <div class="offer-gift winner-bottom-btn">
                        <button class="winner-btn font-bold" onclick="javascript:addOfferClick('<?php echo $losingFooterButtonLink3; ?>');" style="color: <?php echo $losingFooterButtonFontColor3; ?>; font-family: <?php echo $losingFooterButtonFontStyle3; ?>; background-color: <?php echo $losingFooterButtonBGColor3; ?>; border-color: <?php echo $losingFooterButtonBGColor3; ?>;"><?php echo @$losingFooterButtonText3; ?></button>
                    </div>
                </div>
            </div>
            <div class="winner-footer">
                <div class="winner-txt-small" style="color: <?php echo $descriptionBeforeLosingValueFontColor3; ?>; font-family: <?php echo $descriptionBeforeLosingValueFontStyle3; ?>;">
                            <?php echo $descriptionBeforeLosingValue3; ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>