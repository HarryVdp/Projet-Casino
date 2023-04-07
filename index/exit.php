<?php
setcookie('user', $user['name'], time() - 10600 , "/");
header('Location:index.php');
?>