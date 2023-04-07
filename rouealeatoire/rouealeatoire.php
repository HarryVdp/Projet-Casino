<!DOCTYPE html>
<html lang="fr">
<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=0">
    <link rel="stylesheet" href="styleroue.css">
    <title>Roue de la fortune </title>
</head>
<body>
	<button id="spin">150<br/>Spin</button>
	<span class="arrow"></span>
	<button id="reload-button" onclick="location.reload();">Recharger la page</button>
<div class="container">
	
	<div class="one roue__div"><span>125</span> </div>
	<div class="two roue__div"><span>250</span> </div>
	<div class="three roue__div"><span>125</span> </div>
	<div class="four roue__div"><span>75</span> </div>
	<div class="five roue__div"><span>800</span> </div>
	<div class="six roue__div"><span>100</span> </div>
	<div class="seven roue__div"><span>1200</span> </div>
	<div class="eight roue__div"><span>85</span> </div>
</div>
<?php
	$money = 1500;
?>
<script>
	var money = <?php echo json_encode($money); ?>;
</script>
	<script src="roue.js"></script>
</body>
</html>