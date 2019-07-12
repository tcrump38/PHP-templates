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
    function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        }else{
            return $num3;
        }

    }
    echo getMax(3, 90, 91);

?>




</body>
</html>