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

</body>
</html>