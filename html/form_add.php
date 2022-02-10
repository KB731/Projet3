<html>
<head>
	<title>Ajouter Gite</title>
</head>

<body>
	<a href="../admin.php">Home</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="../php/add.php" method="post" name="form1" >
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
</body>
</html>

