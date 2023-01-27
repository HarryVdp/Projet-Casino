<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

  $pass = md5($pass."qsdlmfkj09");
   
$mysql = new mysqli('localhost:3306', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo "Utilisateur introuvable";
    exit();
}

setcookie('user', $user['name'], time() + 3600 , "/");
$mysql->close();


header('Location:../index.php');
?>
