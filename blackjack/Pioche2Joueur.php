<!DOCTYPE html>
<html lang="fr">
<?php
include 'function.php';
?>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
</head>

<body>
    <h1>BlackJack</h1>
    <?php
    session_start();
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1], $_SESSION['pioche'][2], $_SESSION['pioche'][3]];
    $_SESSION['pioche'];
    $_SESSION['mainjoueur'];
    echo "<br>" ;
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][2]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][3]["image"], ".png' alt='Image'>";
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] + $_SESSION['mainjoueur'][3]["valeur"];
    echo "<br>" ;
    echo "La somme des cartes est :", $_SESSION['sommejoueur'];

    $maincroupier = [$_SESSION['pioche'][4], $_SESSION['pioche'][5]];
    echo "<br>" ;
    echo "<img src='images/", $maincroupier[0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $maincroupier[1]["image"], ".png' alt='Image'>";
    $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"];

    if ($_SESSION['sommejoueur'] < 21) {
        if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier']) {
            $maincroupier = [$_SESSION['pioche'][4], $_SESSION['pioche'][5], $_SESSION['pioche'][6]];
            $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"];
            echo "<img src='images/", $maincroupier[2]["image"], ".png' alt='Image'>";
            if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] < 21) {
                $maincroupier = [$_SESSION['pioche'][4], $_SESSION['pioche'][5], $_SESSION['pioche'][6], $_SESSION['pioche'][7]];
                $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"] + $maincroupier[3]["valeur"];
                echo "<img src='images/", $maincroupier[3]["image"], ".png' alt='Image'>";
                if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] < 21) {
                    joueurgagnant();
                } else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
                    croupiergagnant();
                } else {
                    joueurgagnant();
                }
            } else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
                croupiergagnant();
            } else {
                joueurgagnant();
            }
        } else {
            croupiergagnant();
        }
    } else if ($_SESSION['sommejoueur'] == 21) {
        joueurgagnant();
    } else {
        croupiergagnant();
    }

    echo '<br>';
    ?>

    <form action="index.php" method="post">
        <input type="hidden" name="click" value="Rejouer" />
        <button type="submit">Rejouer</button>
    </form>

    <form action="Resultat.php" method="post">
        <input type="hidden" name="click" value="Voir les résultats" />
        <button type="submit">Voir les résultats</button>
    </form>
</body>

</html>