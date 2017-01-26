<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ознайомлення</title>
</head>
<body>
	<style>
		@media print {
			.print_hidden { display: none; }
		</style>
		<div class="print_hidden">
			<a href="../../index.php"> Повернутися</a><br><br>
			<form action="ozn.php" method="GET">
				<fieldset>
					<label for='numb'>Номер</label>
					<input type='text' name='numb' size='30'/><br />
					<label for='date'>Дата</label>
					<input type='text' name='date' size='30'/><br />
					<br>
					<input type="submit" value="Зберегти">
				</fieldset>
			</form>
		</div>
<br><br>
		<?php
		if(isset($_GET['numb']))
		{
			echo "<p>Ознайомлений. Додатково надаю звіт про оцінку транспортного засобу: <br>	
			№ - " . $_GET['numb'] ." від " . $_GET['date'] ." <br><br>
			Iнших документів надати не можу.</p><br><br>
			<p style='float:right'><b>Колпащиков Ю. М.</b></p>";

		}
		?>
	</body>
	</html>