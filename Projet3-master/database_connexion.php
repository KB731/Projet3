<?php 
try{
    $db = new PDO('mysql:host=localhost;dbname=bd_lebongite', 'root','');
    $db->exec("UTF8");
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}

