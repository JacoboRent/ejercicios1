<!DOCTYPE html>
<html>
<head>
	<title>Asistencia</title>
	<meta charset="utf-8">
</head>
<body><?php
function total_por_alumno($tabla) {
    $total_asistencias = array();
    foreach($tabla as $alumno_asistencia) {
        $total = 0;
        foreach($alumno_asistencia as $asistencia) {
            if($asistencia) {
                $total++;
            }
        }
        array_push($total_asistencias, $total);
    }
    return $total_asistencias;
}

function total_por_clase($tabla) {
    $total_asistentes = array();
    $num_clases = count($tabla[0]);
    for($i=0; $i<$num_clases; $i++) {
        $total = 0;
        foreach($tabla as $alumno_asistencia) {
            if($alumno_asistencia[$i]) {
                $total++;
            }
        }
        array_push($total_asistentes, $total);
    }
    return $total_asistentes;
}

function alumno_estrella($tabla) {
    $total_asistencias = total_por_alumno($tabla);
    $max_asistencias = max($total_asistencias);
    $index_max = array_search($max_asistencias, $total_asistencias);
    $alumnos = array('Pepito', 'Yayita', 'Fulanita', 'Panchito');
    return $alumnos[$index_max];
}

// Ejemplo de uso
$alumnos = array('Pepito', 'Yayita', 'Fulanita', 'Panchito');
$asistencia = array(
    array(true, true, true, false, false, false, false),
    array(true, true, true, false, true, false, true),
    array(true, true, true, true, true, true, true),
    array(true, true, true, false, true, true, true)
);

print_r(total_por_alumno($asistencia));  // [3, 5, 7, 6]
print_r(total_por_clase($asistencia));  // [4, 4, 4, 1, 3, 2, 3]
echo alumno_estrella($asistencia);  // 'Fulanita'
?>

</body>
</html>

