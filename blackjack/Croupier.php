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
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1]];
    $_SESSION['pioche'];
    $_SESSION['mainjoueur'];
    $NbreCarteJoueur= 2;
    $NbreCarteCroupier= 2;
    echo "<br>" ;
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"];
    echo "<br>" ;
    echo "La somme de vos cartes est :", $_SESSION['sommejoueur'] ;

    $maincroupier = [$_SESSION['pioche'][2], $_SESSION['pioche'][3]];
    echo "<br>" ;
    echo "<img src='images/", $maincroupier[0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $maincroupier[1]["image"], ".png' alt='Image'>";
    $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"];

    if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommejoueur'] != 21) {
        $maincroupier = [$_SESSION['pioche'][2], $_SESSION['pioche'][3], $_SESSION['pioche'][4]];
        $NbreCarteCroupier= 3;
        if ($maincroupier[2]['valeur'] == 11 && $_SESSION['sommecroupier'] + $maincroupier[2]['valeur'] > 21){
            $maincroupier[2]['valeur'] = 1;
        }
        $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"];
        echo "<img src='images/", $maincroupier[2]["image"], ".png' alt='Image'>";
        
        if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] < 21) {
            $maincroupier = [$_SESSION['pioche'][2], $_SESSION['pioche'][3], $_SESSION['pioche'][4], $_SESSION['pioche'][5]];
            $NbreCarteCroupier= 4;
            if ($maincroupier[3]['valeur'] == 11 && $_SESSION['sommecroupier'] + $maincroupier[3]['valeur'] > 21){
                $maincroupier[3]['valeur'] = 1;
            }
            $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"] + $maincroupier[3]["valeur"];
            echo "<img src='images/", $maincroupier[3]["image"], ".png' alt='Image'>";
           
            if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] > 21) {
                joueurgagnant();
            } 
            else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
                if ($_SESSION['sommejoueur'] == $_SESSION['sommecroupier'] && $NbreCarteCroupier <= $NbreCarteJoueur){
                    croupiergagnant();
                    }
                    else {joueurgagnant();}
            } 
            else {
                joueurgagnant();
            }
        } 
        else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
            if ($_SESSION['sommejoueur'] == $_SESSION['sommecroupier'] && $NbreCarteCroupier <= $NbreCarteJoueur){
            croupiergagnant();
            }
            else {joueurgagnant();}
        } 
        else {
            joueurgagnant();
        }
    } 
    else if ($_SESSION['sommejoueur'] == 21){
        joueurgagnant();
    }
    else {
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