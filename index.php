<!DOCTYPE html>
<html lang="fr">

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
    $cartes = [
        ["image" => "2_trefle", "valeur" => 2, "type" => "Le 2 de trefle"],
        ["image" => "3_trefle", "valeur" => 3, "type" => "Le 3 de trefle"],
        ["image" => "4_trefle", "valeur" => 4, "type" => "Le 4 de trefle"],
        ["image" => "5_trefle", "valeur" => 5, "type" => "Le 5 de trefle"],
        ["image" => "6_trefle", "valeur" => 6, "type" => "Le 6 de trefle"],
        ["image" => "7_trefle", "valeur" => 7, "type" => "Le 7 de trefle"],
        ["image" => "8_trefle", "valeur" => 8, "type" => "Le 8 de trefle"],
        ["image" => "9_trefle", "valeur" => 9, "type" => "Le 9 de trefle"],
        ["image" => "10_trefle", "valeur" => 10, "type" => "Le 10 de trefle"],
        ["image" => "11_trefle", "valeur" => 10, "type" => "Le Valet de trefle"],
        ["image" => "12_trefle", "valeur" => 10, "type" => "La Reine de trefle"],
        ["image" => "13_trefle", "valeur" => 10, "type" => "Le Roi de trefle"],
        ["image" => "14_trefle", "valeur" => 1 or 11, "type" => "L'as de trefle"],
        ["image" => "2_pic", "valeur" => 2, "type" => "Le 2 de pic"],
        ["image" => "3_pic", "valeur" => 3, "type" => "Le 3 de pic"],
        ["image" => "4_pic", "valeur" => 4, "type" => "Le 4 de pic"],
        ["image" => "5_pic", "valeur" => 5, "type" => "Le 5 de pic"],
        ["image" => "6_pic", "valeur" => 6, "type" => "Le 6 de pic"],
        ["image" => "7_pic", "valeur" => 7, "type" => "Le 7 de pic"],
        ["image" => "8_pic", "valeur" => 8, "type" => "Le 8 de pic"],
        ["image" => "9_pic", "valeur" => 9, "type" => "Le 9 de pic"],
        ["image" => "10_pic", "valeur" => 10, "type" => "Le 10 de pic"],
        ["image" => "11_pic", "valeur" => 10, "type" => "Le Valet de pic"],
        ["image" => "12_pic", "valeur" => 10, "type" => "La Reine de pic"],
        ["image" => "13_pic", "valeur" => 10, "type" => "Le Roi de pic"],
        ["image" => "14_pic", "valeur" => 1 or 11, "type" => "L'as de pic"],
        ["image" => "2_carreau", "valeur" => 2],
        ["image" => "3_carreau", "valeur" => 3],
        ["image" => "4_carreau", "valeur" => 4],
        ["image" => "5_carreau", "valeur" => 5],
        ["image" => "6_carreau", "valeur" => 6],
        ["image" => "7_carreau", "valeur" => 7],
        ["image" => "8_carreau", "valeur" => 8],
        ["image" => "9_carreau", "valeur" => 9],
        ["image" => "10_carreau", "valeur" => 10],
        ["image" => "11_carreau", "valeur" => 10],
        ["image" => "12_carreau", "valeur" => 10],
        ["image" => "13_carreau", "valeur" => 10],
        ["image" => "14_carreau", "valeur" => 1 or 11],
        ["image" => "2_coeur", "valeur" => 2],
        ["image" => "3_coeur", "valeur" => 3],
        ["image" => "4_coeur", "valeur" => 4],
        ["image" => "5_coeur", "valeur" => 5],
        ["image" => "6_coeur", "valeur" => 6],
        ["image" => "7_coeur", "valeur" => 7],
        ["image" => "8_coeur", "valeur" => 8],
        ["image" => "9_coeur", "valeur" => 9],
        ["image" => "10_coeur", "valeur" => 10],
        ["image" => "11_coeur", "valeur" => 10],
        ["image" => "12_coeur", "valeur" => 10],
        ["image" => "13_coeur", "valeur" => 10],
        ["image" => "14_coeur", "valeur" => 1 or 11]
    ];
    echo "<img src='images/", $cartes[$random1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $cartes[$random2]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $cartes[$random3]["image"], ".png' alt='Image'>";

    $valeur1 = $cartes[$random1]["valeur"];
    $valeur2 = $cartes[$random2]["valeur"];
    $joueur1 = $valeur1 + $valeur2;
    $valeur3 = $cartes[$random3]["valeur"];
    $valeur4 = $cartes[$random2]["valeur"];
    $valeur5 = $cartes[$random1]["valeur"];
    $valeur6 = $cartes[$random2]["valeur"];
    $valeur7 = $cartes[$random1]["valeur"];
    $valeur8 = $cartes[$random2]["valeur"];
    $valeur9 = $cartes[$random1]["valeur"];
    $valeur10 = $cartes[$random2]["valeur"];

    ?>

    <form action="button" type="button" name="Add">
        <input type="button" value="Piocher" >
        <?php $test = $joueur1 + $valeur3  ?>
    </form>

    <?php echo $valeur1, "et", $valeur2, "et", $valeur3, "et", $test ?>  

 





</body>

</html>