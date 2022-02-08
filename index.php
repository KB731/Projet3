<?php

require_once ('DBConnexion.php'); /** Utiliser la database connexion */
$db = new DBConnexion('bd_lebongite', '127.0.0.1','root',''); /** crée une nouvelle connexion a une BDD */

?> 

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styles.css">
<title>Le Bon Gite</title>
</head>


<body>
    <!-- defsdfsdfsdfsdflol -->
<header>
    <nav>
        <div class="navbar">
           <img src="pic\logo.png" alt="logo">
            <ul>
                 <a href="index.php"><h5>ACCUEIL</h5></a>
                <a href=""><h5>RESERVATION</h5></a>
                <a href=""><h5>GALERIE</h5></a>
                <a href=""><h5>CONTACT</h5></a>
                
            </ul>
        </div>
    </nav>
</header>
<footer>
        <div class="footbar">

        </div>
    </footer>
    
</body>
</html>