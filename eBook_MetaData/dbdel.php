<?php
	include_once "dbcon.php";		//includes the "connect ot database" file

	//Creates variables which identify with table headers
  $id = $_POST['id'];

	//SQL variable that contains the insert command which calls the text field inputs to table
	$sql = "delete from eBook_MetaData where id='$id'";

	mysqli_query($connect, $sql);

	redirect('index.php');		//redirect to home page

	function redirect($url) {
		header("Location:" . $url);
	}

	mysqli_close($connect);			//close mySQL service
