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
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1], $_SESSION['pioche'][2], $_SESSION['pioche'][3]] ;
    $_SESSION['pioche'];
    $_SESSION['mainjoueur'];
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][2]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][3]["image"], ".png' alt='Image'>";
    $_SESSION['somme'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] + $_SESSION['mainjoueur'][3]["valeur"];
    echo "<br>" ;
    echo "La somme des cartes est :", $_SESSION['somme'];
    ?>

</body>

</html>