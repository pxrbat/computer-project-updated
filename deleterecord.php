<?php
	include('dbh.inc.php');

		$id=$_GET['id'];
		$sql = "DELETE FROM students WHERE rollno = $id";
		$conn->query($sql);
				

	header('location: view.php');
?>