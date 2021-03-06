
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php if(@$pageDisplayTitle != ''){ echo $pageDisplayTitle.' |'; } ?> Game Campaign Portal</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        <style type="text/css">
            body{
                background-color: #9098a2;
            }
            .unsubscribe-form {
                width: 340px;
                margin: 50px auto;
            }
            .unsubscribe-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .unsubscribe-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="unsubscribe-form">
            <form action="<?php echo base_url('unsubscribe/manage/'.$campaignBackUrl); ?>" method="post">
                
                <h2 class="text-center">Unsubscribe</h2>

                <?php if(@$error_msg){ ?>
                    <div class="alert alert-danger"><?php echo $error_msg; ?>
                    </div>
                <?php }elseif (@$suc_msg) { ?>
                    <div class="alert alert-success"><?php echo $suc_msg; ?>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?php echo $placeHolder; ?>" name="emailId">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>                                                                 