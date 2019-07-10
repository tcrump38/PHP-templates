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
    $characterName = "tom";
    $characterAge = 1;

    echo ("There was $characterName <br>");
    echo ("He was $characterAge yrs old <br>");
    $characterName = "Mike";
    echo ("He liked the name $characterName <br>");
    echo ("However, he didn't like being $characterAge <br>");

    ?>


</body>
</html>