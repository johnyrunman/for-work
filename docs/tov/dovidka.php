<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Довідка</title>
</head>
<body>
	<style>
		@media print {
			.print_hidden { display: none; }
		}
			body {
				font-family:Tahoma, sans-serif;
			}
			table {
				width: 90%;
				font-family: Tahoma, sans-serif;
				border-collapse: collapse;
				border-spacing: 0;
			}
			td {
				padding-left: 10px;
				border:1px solid black;
				vertical-align: top;
			}
			p {
				font-size: 12pt;
			}
			.tab_head {
				background: #d9dbd2;
				font-family: Tahoma, sans-serif;
				font-size: 10pt;
			}
			.centered {
				padding: 0 10% 0 10%;
			}
			.letter {
				padding: 0 50px;
			}
		</style>
		<div class="print_hidden">
			<a href="../../index.php"> Повернутися</a><br><br>
			<form action="dovidka.php" method="GET">
				<fieldset>
					<label for='markamodel'>Марка та модель</label>
					<input type='text' name='markamodel' size='30'/><br />
					<label for='vin'>Він код</label>
					<input type='text' name='vin' size='30'/><br />
					<label for='suma'>Сума</label>
					<input type='text' name='suma' size='30'/><br />
					<label for='date'>Дата</label>
					<input type='text' name='date' size='30'/><br />
					<br>
					<input type="submit" value="Зберегти">
				</fieldset>
			</form>
		</div>
		<br><br>
		<?php
		if(isset($_GET['markamodel']))
		{
		echo "<div class='letter'>" . $_GET[date] . "<br><br><br> <p style='float:right'>Для надання митним органам</p><br><br><br><br> <p style='text-align: center'><b><i>ДОВІДКА ПРО ВИТРАТИ НА ДОСТАВКУ</i></b></p> <br><br><br>
		Доводимо до Вашого відому, що витрати на доставку автомобіля <table><tr><td class='tab_head'>найменування</td><td class='tab_head'>ідентифікаційний номер</td></tr><tr><td><b>" . $_GET[markamodel] . "</b></td><td><b>" . $_GET[vin] ."</b></td></tr></table> до кордону України складають " . $_GET[suma] . " EUR.<br><br><br><br><br>
		<p style='float:left'>Директор ТОВ «ЛІГА-ТРАНСЕРВІС»</p> <p style='float:right'>Колпащиков Ю. М.</p></div>
		";

	}
	?>
</body>
</html>