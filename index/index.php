<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="main__body">
    <!-- Header -->
    <?php
    error_reporting(E_ERROR | E_PARSE);
    ?>
    <header id="header" class="header">
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="logo"> <a href="index.php"> <img src="../logo_casino_svg/logo-no-background.svg" alt="logo casino royal roja"> </a> </div>
                <ul class="menu">
                    <li class="menu__item"><a href="#about" class="menu__item-link" data-scroll>a propos</a></li>
                    <li class="menu__item"><a href="#game" class="menu__item-link" data-scroll>jeux </a></li>
                    <li class="menu__item"><a href="#contact" class="menu__item-link" data-scroll>Contact</a></li>
                </ul>
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
    <div class="header__content">
        <div class="container">
            <h1 class="header__title">
                Casino
            </h1>
            <p class="header__text">
                Découvrez le project Casino des 5TTB
            </p>
            <a href="#about" class="header__btn">
                Poursuivre
            </a>
        </div>
    </div>
    
</header>


    <!-- Main Page -->
   
    <main id="about" class="main">
    <div class="container">
        <h1 class="main__title">
            A Propos
        </h1>
        
        <div class="main__content">
            <p class="main__text">
                Bonjour, voici notre Casino en ligne. Celui-ci à été créer par 5 étudiants de 5e Secondaire du Collège Notre-Dame de Bon Secours à Binche. Il a été encadré par leur proffesseur : Mme Piron.
                <br>
                <br>
                Ce projet à été lancé en Janvier et a pour but de vous divertir et de nous faire découvrir php, JavaScript et mysql dans le cadre d'un travail de groupe
            </p>
            <div class="main__img">
                <img src="img/photo_groupe.png" alt="Photo du groupe">
            </div>
        </div>
        <a href="#game" class="main__btn">
       <img src="img/arrow-right-solid.svg" alt="" srcset="">
        </a>
    </div>
</main>

    <section id="game" class="game">
    <div class="container">
        <h1 class="game__title">
            jeux
        </h1>
        <div class="game__content">
            <ul class="game__list">
                <li class="game__item">
                    
                    <div class="game__item-hover">
                        <h2 class="game__item-title">
                            jeux 1
                        </h2>
                        <p class="game__item-descript">
                            Dans ce jeu, pour une mise de 150 crédits, vous pouvez faire tourner la roue et essayer de gagner bien plus!                        </p>
                        <a href="../rouealeatoire/rouealeatoire.php" class="game__item-btn">jouer</a>
                    </div>
                </li>
                <li class="game__item game__item-2">
                    <div class="game__item-hover">
                        <h2 class="game__item-title">
                            jeux 2
                        </h2>
                        <p class="game__item-descript">
                            Dans ce jeu, essayez d'exploser le croupier... pour de gagner plein de crédits!                        
                        </p>
                        <a href="../blackjack/index.php" class="game__item-btn">jouer</a>
                    </div>
                </li>
                
                
            </ul>
        </div>
    </div>
</section>
    <!-- Footer -->
    <footer id="contact" class="footer">
    <div class="container">
        <div class="footer">
            <h1 class="footer__title">
                Contact
            </h1>
            <div class="logo"> <img src="img/logo_cndbs.png" alt="logo cndbs binche"> </div>
            <p class="footer__text">
                Collège Notre-Dame de Bon Secours
                <br>
                Rue de Merbes 25, 7130 Binche
                <br>
                5TTB-2022/2023
            </p>
        </div>
    </div>
</footer>

</body>

<script src="./js/scripts.min.js"></script>

</html>