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
	
	} else {
		
	}
	$sql = "SELECT money FROM users WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	  
	  if (mysqli_num_rows($result) > 0) {
		 
		  $row = mysqli_fetch_assoc($result);
		  $money = $row["money"];
	
	  }
    
    ?>
    <h1 class="h1">BlackJack</h1>
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
    if ($_SESSION['mainjoueur'][1]['valeur'] == 11 && $_SESSION['mainjoueur'][0]['valeur'] + $_SESSION['mainjoueur'][1]['valeur'] > 21){
        $_SESSION['mainjoueur'][1]['valeur'] = 1;
    }
    if ($_SESSION['mainjoueur'][2]["valeur"] == 11 && $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] > 21){
        $_SESSION['mainjoueur'][2]["valeur"] = 1;
    }
    if ($_SESSION['mainjoueur'][3]["valeur"] == 11 && $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] + $_SESSION['mainjoueur'][3]["valeur"]> 21){
        $_SESSION['mainjoueur'][3]["valeur"] = 1;
    }
    $_SESSION['sommejoueur'] = $_SESSION['mainjoueur'][0]["valeur"] + $_SESSION['mainjoueur'][1]["valeur"] + $_SESSION['mainjoueur'][2]["valeur"] + $_SESSION['mainjoueur'][3]["valeur"];
    echo "<br>" ;
    echo "La somme des cartes est :", $_SESSION['sommejoueur'];
    $NbreCarteCroupier = 2;
    $NbreCarteJoueur = 4;
    $maincroupier = [$_SESSION['pioche'][4], $_SESSION['pioche'][5]];
    echo "<br>" ;
    echo "<img src='images/", $maincroupier[0]["image"], ".png' alt='Image'>";
    echo "<img src='images/", $maincroupier[1]["image"], ".png' alt='Image'>";
    $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"];

    if ($_SESSION['sommejoueur'] < 21 && $_SESSION['sommecroupier'] != 21) {
        if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier']) {
            $maincroupier = [$_SESSION['pioche'][3], $_SESSION['pioche'][4], $_SESSION['pioche'][5]];
            $NbreCarteCroupier= 3;
            if ($maincroupier[2]['valeur'] == 11 && $_SESSION['sommecroupier'] + $maincroupier[2]['valeur'] > 21){
                $maincroupier[2]['valeur'] = 1;
            }
            $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"];
            echo "<img src='images/", $maincroupier[2]["image"], ".png' alt='Image'>";
            
            if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] <= 21) {
                if ($_SESSION['sommecroupier'] == 21) {
                    croupiergagnant();
                    $new_money = $money - 150;
                    $sql = "UPDATE users SET money=$new_money WHERE id=$id";
                    $money_result = mysqli_query($conn, $sql);
                } 
                else {
                $maincroupier = [$_SESSION['pioche'][3], $_SESSION['pioche'][4], $_SESSION['pioche'][5], $_SESSION['pioche'][6]];
                $NbreCarteCroupier= 4;
                if ($maincroupier[3]['valeur'] == 11 && $_SESSION['sommecroupier'] + $maincroupier[3]['valeur'] > 21){
                $maincroupier[3]['valeur'] = 1;
                $new_money = $money - 150;
                $sql = "UPDATE users SET money=$new_money WHERE id=$id";
                $money_result = mysqli_query($conn, $sql);
                }
                $_SESSION['sommecroupier'] = $maincroupier[0]["valeur"] + $maincroupier[1]["valeur"] + $maincroupier[2]["valeur"] + $maincroupier[3]["valeur"];
                echo "<img src='images/", $maincroupier[3]["image"], ".png' alt='Image'>";
                
                if ($_SESSION['sommejoueur'] > $_SESSION['sommecroupier'] && $_SESSION['sommecroupier'] > 21) {
                    joueurgagnant();
                } 
                else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
                    if ($_SESSION['sommejoueur'] == $_SESSION['sommecroupier'] && $NbreCarteCroupier > $NbreCarteJoueur){
                        joueurgagnant();
                        }
                        else {croupiergagnant();}
                } 
                else {
                    joueurgagnant();
                }
            } 
        }else if ($_SESSION['sommecroupier'] <= 21 && $_SESSION['sommecroupier'] >= $_SESSION['sommejoueur']) {
            if ($_SESSION['sommejoueur'] == $_SESSION['sommecroupier'] && $NbreCarteCroupier > $NbreCarteJoueur){
                joueurgagnant();
                }
                else {croupiergagnant();}
            } else {
                joueurgagnant();
            }
        } else {
            croupiergagnant();
        }
    } 
    else if ($_SESSION['sommejoueur'] == 21) {
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