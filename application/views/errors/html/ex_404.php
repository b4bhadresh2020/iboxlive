<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php if(@$pageDisplayTitle){ echo $pageDisplayTitle.' | '; } ?>Game Campaign Portal</title>

    <style type="text/css">
        body{
            background-color: lightyellow;
        }
        p{
            color: blue;
            font-size: 5em;
            text-align: center;
            padding: 200px;
        }
    </style>
    
</head>

<body>
    <div>
        <p>Page not found</p>
        <h2><?php echo @$error_msg; ?></h2>
    </div>
</body>
</html>
