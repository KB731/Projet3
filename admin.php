<?php
require_once ('crud_admin.php');
require_once ('DBConnection.php'); 
$db = new DBConnection('bd_lebongite', '127.0.0.1','root',''); /** Utiliser la database connexion */
?>
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