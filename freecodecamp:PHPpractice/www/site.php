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
//Inheritance
class Chef {
    function makeChicken(){
        echo "the chef makes chicken <br>";
    }
    function makeSalad(){
        echo "the chef makes salad";
    }
    function makeSpecialDish(){
        echo "the chef makes bbq ribs <br>";
    }
}

class italianChef extends Chef{
    function makePasta(){
        echo "the chef makes pasta";
    }//overriding makespecialdish function.
    function makeSpecialDish(){
        echo "the chef makes chicken parm";
    }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new italianChef();
$italianChef->makeSpecialDish();

?>



</body>
</html>