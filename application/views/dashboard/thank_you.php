<div class="thankyou-page" style="display:none;">
    <div class="content-wrapper">
        <!-- <div class="correct-icon">
            <div class="success-icon">
                <div class="success-icon__tip"></div>
                <div class="success-icon__long"></div>
            </div>
        </div> -->
        <?php echo @$thankPageContent; ?>
        <?php
            // timer
            $this->load->view('dashboard/timer');
        ?>
        <?php echo @$thankPageActionButton; ?>
    </div>
</div>