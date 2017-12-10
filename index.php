<html>
	<head>
		<title>Перевод из полярных координат в декартовые</title>
	</head>
	<body>
		<?php
			if (isset($_GET['val1'])) {
				$val1 = $_GET['val1'];
			} else {
				$val1 = '';
			}
			
			if (isset($_GET['val2'])) {
				$val2 = $_GET['val2'];
			} else {
				$val2 = '';
			}
		?>
		
		<form method="GET" action="index.php">
			<p>Полярный радиус:<p>
			<input type="text" name="val1" value="<?= htmlspecialchars($val1) ?>">
			<p>Полярный угол (rad):<p>
			<input type="text" name="val2" value="<?= htmlspecialchars($val2) ?>">
			<input type="submit" value="Перевести">
		</form>
		
		<?php
			$val1 = str_replace(',', '.', $val1);
			$val2 = str_replace(',', '.', $val2);
			
			if (is_numeric($val1) && is_numeric($val2)) {
				$x = $val1 * cos($val2);
				$y = $val1 * sin($val2);
				$oX = number_format($x, 2, ',', '');
				$oY = number_format($y, 2, ',', '');
				echo "Декартовы координаты <br/> x : $oX <br/> y : $oY";
			} else if ($val1 != '' || $val2 != '') {
				echo 'В значении не могут присутствовать не числовые значения';
			}
		?>
	</body>
</html>