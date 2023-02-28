<?php

function mismo_dia($fecha1, $fecha2) {
    return ($fecha1[1] == $fecha2[1] && $fecha1[2] == $fecha2[2]);
}

function mas_viejo($personas) {
    $mas_viejo = null;
    foreach ($personas as $nombre => $fecha) {
        if (!$mas_viejo || $fecha < $personas[$mas_viejo]) {
            $mas_viejo = $nombre;
        }
    }
    return $mas_viejo;
}

function primer_cumple($personas) {
    $primer_cumple = null;
    foreach ($personas as $nombre => $fecha) {
        if (!$primer_cumple || ($fecha[1] < $personas[$primer_cumple][1] || ($fecha[1] == $personas[$primer_cumple][1] && $fecha[2] < $personas[$primer_cumple][2]))) {
            $primer_cumple = $nombre;
        }
    }
    return $primer_cumple;
}

// Ejemplo de uso
$personas = array(
    'Juan' => array(1995, 3, 15),
    'María' => array(1988, 5, 20),
    'Pedro' => array(2000, 1, 5),
);

echo "Personas: <br>";
foreach ($personas as $nombre => $fecha) {
    echo "$nombre: " . implode("/", $fecha) . "<br>";
}

echo "<br>Mismo día: " . (mismo_dia($personas['Juan'], $personas['María']) ? 'Sí' : 'No') . "<br>";
echo "<br>La persona más vieja es: " . mas_viejo($personas) . "<br>";
echo "<br>La persona que tiene el primer cumpleaños del año es: " . primer_cumple($personas) . "<br>";

?>

