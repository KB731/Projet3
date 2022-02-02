<?php
require_once('database_connexion.php');
$sql = 'SELECT * FROM `liste`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="css/styles.css">
<head>
    <title>Le Bon Gite</title>
</head>
<body>
<form action="" method="get" class="form-example">
<label for="start">Date du sejours : </label>

<input type="date" id="dates" name="date-start"
       value="2018-07-22"
       min="?" max="?"> 
       <!-- Trouver comment faire en sorte que la personne ne peut pas choisir avant la date du jours -->
<input type="date" id="datee" name="date-end"
       value="2018-07-22"
       min="" max="">
  <div class="form-example">  


    <input type="submit" value="Subscribe!">
  </div>
</form>

</body>
</html>