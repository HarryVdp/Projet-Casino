<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
</head>

<body>
<nav>
    <div class="container">
    <div class="navbar">
        <div class="logo"> <a href="../index/index.php"> <img src="../logo_casino_svg/logo-no-background.svg"> </a> </div>
 
<?php 
        if($_COOKIE['user'] == ''):
        ?>
                <ul class="menu menu-reg">
                    <li id="show-login" class="menu__item"><button  class="menu__item-link" >login</button></li>
                    <li id="show-signin" class="menu__item"><button  class="menu__item-link" >sign in </button></li>
                </ul>
                <?php else:?>
       <a class="menu__item-link" href="user.php"> <?=$_COOKIE['user'] ?>  </a>
    <?php endif;?>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="popup-signin popup ">
        <div class="popup__content">
            <h2 class="popup__title">sign in</h2>
            <form action="check.php" method="post">
                <input class="popup__input" type="text" name="login" id="login" placeholder="Login"> <br>
                <input  class="popup__input" type="text" name="name" id="name" placeholder="name"> <br>
                <input  class="popup__input" type="password" name="password" id="password" placeholder="password"> <br>
                <button class="popup__btn" type="submit">sign in</button>
                
            </form>
            <button id="close-popup-signin"  class="popup__close-btn">
                <img src="img/close.svg" alt="close">
            </button>
        </div>
    </div>
    <div class="popup-login popup">
        <div class="popup__content">
            <h2 class="popup__title">login</h2>
            <form action="auth.php" method="post">
            <input class="popup__input" type="text" name="login" id="login" placeholder="Login"> <br>
            <input  class="popup__input" type="password" name="password" id="password" placeholder="password"> <br>
            <button class="popup__btn" type="submit">login</button>
            </form>
            <button id="close-popup-login" class="popup__close-btn">
                <img src="img/close.svg" alt="close">
            </button>
        </div>
    </div>
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
    else if ($_SESSION['VictoireJoueur'] == $_SESSION['Victoirecroupier']){
            echo "Il y a égalité car vous avez tout les deux gagné ", $_SESSION['VictoireJoueur'], " fois !";
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