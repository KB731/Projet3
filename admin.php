cc<?php
include_once './php/Database.php';
include_once './php/add.php';
$database = new Database();
$db = $database->getConnection();?>
<!-- test -->
<br><br>
<button><a href="form_add.php">Ajouter des logements</a> </button>
<button><a href="create_categorie.php">Ajouter une catégorie</a> </button>

<!-- hello -->