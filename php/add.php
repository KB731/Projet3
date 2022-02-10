<?php 
if(isset($_POST['Submit'])){
    require_once("add_config.php");
    $sc = new signupConfig($_POST['acc'],$_POST['desc'] ,$_POST['nb'],$_POST['nbt'],$_POST['gl'],$_POST['price']);
    $sc->insertData();
}


?>