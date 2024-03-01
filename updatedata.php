<?php

require("dbh.inc.php");

$name = $_POST["name"];
$grade = $_POST["grade"];
$section = $_POST["section"];
$roll = $_POST["roll"];
$email = $_POST["email"];
$phone = $_POST["phone"];
	$sql = "UPDATE students SET rollNo=$roll,Name='$name',Grade=$grade, Section = '$section', Email = '$email', Phone = $phone  WHERE rollno=$roll";
	$conn->query($sql);

header('location: view.php');
?>