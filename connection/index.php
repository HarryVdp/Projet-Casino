<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <div class="container">
        <?php 
        if($_COOKIE['user'] == ''):
        ?>
        <h1>inscription</h1>
        <form action="validation-form/check.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login"> <br>
            <input type="text" name="name" id="name" placeholder="name"> <br>
            <input type="password" name="password" id="password" placeholder="password"> <br>
            <button type="submit">s'inscrire</button>
        </form>
        <br>
        <h1>connection</h1>
        <form action="validation-form/auth.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login"> <br>
            <input type="password" name="password" id="password" placeholder="password"> <br>
            <button type="submit">se connecter</button>
        </form>
    </div>
    <?php else:?>
        <p>Bonjour <?=$_COOKIE['user']?>. Pour quiter appuyer <a href="/exit.php">ici</a></p>
    <?php endif;?>

</body>
</html>