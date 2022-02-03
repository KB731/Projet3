<?php
require_once('database_connexion.php');
$sql = 'SELECT * FROM `liste`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);



// if (isset($_POST['date-start']) and ($_POST['date-start'])) { // On vérifie que la variable POST existe
//   if (empty($_POST['date-start'])) {  // On vérifie qu'elle a une valeur
//       $erreurs = '<h1> Vous devez indiquer la valeure de la tâche </h1>';
//   } else {
//       $tache = $_POST['date-start'];
//       $db->exec("INSERT INTO date_start(date) VALUES('$tache')"); // On insère la tâche dans la base de donnée
//       echo ' Catégorie Crée ! ';
//   }
// }
?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="css/styles.css">
<head>
    <title>Le Bon Gite</title>
</head>
<body>
<form class="form_input" method="post" action="index.php" >
<label for="start">Date du sejours : </label>

<input type="date" name="date-start" min="?" max="?"> 
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
    <input type="name" name="first_name" id="first_name" >
    <div class="space">  

    <label for="name">Nom</label>
    <input type="name" name="name" id="name" >
    <div class="space">  

    <label for="Adresse">Adresse</label>
    <input type="name" name="Adresse" id="Adresse" >
    <div class="space">  

    <label for="postal_code">postal_code</label>
    <input type="name" name="postal_code" id="postal_code" >
    <div class="space"> 

    <label for="city">city</label>
    <input type="name" name="city" id="city" >
    <div class="space"> 

    <label for="country">country</label>
    <input type="name" name="country" id="country" >
    <div class="space"> 

    <label for="country">phone</label>
    <input type="name" name="phone" id="phone" >
    <div class="space"> 

    <label for="email">email</label>
    <input type="mail" name="email" id="email" >
    <div class="space"> 



    <input type="submit" value="Envoyer">
    <a href="admin.php">Admin</a>
  </div>
</form>

</body>
</html>


<?php

if (
  isset($_POST['id']) && !empty($_POST['id']) &&
  isset($_POST['arrival']) && !empty($_POST['arrival']) &&
  isset($_POST['departure']) && !empty($_POST['departure']) &&
  isset($_POST['adult_number']) && !empty($_POST['adult_number']) &&
  isset($_POST['number_children']) && !empty($_POST['number_children']) && 
  isset($_POST['title']) && !empty($_POST['title']) &&
  isset($_POST['first_name']) && !empty($_POST['first_name']) &&
  isset($_POST['name']) && !empty($_POST['name']) &&
  isset($_POST['adress']) && !empty($_POST['adress']) &&
  isset($_POST['postal_code']) && !empty($_POST['postal_code']) &&
  isset($_POST['city']) && !empty($_POST['city']) &&
  isset($_POST['country']) && !empty($_POST['country'])&&
  isset($_POST['phone']) && !empty($_POST['phone']) &&
  isset($_POST['email']) && !empty($_POST['email']) 
  ) {
  
  
  try {
  
  
  $sth = $db->prepare("
  INSERT INTO `customer_reservation`(`id`, `arrival`, `departure`, `adult_number`, `number_children`, `first_name`, `name`, `adress`, `postal_code`, `city`, `country`, `phone`, `email`)
   VALUES(`:id`, `:arrival`, `:departure`, `:adult_number`, `:number_children`, `:first_name`, `:name`, `:adress`, `:postal_code`, `:city`, `:country`, `:phone`, `:email`)
  ");
  $sth->bindParam(':id', $id);
  $sth->bindParam(':arrival', $arrival);
  $sth->bindParam(':departure', $departure);
  $sth->bindParam(':adult_number', $adult_number);
  $sth->bindParam(':number_children', $number_children);
  $sth->bindParam(':first_name', $first_name);
  $sth->bindParam(':name', $name);
  $sth->bindParam(':adress', $adress);
  $sth->bindParam(':postal_code', $postal_code);
  $sth->bindParam(':city', $city);
  $sth->bindParam(':country', $country);
  $sth->bindParam(':phone', $phone);
  $sth->bindParam(':email', $email);

  
  $id = $_POST['id'];
  $arrival = $_POST['arrival'];
  $departure = $_POST['departure'];
  $adult_number = $_POST['adult_number'];
  $number_children = $_POST['number_children'];
  $first_name = $_POST['first_name'];
  $name = $_POST['name'];
  $adress = $_POST['adress'];
  $postal_code = $_POST['postal_code'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $sth->execute();
  echo 'Stephane Plaza !';
  } catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
  }
  }
  ?> 