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
        echo "<br>";
        echo "La somme des cartes du croupier est de ", $_SESSION['sommecroupier'];
        echo "<br>";
        echo "Tu remportes ce round !";
        $_SESSION['VictoireJoueur'] = $_SESSION['VictoireJoueur'] + 1;
        
    }

    function croupiergagnant()
    {
        echo "<br>";
        echo "La somme des cartes du croupier est de ", $_SESSION['sommecroupier'];
        echo "<br>";
        echo "Le croupier a gagné !";
        $_SESSION['Victoirecroupier'] = $_SESSION['Victoirecroupier'] + 1;
        
    }
    ?>
</body>

</html>