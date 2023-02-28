<?php
	// Definir las medidas de cada líquido en cada balde
	$baldes = array(
		array(20, 30, 50), // Balde A
		array(30, 20, 60), // Balde B
		array(30, 30, 32) // Balde C
	);

	// Definir los precios de cada líquido
	$precios = array(
		"Vino" => 5,
		"Ginebra" => 45,
		"Jugo de limón" => 10
	);

	// Calcular el precio de cada balde
	foreach ($baldes as $balde) {
		$precio_balde = 0;

		for ($i = 0; $i < count($balde); $i++) {
			$precio_balde += $balde[$i] * $precios[array_keys($precios)[$i]];
		}

		echo "El precio del balde es: $precio_balde\n";
	}

	// Calcular el precio total de varios baldes
	$baldes_totales = array(
		array(20, 30, 50), // 10 Baldes A
		array(30, 20, 60), // 4 Baldes B
		array(30, 30, 32), // 5 Baldes C
	);

	$precio_total = 0;

	foreach ($baldes_totales as $balde) {
		for ($i = 0; $i < count($balde); $i++) {
			$precio_total += $balde[$i] * $precios[array_keys($precios)[$i]];
		}
	}

	echo "El precio total de los baldes es: $precio_total\n";
?>
