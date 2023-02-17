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

    $CartesMelange = shuffle($cartes);
    $mainjoueur = [$CartesMelange[0]["valeur"], $CartesMelange[1]["valeur"]];
    echo $mainjoueur[0]["valeur"], $mainjoueur[1]["valeur"];

    ?>

    <form action="index1.php" method="post">
        <input type="hidden" name="click" value="piocher" />
        <button type="submit">Piocher</button>
    </form>
    <form action="index1.php" method="post">
        <input type="hidden" name="click" value="rester" />
        <button type="submit">Rester</button>
    </form>

    <?php

    function piocher($joueur)
    {
        if ($joueur == 'piocher') {
            // $_SESSION['mainJoueur1'] = array_merge($_SESSION['mainJoueur1'], array_splice($_SESSION['pioche'], 0, 1));
            
        }
        if ($joueur == 'rester') {
            $_SESSION['mainJoueur2'] = array_merge($_SESSION['mainJoueur2'], array_splice($_SESSION['pioche'], 0, 1));
        }
    }

    if (isset($_POST['click'])) {
        if ($_POST['click'] == "piocher") {
            piocher('piocher');
        }
        if ($_POST['click'] == "rester") {
            // piocher('j2');
        }
    }
    ?>

</body>

</html>