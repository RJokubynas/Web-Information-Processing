<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
</head>
<body>

<div class="flex-container">

	<div>
	<form action="dbins.php" method="POST">
			<span>Creator: </span><input type="text" name="creator" placeholder="Author/Publisher/Service name">
			<br>
			<span>Title: </span><input type="text" name="title" placeholder="Title of publication">
			<br>
			<span>Type: </span>
				<select name="type1">
					<option value=""></option>
			 		<option value="Fiction: ">Fiction</option>
					<option value="Non-Fiction: ">Non-Fiction</option></select><span>
				</span><select name="type2">
					<option value=""></option>
			 		<option value="Drama">Drama</option>
					<option value="Sci-Fi">Science Fiction</option>
					<option value="Science">Scientific</option>
					<option value="Education">Educational</option></select>
			<br>
			<span>Identifier: </span><input type="text" name="identifier" placeholder="ISBN/DOI/URN/URI">
			<br>
			<span>Date of publish: </span><input type="date" name="date">
			<br>
			<span>Language: </span><select name="language">
				<option value=""></option>
		 		<option value="en-US">English US</option>
				<option value="en-IRE">English Irish</option>
				<option value="fr-CA">French Canadian</option>
				<option value="fr-FR">French</option></select>
			<br>
			<span>Description: </span><input type="text" name="description" placeholder="Description of the publication">
			<br>
			<button type="submit" name="submit">Create Row</button>
			<br>
	</form>
	</div>

	<div>
	<form action="dbupdate.php" method="POST">
			<span>ID: </span><input type="number" min="0" name="id" placeholder="ID of row">
			<br>
			<span>Creator: </span><input type="text" name="creator" placeholder="Author/Publisher/Service name">
			<br>
			<span>Title: </span><input type="text" name="title" placeholder="Title of publication">
			<br>
			<span>Type: </span>
				<select name="type1">
					<option value=""></option>
					<option value="Fiction: ">Fiction</option>
					<option value="Non-Fiction: ">Non-Fiction</option></select><span>
				</span><select name="type2">
					<option value=""></option>
					<option value="Drama">Drama</option>
					<option value="Sci-Fi">Science Fiction</option>
					<option value="Science">Scientific</option>
					<option value="Education">Educational</option></select>
			<br>
			<span>Identifier: </span><input type="text" name="identifier" placeholder="ISBN/DOI/URN/URI">
			<br>
			<span>Date of publish: </span><input type="date" name="date">
			<br>
			<span>Language: </span><select name="language">
				<option value=""></option>
		 		<option value="en-US">English US</option>
				<option value="en-IRE">English Irish</option>
				<option value="fr-CA">French Canadian</option>
				<option value="fr-FR">French</option></select>
			<br>
			<span>Description: </span><input type="text" name="description" placeholder="Description of the publication">
			<br>
			<button type="submit" name="rowUpdate">Update row</button>
			<br>
	</form>
	</div>

	<div>
	<form action="dbdel.php" method="POST">
		<br>
		<span>ID: </span><input type="number" min="0" name="id" placeholder="ID of row">
		<br><br>
		<button type="submit" name="rowDel">Delete row</button>
		<br>
	</div>

</div>

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db3'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM eBook_MetaData';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<h1>eBook MetaData table: </h1>
	<table class="eBook_MetaData">
		<thead>
			<tr>
				<th>ID</th>
				<th>Creator</th>
				<th>Title</th>
				<th>Type</th>
				<th>Identifier</th>
				<th>Date</th>
				<th>Language</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['creator'].'</td>
					<td>'.$row['title'].'</td>
					<td>'.$row['type'].'</td>
					<td>'.$row['identifier'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.$row['language'].'</td>
					<td>'.$row['description'].'</td>
				</tr>';

		}?>
		</tbody>
	</table>

</body>
</html>
