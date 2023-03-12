<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include 'tableauCartes.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>

</head>

<body>
    <h1>Le BlackJack</h1>
    <?php
    $_SESSION['pioche'] = $cartes;
    shuffle($_SESSION['pioche']);
    // Distribution des 2 cartes au joueur
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1]];
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"];
    echo "<br>";
    echo "La somme de tes cartes est de ", $_SESSION['sommejoueur'];
    ?>
    <!-- Si je clique sur le bouton Piocher j'obtiens une variable $_POST['click']=piocher -->
    <form action="Pioche1Joueur.php" method="post">
        <input type="hidden" name="click" value="piocher" />
        <button type="submit">Piocher</button>
    </form>
    <form action="Croupier.php" method="post">
        <input type="hidden" name="click" value="rester" />
        <button type="submit">Rester</button>
    </form>

    <?php
    ?>

</body>

</html>