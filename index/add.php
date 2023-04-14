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
    $_COOKIE['id'] =$id;
   

$sql = "SELECT money FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
      // Récupération de la valeur de la variable "money"
      $row = mysqli_fetch_assoc($result);
      $money = $row["money"];
      $_COOKIE['money'] =$money;
 
  }
  }


 

 $new_money = $money + 100;
 // Mise à jour de la variable "money" dans la base de données
 $sql = "UPDATE users SET money=$new_money WHERE id=$id";
 if (mysqli_query($conn, $sql)) {
     echo "La variable money a été mise à jour avec succès.";
 } else {
     echo "Erreur lors de la mise à jour de la variable money : " . mysqli_error($conn);
 }
header('Location:user.php');
?>