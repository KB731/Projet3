<?php


class signupConfig {
    protected $acco;
    protected $desc;
    protected $nb;
    protected $nbt;
    protected $gl;
    protected $price;




    public function __construct($acco, $desc, $nb, $nbt, $gl, $price){
        $this->acco = $acco;
        $this->desc = $desc;
        $this->nb = $nb;
        $this->nbt = $nbt;
        $this->gl = $gl;
        $this->price= $price;

        
      
    }

    public function insertData(){
        include_once 'database.php';
        $database = new Database();
        $db = $database->getConnection();
        $sql="INSERT INTO accommodation (accommodation_title, description, number_of_beds, number_of_bathrooms, geographic_location, price) 
        VALUES (:acc, :desc, :nb, :nbt, :gl, :price)";
            $stm = $db->prepare($sql);
            $stm->bindValue(':acc', $this->acco );
            $stm->bindValue(':desc', $this->desc );
            $stm->bindValue(':nb', $this->nb );
            $stm->bindValue(':nbt', $this->nbt );
            $stm->bindValue(':gl', $this->gl );
            $stm->bindValue(':price', $this->price );

            $stm->execute();
        } 
    }

?> 