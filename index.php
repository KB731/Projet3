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
<form action="" method="get" class="space" autocomplete="on">
<label for="start">Date du sejours : </label>

<input type="date" id="dates" name="date-start"
       value="2018-07-22"
       min="?" max="?"> 
       <!-- Trouver comment faire en sorte que la personne ne peut pas choisir avant la date du jours -->
<input type="date" id="datee" name="date-end"
       value="2018-07-22"
       min="" max="">
  <div class="space">  

  <label for="quantity">Nombre d'adultes:</label>
  <input autocomplete type="number" id="adult_number" name="adult_number" min="1" max="15">
    <div class="space">  
        
  <label for="quantity">Nombre d'enfants:</label>
  <input type="number" id="child_number" name="child_number" min="0" max="10">
    <div class="space">  

    <label for="first_name">Prénom</label>
    <input type="name" name="first_name" id="first_name" required>
    <div class="space">  

    <label for="name">Nom</label>
    <input type="name" name="name" id="name" required>
    <div class="space">  

    <label for="Adresse">Adresse</label>
    <input type="name" name="Adresse" id="Adresse" required>
    <div class="space">  

    <input type="submit" value="Envoyer">
  </div>
</form>

</body>
</html>
