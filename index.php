<?php
require_once('database_connexion.php');
$sql = 'SELECT * FROM `liste`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Le Bon Gite</title>
</head>
<body>
    <h1>hello</h1>
</body>
</html>