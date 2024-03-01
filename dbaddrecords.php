<?php
require("dbh.inc.php");

     $name = $_POST["name"];
    $grade = $_POST["grade"];
    $section = $_POST["section"];
    $roll = $_POST["roll"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];



    $sql = "INSERT INTO students (rollNo, Name, Grade, Section, Email, Phone) VALUES ($roll, '$name', $grade, '$section', '$email', '$phone')";
    
    if($conn->query($sql)===TRUE){
    header('location: index.php');
    }







$conn->close();
?>
