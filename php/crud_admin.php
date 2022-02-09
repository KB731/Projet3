<?php
require_once ('DBConnection.php'); 
$db = new DBConnection('bd_lebongite', '127.0.0.1','root','');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

</head>

<body>

<!-- FORM HTML  -->
    <h1>Ajouter des logements</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="c100">
            <label for="accommodation_title">titre : </label>
            <input type="text" id="accommodation_title" name="accommodation_title" >
        </div>
        <div class="c100">
            <label for="description">description : </label>
            <input type="text" id="description" name="description" >
        </div>
        <div class="c100">
            <label for="number_of_beds">Nombres de lits : </label>
            <input type="number" id="number_of_beds" name="number_of_beds" min="1" max="30" >
        </div>
        <div class="c100">
            <label for="number_of_bathrooms">Nombres de salles de bains : </label>
            <input type="number" id="number_of_bathrooms" name="number_of_bathrooms" min="1" max="" >
        </div>
        <div class="c100">
            <label for="geographic_location">localisation : </label>
            <input type="text" id="geographic_location" name="geographic_location" >
        </div>
        <div class="c100">
            <label for="price">prix : </label>
            <input type="number" id="price" name="price" >
        </div>

        <div class="c100" id="submit">
            <input type="submit" name="LogementSubmit" value="Ajouter un logement">
        </div>

    </form>


</body>

</html>


