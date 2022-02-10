<?php 
if(isset($_POST['Submit'])){ /** si submit est rempli alors  */
    require_once("add_config.php"); /** on a besoin de add_config.php  */
    $sc = new signupConfig($_POST['acc'],$_POST['desc'] ,$_POST['nb'],$_POST['nbt'],$_POST['gl'],$_POST['price']);
    $sc->insertData(); /** on crée un nouveau objet signupConfig et on start la fonction insertData  */
}


?>