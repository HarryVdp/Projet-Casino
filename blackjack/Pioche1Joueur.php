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
        $new_money = $money - 150;
        $sql = "UPDATE users SET money=$new_money WHERE id=$id";
	    $money_result = mysqli_query($conn, $sql);
	  

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
        $new_mney = $money + 150;
        $sql = "UPDATE users SET money=$new_mney WHERE id=$id";
	    $money_result = mysqli_query($conn, $sql);
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