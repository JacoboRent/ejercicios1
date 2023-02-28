<!DOCTYPE html>
<html>
<head>
	<title>Comprobar si un año es bisiesto</title>
</head>
<body>
	<h1>Comprobar si un año es bisiesto</h1>
	<form method="post">
		<label for="anno">Ingrese un año:</label>
		<input type="text" name="anno" id="anno" required>
		<button type="submit">Comprobar</button>
	</form>
	<?php
		if(isset($_POST["anno"])){
			$anno = $_POST["anno"];
			if($anno % 4 == 0 && ($anno % 100 != 0 || $anno % 400 == 0)){
				echo "<p>$anno es bisiesto</p>";
			}else{
				echo "<p>$anno no es bisiesto</p>";
			}
		}
	?>
</body>
</html>
