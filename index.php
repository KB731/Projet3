<?php


require_once ('DBConnection.php'); 
$db = new DBConnection('bd_lebongite', '127.0.0.1','root',''); /** crée une nouvelle connexion a une BDD */

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

    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Hebergement</a>
            <a href="#">Contactez-nous</a>
            <a href="#">A-propos</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="formulaire">
                <form action="" method="POST">
                    <div>
                        <input type="text">
                    </div>
                    <div>
                        <input type="date">
                    </div>
                    <div>
                        <input type="date">
                    </div>
                    <div>
                        <select name="number_traveller" id="number_traveller">
                            <option value="1 Voyageur">1 Voyageur</option>
                            <option value="2 Voyageurs">2 Voyageurs</option>
                            <option value="3 Voyageurs">3 Voyageurs</option>
                            <option value="4 Voyageurs">4 Voyageurs</option>
                            <option value="5 Voyageurs">5 Voyageurs</option>
                            <option value="6 Voyageurs">6 Voyageurs</option>
                            <option value="7 Voyageurs">7 Voyageurs</option>
                            <option value="8 Voyageurs">8 Voyageurs</option>
                            <option value="9 Voyageurs">9 Voyageurs</option>
                            <option value="10 Voyageurs">10 Voyageurs</option>
                            <option value="11 Voyageurs">11 Voyageurs</option>
                            <option value="12+ Voyageurs">12 et plus</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <footer>
        <div class="footbar">

        </div>
    </footer>

</body>

</html>