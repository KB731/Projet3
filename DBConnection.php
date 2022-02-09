<?php

/* -------------------------------------------------------------------------- */
/*                          Class Connexion a la BDD                          */
/* -------------------------------------------------------------------------- */
class DBConnection {

    /** Info */
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;
/* -------------------------------------------------------------------------- */
/*                                 Constucteur                                */
/* -------------------------------------------------------------------------- */
    public function __construct($dbname, $host, $username, $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }
/* -------------------------------------------------------------------------- */
/*                                     PDO                                    */
/* -------------------------------------------------------------------------- */
    public function getPDO(): PDO
    {
        return $this->pdo ?? $this->pdo = new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->username, $this->password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
        ]);
        }
}

?>