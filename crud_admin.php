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


<?php


require './database_connexion.php'; // 
//* bouclette
if (

    isset($_POST['accommodation_title']) && empty($_POST['accommodation_title']) &&
    isset($_POST['description'])  && empty($_POST['description']) &&
    isset($_POST['number_of_beds'])  && empty($_POST['number_of_beds']) &&
    isset($_POST['number_of_bathrooms'])  && empty($_POST['number_of_bathrooms']) &&
    isset($_POST['geographic_location'])  && empty($_POST['geographic_location']) &&
    isset($_POST['price'])  && empty($_POST['price'])
) {

    echo 'Veuillez remplir tout les champs';

 } else {


        $sth = $db->prepare("
INSERT INTO accommodation (accommodation_title, description, number_of_beds, number_of_bathrooms, geographic_location, price)
VALUES (:accommodation_title, :description, :number_of_beds, :number_of_bathrooms, :geographic_location, :price)
");
        $sth->bindParam(':accommodation_title', $accommodation_title);
        $sth->bindParam(':description', $description);
        $sth->bindParam(':number_of_beds', $number_of_beds);
        $sth->bindParam(':number_of_bathrooms', $number_of_bathrooms);
        $sth->bindParam(':geographic_location', $geographic_location);
        $sth->bindParam(':price', $price);

        $accommodation_title = isset($_POST['accommodation_title']);
        $description = isset($_POST['description']);
        $number_of_beds = isset($_POST['number_of_beds']);
        $number_of_bathrooms = isset($_POST['number_of_bathrooms']);
        $geographic_location = isset($_POST['geographic_location']);
        $price = isset($_POST['price']);
        $sth->execute();
    
 }
?>