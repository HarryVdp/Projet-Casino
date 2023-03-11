<?php
   $login = filter_var(trim($_POST['login']));
   $name = filter_var(trim($_POST['name']));
   $pass = filter_var(trim($_POST['password']));
   $money = 0;

if(mb_strlen($login)<5 || mb_strlen($login) >90){
    echo "la longeur du login n'est pas correct";
    exit();
}
else if(mb_strlen($login)<5 || mb_strlen($login) >90){
    echo "la longeur du login n'est pas correct";
    exit();
} else if(mb_strlen($name)<3 || mb_strlen($name) >50){
    echo "la longeur du nom n'est pas correct";
    exit();
}
else if(mb_strlen($pass)<2 || mb_strlen($pass) >8){
    echo "la longeur du mdp n'est pas correct(entre 2 et 6 caractère)";
    exit();
}
$pass = md5($pass."qsdlmfkj09");

$mysql = new mysqli('localhost:3306', 'root', 'root', 'register-bd');

$mysql->query("INSERT INTO `users` (`login`,`password`,`name`) VALUES('$login','$pass','$name')");




// $mysql->query("INSERT INTO `users` (`login`,`password`,`name`) VALUES('$login','$pass','$name')");

$mysql->close();

header('Location:index.php');

?>