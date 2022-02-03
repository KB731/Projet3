<?php
require_once('database_connexion.php');
$sql = 'SELECT * FROM `liste`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['creer_tache'])) { // On vérifie que la variable POST existe
    if (empty($_POST['creer_tache'])) {  // On vérifie qu'elle a une valeur
        $erreurs = '<h1> Vous devez indiquer la valeure de la tâche </h1>';
    } else {
        $tache = $_POST['creer_tache'];
        $db->exec("INSERT INTO category(name) VALUES('$tache')"); // On insère la tâche dans la base de donnée
        echo ' Catégorie Crée ! ';
    }
}
?>


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
        <input id="inserer" type="text" name="creer_tache"/>
        <button id="envoyer">Créer</button>
    </form>
    <?php
if (isset($erreurs)) {
    ?>
    <p><?php echo $erreurs ?></p>
    <?php
}
?>
</body>
</html>


<?php
if(isset($_POST['create_gite'])){
        if (empty($_POST['create_gite'])) {  // On vérifie qu'elle a une valeur
        $erreurs = '<h1> Vous devez indiquer la valeure de la tâche </h1>';
    } else {
        $tache = $_POST['creer_tache'];
        $db->exec("INSERT INTO category(name) VALUES('$tache')"); // On insère la tâche dans la base de donnée
        echo ' Catégorie Crée ! ';
    }
}
?>
<H1>Crée un nouveau gite </H1>
<form class="taches_input" method="post" action="admin.php">
           <label for="text">Nom du gite</label>
        <input id="inserer" type="text" name="create_gite"/>
        <form></form>
        <label for="text">Description</label>
        <input id="inserer" type="text" name="create_desc"/>
        <form></form>
        <input type="file" name="create_image" />
        <form></form>
        <label>Nombre de lits</label>
        <input type="number" name="create_bed" min="1" max="15" value="1">
        <form></form>
        <label>Nombre de salles de bains</label>
        <input type="number" name="create_bath" min="1" max="15" value="1">
        <form></form>
        <label for="text">Localisation</label>
        <input id="inserer" type="text" name="create_loc"/>
        <form></form>
        <label for="text">Prix</label>
        <input id="inserer" type="number" name="create_price"/>
        <form></form>
        <label for="text">Disponible</label>
  <input type="checkbox" name="dispo_yes">
  <label for="scales">oui</label>
  <input type="checkbox" name="dispo_no">
  <label for="horns">non</label>

        <form></form>
        <button id="envoyer">Créer</button>
    </form>