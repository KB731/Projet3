<?php
include_once './php/database.php';
include_once './php/add.php';
$database = new Database();
$db = $database->getConnection();?>
<!-- test -->
<h1>Ajouter des logements</h1>

<form action="./php/add.php" method="post" enctype="multipart/form-data">
    <div class="c100">
        <label for="accommodation_title">titre : </label>
        <input type="text" id="accommodation_title" name="accommodation_title" >
    </div>
    <div class="c100">
        <label for="description">description : </label>
        <input type="text" id="description" name="description" >
    </div>
    <div class="c100">
        <label for="number_of_beds">Nombres de lits : </label>
        <input type="number" id="number_of_beds" name="number_of_beds" min="1" max="30" >
    </div>
    <div class="c100">
        <label for="number_of_bathrooms">Nombres de salles de bains : </label>
        <input type="number" id="number_of_bathrooms" name="number_of_bathrooms" min="1" max="" >
    </div>
    <div class="c100">
        <label for="geographic_location">localisation : </label>
        <input type="text" id="geographic_location" name="geographic_location" >
    </div>
    <div class="c100">
        <label for="price">prix : </label>
        <input type="number" id="price" name="price" >
    </div>

    <div class="c100" id="submit">
        <input type="submit" name="LogementSubmit" value="Ajouter un logement">
    </div>

</form>


</body>

</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<H1>Crée une catégorie </H1>
       <form class="taches_input" method="post" action="admin.php">
           <label for="text">Nom Catégorie</label>
        <input id="inserer" type="text" name="creer_cat"/>
        <button id="envoyer">Créer</button>
    </form>
</body>
</html>

<!-- hello -->