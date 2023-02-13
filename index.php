<!DOCTYPE html>
<html lang="fr">
<?php
include 'tableauCartes.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Le 21</h1>
    <?php
    $random1 = rand(0, 51);
    $random2 = rand(0, 51);
    $random3 = rand(0, 51);
    $random4 = rand(0, 51);
    $random5 = rand(0, 51);
    $random6 = rand(0, 51);
    $random7 = rand(0, 51);
    $random8 = rand(0, 51);
    $random9 = rand(0, 51);
    $random10 = rand(0, 51);
   
    echo "<img src='images/", $cartes[$random1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $cartes[$random2]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $cartes[$random3]["image"], ".png' alt='Image'>";

    $valeur1 = $cartes[$random1]["valeur"];
    $valeur2 = $cartes[$random2]["valeur"];
    $joueur1 = $valeur1 + $valeur2;
    $valeur3 = $cartes[$random3]["valeur"];
    $valeur4 = $cartes[$random4]["valeur"];
    $valeur5 = $cartes[$random5]["valeur"];
    $valeur6 = $cartes[$random6]["valeur"];
    $valeur7 = $cartes[$random7]["valeur"];
    $valeur8 = $cartes[$random8]["valeur"];
    $valeur9 = $cartes[$random9]["valeur"];
    $valeur10 = $cartes[$random10]["valeur"];

    ?>

    <form action="button" type="button" name="Add">
        <input type="button" value="Piocher">
        <?php $sommecartesjoueur = $joueur1 + $valeur3 ?>
    </form>

    <?php echo $joueur1, "+", $valeur3, "=", $sommecartesjoueur ?>







</body>

</html>