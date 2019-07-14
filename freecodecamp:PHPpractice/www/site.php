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
//Class
class Student{
    var $name;
    var $major;
    var $gpa;
    //constructor
    function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors(){
        if($this->gpa >= 3.5){
            return "true";
        }
        return "false";
        
    }

}

// Object
$student1 = new Student("Jim", "Business", 2.8);

// Object
$student2 = new Student("Pam", "Art", 3.6);

echo $student2->hasHonors();



?>



</body>
</html>