<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    




<?php
    $isMale = true;
    $isTall = false;
    if ($isMale && $isTall){
        echo  "you are a male and tall";
    } elseif ($isMale && !$isTall){
        echo "you are a short male";
    } elseif (!$isMale && $isTall) {
        echo "are are not a tall male";
    } else{
        echo "you are not a tall male";
    }


?>




</body>
</html>