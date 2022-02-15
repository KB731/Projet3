<?php
include_once './php/Database.php';
include_once './php/add_categorie.php';
$database = new Database();
$db = $database->getConnection();
?>


<html>
<head>
	<title>Ajouter Gite</title>
</head>

<body>
	<a href="./admin.php">Home</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="./php/add_categorie.php" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>

