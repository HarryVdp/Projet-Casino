<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
</head>
<body>
<h1>Le 21</h1>
<?php
    session_start();
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1], $_SESSION['pioche'][2]] ;
    $_SESSION['pioche'];
    $_SESSION['mainjoueur'];
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][2]["image"], ".png' alt='Image'>";
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"];
    echo "<br>" ;
    echo "La somme de vos cartes est :", $_SESSION['sommejoueur'] ;

    $maincroupier = [$_SESSION['pioche'][3], $_SESSION['pioche'][4]];
    echo "<img src='images/", $maincroupier[0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $maincroupier[1]["image"], ".png' alt='Image'>";
    $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"];
    echo "<br>" ;
    echo "La somme des cartes du croupier est :", $_SESSION['sommecroupier'] ;    
    
    ?>    
    
</body>
</html>