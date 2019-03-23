<?php
	include_once "dbcon.php";		//includes the "connect ot database" file

	//Creates variables which identify with table headers
	$id = $_POST['id'];
	$creator = mysqli_real_escape_string($connect, $_POST['creator']);
	$title = mysqli_real_escape_string($connect, $_POST['title']);
	$type = $_POST['type1'] . $_POST['type2'];
	$identifier = mysqli_real_escape_string($connect, $_POST['identifier']);
	$date = $_POST['date'];
	$language = $_POST['language'];
	$description = mysqli_real_escape_string($connect, $_POST['description']);
	//SQL variable that contains the insert command which calls the text field inputs to table
	$sql = "update eBook_MetaData set creator='$creator', title='$title',	type='$type',	identifier='$identifier',
	date='$date', language='$language', description='$description' where id='$id'";

	mysqli_query($connect, $sql);

	redirect('index.php');		//redirect to home page

	function redirect($url) {
		header("Location:" . $url);
	}

	mysqli_close($connect);			//close mySQL service
