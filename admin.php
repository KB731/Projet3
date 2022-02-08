<?php
require_once('database_connexion.php');
require_once('crud_admin.php');
$sql = 'SELECT * FROM `liste`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['creer_cat'])) { // On vérifie que la variable POST existe
    if (empty($_POST['creer_cat'])) {  // On vérifie qu'elle a une valeur
        $erreurs = '<h1> Vous devez indiquer la valeure de la tâche </h1>';
    } else {
        $tache = $_POST['creer_cat'];
        $db->exec("INSERT INTO category(name) VALUES('$tache')"); // On insère la tâche dans la base de donnée
        echo ' Catégorie Crée ! ';
    }
}

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