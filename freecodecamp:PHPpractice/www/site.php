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
    
-Calculator-
<form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <button type="submit">submit</button>
</form>


Answer:
<?php
echo $_GET["num1"] + $_GET["num2"]

?>




</body>
</html>