<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <?php
   
	
    function joueurgagnant()
    {
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
        echo "<br>";
        echo "La somme des cartes du croupier est de ", $_SESSION['sommecroupier'];
        echo "<br>";
        echo "Tu remportes ce round !";
        $_SESSION['VictoireJoueur'] = $_SESSION['VictoireJoueur'] + 1;
        $new_mney = $money + 150;
        $sql = "UPDATE users SET money=$new_mney WHERE id=$id";
	    $money_result = mysqli_query($conn, $sql);
        
    }

    function croupiergagnant()
    {
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
        echo "<br>";
        echo "La somme des cartes du croupier est de ", $_SESSION['sommecroupier'];
        echo "<br>";
        echo "Le croupier a gagné !";
        $_SESSION['Victoirecroupier'] = $_SESSION['Victoirecroupier'] + 1;
        $new_mney = $money - 150;
        $sql = "UPDATE users SET money=$new_mney WHERE id=$id";
	    $money_result = mysqli_query($conn, $sql);
        
        
    }
    ?>
</body>

</html>