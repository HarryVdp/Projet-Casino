<!DOCTYPE html>
<html lang="fr">
<?php
include 'tableauCartes.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack</title>

</head>

<body>
    <h1>Le 21</h1>
    <?php  
    session_start();
    $_SESSION['pioche'] = $cartes;
    shuffle($_SESSION['pioche']);

// Distribution des 2 carted joueur
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1]];
    // array splice  permet de supprimer à partir de l'élément en 2e argument si pas de 3e agruent, c'est effacé jusqu'au
    array_splice($_SESSION['pioche'],0,2);
    // var_dump($_SESSION['pioche']);
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    echo $_SESSION['mainjoueur'][0]["valeur"],"<br>", $_SESSION['mainjoueur'][1]["valeur"];

    ?>

<!-- Si je clique sur le bouton Piochr j'obtiens un variable $_POST['click']=piocher -->
    <form action="index.php" method="post">
        <input type="hidden" name="click" value="piocher" />
        <button type="submit">Piocher</button>
    </form>
    <form action="index.php" method="post">
        <input type="hidden" name="click" value="rester" />
        <button type="submit">Rester</button>
    </form>

    <?php

    function piocher($joueur)
    {
        if ($joueur == 'piocher') {
            if (isset($_SESSION['mainJoueur1'])){
            $_SESSION['mainJoueur1'] = array_merge($_SESSION['mainJoueur1'], array_splice($_SESSION['pioche'], 0, 1));
            }
            else {$_SESSION['mainJoueur1'] =array_splice($_SESSION['pioche'], 0, 1);}
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