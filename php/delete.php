<?php 
include ('add.php');

class delete {

public function delete(Hebergement $sc){

    include_once 'database.php'; /** on a besoin de se connecter a la BDD */
    $database = new Database();
    $db = $database->getConnection();


    $this->db->exec('DELETE FROM accommodation WHERE id = '. $sc->id());
}
}

?> 