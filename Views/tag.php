<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="font-style:italic">Tag: <span style="color:blue;font-family:aharoni"></span></h1>
    <?php 
        if(session_status()===PHP_SESSION_NONE){
            session_start();
        }
        //var_dump($data); 
        var_dump($_POST);
        //var_dump($_SESSION);
    
    ?>
</body>
</html>