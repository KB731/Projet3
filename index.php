
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

<main>
 
    <form action="" method="get" class="space" autocomplete="on">
<label for="start">Date du sejours : </label>
<input type="date" id="dates" name="date-start"
       value="2018-07-22"
       min="?" max="?"> 
       <!-- Trouver comment faire en sorte que la personne ne peut pas choisir avant la date du jours -->
<input type="date" id="datee" name="date-end"
       value="2018-07-22"
       min="" max="">
  <div class="space">  

  <label for="quantity">Nombre d'adultes:</label>
  <input autocomplete type="number" id="adult_number" name="adult_number" min="1" max="15">
    <div class="space">  
        
  <label for="quantity">Nombre d'enfants:</label>
  <input type="number" id="child_number" name="child_number" min="0" max="10">
    <div class="space">  
    <label for="first_name">Prénom</label>
    <input type="name" name="first_name" id="first_name" required>
    <div class="space">  

    <label for="name">Nom</label>
    <input type="name" name="name" id="name" required>
    <div class="space">  

    <label for="Adresse">Adresse</label>
    <input type="name" name="Adresse" id="Adresse" required>
    <div class="space">  

    <label for="postal_code">postal_code</label>
    <input type="name" name="postal_code" id="postal_code" required>
    <div class="space"> 

    <label for="city">city</label>
    <input type="name" name="city" id="city" required>
    <div class="space"> 

    <label for="country">country</label>
    <input type="name" name="country" id="country" required>
    <div class="space"> 

    <label for="country">phone</label>
    <input type="name" name="phone" id="phone" required>
    <div class="space"> 

    <label for="country">phone</label>
    <input type="name" name="phone" id="phone" required>
    <div class="space"> 

    <label for="email">email</label>
    <input type="mail" name="email" id="email" required>
    <div class="space"> 
    <input type="submit" value="Envoyer">
  </div>
</form>

</main>

<footer>
        <div class="footbar">

        </div>
    </footer>
    
</body>
</html>