<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include 'tableauCartes.php';
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
    $_SESSION['pioche'] = $cartes;
    $_SESSION['victoirejoueur'] = 0;
    $_SESSION['victoirecroupier'] = 0;
    shuffle($_SESSION['pioche']);
    // Distribution des 2 cartes au joueur
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1]];
    // array splice  permet de supprimer à partir de l'élément en 2e argument si pas de 3e argument, c'est effacé jusqu'à la fin
    // array_splice($_SESSION['pioche'],0,2);
    // var_dump($_SESSION['mainjoueur']);
    // var_dump($_SESSION['pioche']);
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    if ($_SESSION['mainjoueur'][1]['valeur'] == 11 && $_SESSION['mainjoueur'][0]['valeur'] + $_SESSION['mainjoueur'][1]['valeur'] > 21){
        $_SESSION['mainjoueur'][1]['valeur'] = 1;
    }

    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"];
    echo "<br>";
    echo "La somme de tes cartes est de ", $_SESSION['sommejoueur'];
    ?>
    <!-- Si je clique sur le bouton Piocher j'obtiens une variable $_POST['click']=piocher -->
    <?php
    if ($_SESSION['sommejoueur'] == 21) {
        echo "<br>";
        echo "Tu as obtenu 21. Tu remportes donc ce round !";
        $_SESSION['VictoireJoueur'] = $_SESSION['VictoireJoueur'] + 1;
    ?>
        <form action="index.php" method="post">
            <input type="hidden" name="click" value="Rejouer" />
            <button type="submit">Rejouer</button>
        </form>
        <form action="Resultat.php" method="post">
            <input type="hidden" name="click" value="Voir les résultats" />
            <button type="submit">Voir les résultats</button>
        </form>
    <?php
    } 
    else {
    ?>
        <form action="Pioche1Joueur.php" method="post">
            <input type="hidden" name="click" value="piocher" />
            <button type="submit">Piocher</button>
        </form>
        <form action="Croupier.php" method="post">
            <input type="hidden" name="click" value="rester" />
            <button type="submit">Rester</button>
        </form>
    <?php
    }
?>
    

</body>

</html>