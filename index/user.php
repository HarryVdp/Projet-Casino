<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>user</title>
</head>
<body>
<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "register-bd";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id_request = "SELECT id FROM users WHERE name='$_COOKIE[user]'";
$id_result = mysqli_query($conn, $id_request);


if (mysqli_num_rows($id_result) > 0) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["id"];
    // echo "L'ID de l'utilisateur  est : " . $id;
} else {
    echo "Aucun résultat trouvé.";
}
$sql = "SELECT money FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
      // Récupération de la valeur de la variable "money"
      $row = mysqli_fetch_assoc($result);
      $money = $row["money"];
    //   echo "La variable money de l'utilisateur est : " . $money;
  } else {
      echo "Aucun résultat trouvé.";
  } 

  


  
?>

    



<header id="header" class="header header__user">
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="navbar">
            <div class="logo"> <a href="index.php"> <img src="../logo_casino_svg/logo-no-background.svg" alt="logo casino royal roja"> </a> </div>
                <ul class="menu">
                    <li class="menu__item"><a href="index.php" class="menu__item-link" data-scroll>a propos</a></li>
                    <li class="menu__item"><a href="index.php" class="menu__item-link" data-scroll>jeux </a></li>
                    <li class="menu__item"><a href="index.php" class="menu__item-link" data-scroll>Contact</a></li>
                </ul>
                <?php 
        if($_COOKIE['user'] == ''):
        ?>
                <ul class="menu menu-reg">
                    <li id="show-login" class="menu__item"><button  class="menu__item-link" >login</button></li>
                    <li id="show-signin" class="menu__item"><button  class="menu__item-link" >sign in </button></li>
                </ul>
                <?php else:?>
       
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
         
    <p class="user__name">user: <?=$_COOKIE['user']?></p>
    

    
    
    <p class="user__wallet">money :  <?= $money ?> </p>
    <div class="user__content">
    <form action="add.php" method="post">
    <button class="user__btn"  type="submit" value="btn-add">ajouter 100 C</button>
  </form>
  <form action="remove.php" method="post">
    <button  class="user__btn" type="submit" value="btn-remove">retirer 100 C</button>
  </form>
    </div>
   
        </div>
    </div>
    
</header>
    
    
    
    
  
</body>
</html>