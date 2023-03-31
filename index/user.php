<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    echo "L'ID de l'utilisateur  est : " . $id;
} else {
    echo "Aucun résultat trouvé.";
}
$sql = "SELECT money FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
      // Récupération de la valeur de la variable "money"
      $row = mysqli_fetch_assoc($result);
      $money = $row["money"];
      echo "La variable money de l'utilisateur est : " . $money;
  } else {
      echo "Aucun résultat trouvé.";
  } 

  


  
  ?>

    
   
<p>Bonjour <?=$_COOKIE['user']?>. Pour quiter appuyer <a href="exit.php">ici</a></p>


</body>
</html>