<?php
class Database{
   
/* -------------------------------------------------------------------------- */
/*                                Database Info                               */
/* -------------------------------------------------------------------------- */
    private $host = "localhost";
    private $db_name = "bd_lebongite";
    private $username = "root";
    private $password = "";
    public $conn;


    /** Fonction for get connexion of BDD */
    public function getConnection(){
   
        $this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo "connexion à la BDD effectuer !";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}
?>

<!-- 

    Database connexion

include_once './php/database.php';
$database = new Database();
$db = $database->getConnection();


-->