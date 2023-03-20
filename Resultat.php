<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
</head>

<body>
    <h1>Le BlackJack</h1>
    <?php
    session_start();
    if ($_SESSION['VictoireJoueur'] == 0) {
        echo "Dommage, tu n'as pas gagné une seule fois contrairement au croupier qui a gagné ", $_SESSION['Victoirecroupier'], " fois !";
        ?>
        <div class="video">
            <video autoplay="autoplay" loop="infinite" src="defaite.mp4"></video>
        </div>
        <?php
    } 
    else if ($_SESSION['Victoirecroupier'] == 0) {
        echo "Bravo, tu as gagné ", $_SESSION['VictoireJoueur'], " fois contrairement au croupier qui n'a même pas gagné une seule fois !";
        ?>
        <div class="video">
            <video autoplay="autoplay" loop="infinite" src="victoire.mp4"></video>
        </div>
        <?php
    } 
    else {
        echo "Tu as gagné ", $_SESSION['VictoireJoueur'], " fois et le croupier a gagné ", $_SESSION['Victoirecroupier'], " fois !";
        echo "<br>";
        if ($_SESSION['Victoirecroupier'] > $_SESSION['VictoireJoueur']) {
            echo "Dommage, le croupier a plus de victoire que toi. C'est donc le croupier qui remporte la victoire !";
            ?>
            <div class="video">
            <video autoplay="autoplay" loop="infinite" src="defaite.mp4"></video>
            </div>
            <?php
        } else {
            echo "Bravo, tu as plus de victoire que le croupier. C'est donc toi qui remporte la victoire !";
            ?>
            <div class="video">
            <video autoplay="autoplay" loop="infinite" src="victoire.mp4"></video>
            </div>
            <?php

        }
    }

    ?>

</body>

</html>