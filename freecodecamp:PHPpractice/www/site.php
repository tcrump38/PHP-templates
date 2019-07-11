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
    
    

<form action="site.php" method="get">
    Name:<input type="text" name="mytime">
    Age: <input type="number" name="age">
    <button type="submit">submit</button>

</form>
your name is
<?php
echo $_GET["mytime"]

?>
<br>
your age is
<?php
echo $_GET["age"]
?>

</body>
</html>