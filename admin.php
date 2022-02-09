<?php
require_once ('php/crud_admin.php');
include_once './php/database.php';
$database = new Database();
$db = $database->getConnection();?>
<!-- test -->

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