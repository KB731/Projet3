<?php
require_once('database_connexion.php');
require_once('crud_index.php');
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

  </div>
</form>

</body>
</html>

