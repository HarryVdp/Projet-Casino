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
    <h1>BlackJack</h1>
    <?php
    session_start();
    $_SESSION['mainjoueur'] = [$_SESSION['pioche'][0], $_SESSION['pioche'][1], $_SESSION['pioche'][2]];
    $_SESSION['pioche'];
    $_SESSION['mainjoueur'];
    echo "<br>" ;
    echo "<img src='images/", $_SESSION['mainjoueur'][0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][1]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $_SESSION['mainjoueur'][2]["image"], ".png' alt='Image'>";
    if ($_SESSION['mainjoueur'][1]['valeur'] == 11 && $_SESSION['mainjoueur'][0]['valeur'] + $_SESSION['mainjoueur'][1]['valeur'] > 21){
        $_SESSION['mainjoueur'][1]['valeur'] = 1;
    }
    
    if ($_SESSION['mainjoueur'][2]["valeur"] == 11 && $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] > 21){
        $_SESSION['mainjoueur'][2]["valeur"] = 1;
    }
    
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"];
    echo "<br>";
    echo "La somme de tes cartes est de : ", $_SESSION['sommejoueur'];

    if ($_SESSION['sommejoueur'] > 21) {
        echo "<br>";
        echo "Tu as dépassé 21 donc le croupier gagne";
        $_SESSION['Victoirecroupier'] = $_SESSION['Victoirecroupier'] + 1;
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
    } else if ($_SESSION['sommejoueur'] == 21) {
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
    } else {
    ?>
        <form action="Pioche2Joueur.php" method="post">
            <input type="hidden" name="click" value="piocher" />
            <button type="submit">Piocher</button>
        </form>
        <form action="Croupier1.php" method="post">
            <input type="hidden" name="click" value="rester" />
            <button type="submit">Rester</button>
        </form>
    <?php
    }
    ?>
</body>

</html>