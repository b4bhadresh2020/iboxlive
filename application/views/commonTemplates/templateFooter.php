<div class="selection-none tracking-pixel">

</div>

<!-- offer block -->
<!-- <img src="<?php echo base_url(); ?>images/christmas.gif" style="position:fixed;right:0;bottom:0;height:300px"> -->

<script src="<?php echo base_url(); ?>js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>js/combodate.js"></script>
</body>
</html>

<script type="text/javascript">

function userByClick(emailId="",userId=0){
    var campaignId = $('#campaignId').val(); 
    if(emailId != ""){
        $.ajax({
            type: 'post',
            url : BASE_URL + 'home/checkUserByEmail',
            data : {
                emailId     : emailId,
                campaignId  : campaignId
            },
            success : function(userId){
                addUserClick(userId,campaignId);
            }
        });
    }else{
        addUserClick(userId,campaignId);
    }
}

function addUserClick(userId,campaignId){
    $.ajax({
        type: 'post',
        url : BASE_URL + 'home/addUserClick',
        data : {
            campaignId: campaignId,
            userId: userId
        },
        success : function(response){
        }
    });
}

$(document).ready(function(){
    $('#born').combodate({
        minYear: 1920,
        maxYear: 2022,
        smartDays: true,
        firstItem: 'name'
    });
});
</script>


