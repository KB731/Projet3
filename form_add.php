<?php
include_once './php/Database.php';
require_once ('./php/show.php');
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
	<form action="./php/add.php" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Titre du gite</td>
				<td><input type="text" name="acc"></td>
			</tr>
			<tr> 
				<td>description</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr> 
				<td>nombres de lits</td>
				<td><input type="number" name="nb"></td>
			</tr>
			<tr> 
				<td>nombres de douches</td>
				<td><input type="number" name="nbt"></td>
			</tr>
			<tr> 
				<td>localisation</td>
				<td><input type="text" name="gl"></td>
			</tr>
			<tr> 
				<td>prix</td>
				<td><input type="number" name="price"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>


	<html>
		<title> 
			<head> Gite </head>
</title>
<body>

<table algin="center" border="1px" style="width:600px"; line-height:40px;> 
	<tr>
		<th colspan="8"><h2> Gite enregister </h2> </th>

</tr>
		<t>
		<th> ID </th>
		<th> Titre </th>
		<th> Description </th>
		<th> Lits </th>
		<th> salle de bains </th>
		<th> localisation </th>
		<th> prix </th>
</t>

<?php 
while($rows=mysql_fetch_assoc($results))
{
	?>

<tr>
<td> <?php echo $rows['accommodation_title']; ?> </td> 
<td> <?php echo $rows['description']; ?> </td> 
<td> <?php echo $rows['number_of_beds']; ?> </td> 
<td> <?php echo $rows['number_of_bathrooms']; ?> </td> 
<td> <?php echo $rows['geographic_location']; ?> </td> 
<td> <?php echo $rows['price']; ?> </td> 

</tr>


<?php 
}
?>
</table>

</body>
</html> 


