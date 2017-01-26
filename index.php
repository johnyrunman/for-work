<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />

	<title>Заголовок</title>
	<meta content="" name="description" />
	<link rel="shortcut icon" href="favicon.png" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="libs/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />

</head>
<body>
<?php
require 'scripts/settings.php';

 ?>

	<div class="header">
<div class="container">
	<div class="row">
				<div class="col-md-10">
			<?php
				echo $org;
			 ?>
		</div>
		<div class="col-md-2">
			Документи/бланки
		</div>
	</div>
</div>
	</div>

	<div class="container">
<div class="row">
			<div class="col-md-10">
			<?php
			require 'docs/tov/centers.php';
			 ?>
		</div>
		<div class="col-md-2">
		<span>Фірма</span><br>
			<a href="docs/tov/dovidka.php">Довідка</a><br>
			<a href="docs/tov/ozn.php">Ознайомлення</a><br>
			<a href="docs/tov/doruch.html">Доручення</a><br>
			<a href="docs/tov/centers.php">Центри сертифікації</a><br>
			<br>
			<span>Фіз. особа</span><br>
			<a href="#">Довідка</a><br>
			<a href="#">Ознайомлення</a><br>
			<a href="#">Заява на посвідчення</a><br>
			<a href="#">Реквізити</a><br>
			<a href="#">Повернення коштів</a><br>
			<a href="#">Документи для ПДГ</a><br>
			<a href="#">Документи для розмитнення</a><br>
		</div>
</div>
	</div>
	
	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="libs/jquery/jquery-3.1.1.min.js"></script>
	<script src="libs/modernizr/modernizr.js"></script>
	
	<script src="js/common.js"></script>

	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	
</body>
</html>