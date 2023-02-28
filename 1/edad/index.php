<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de edad</title>
</head>
<body>
	<form method="post">
		<label>Ingrese su fecha de nacimiento:</label><br>
		Día: <input type="number" name="day" min="1" max="31"><br>
		Mes: <input type="number" name="month" min="1" max="12"><br>
		Año: <input type="number" name="year" min="1900" max="<?php echo date('Y'); ?>"><br>
		<input type="submit" value="Calcular edad">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$day = $_POST["day"];
			$month = $_POST["month"];
			$year = $_POST["year"];

			$age = date("Y") - $year;

			if ($month > date("m") || ($month == date("m") && $day > date("d"))) {
				$age--;
			}

			echo "Usted tiene $age años.";
		}
	?>
</body>
</html>

