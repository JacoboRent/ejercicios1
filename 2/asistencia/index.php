<?php

function total_por_alumno($asistencia) {
  $num_alumnos = count($asistencia);
  $resultados = array();
  for ($i = 0; $i < $num_alumnos; $i++) {
    $num_asistencias = 0;
    foreach ($asistencia[$i] as $asistio) {
      if ($asistio) {
        $num_asistencias++;
      }
    }
    $resultados[] = $num_asistencias;
  }
  return $resultados;
}

function total_por_clase($asistencia) {
  $num_alumnos = count($asistencia);
  $num_clases = count($asistencia[0]);
  $resultados = array_fill(0, $num_clases, 0);
  for ($i = 0; $i < $num_clases; $i++) {
    for ($j = 0; $j < $num_alumnos; $j++) {
      if ($asistencia[$j][$i]) {
        $resultados[$i]++;
      }
    }
  }
  return $resultados;
}

function alumno_estrella($asistencia) {
  $num_alumnos = count($asistencia);
  $num_clases = count($asistencia[0]);
  $mejor_alumno = "";
  $max_asistencias = 0;
  for ($i = 0; $i < $num_alumnos; $i++) {
    $num_asistencias = 0;
    foreach ($asistencia[$i] as $asistio) {
      if ($asistio) {
        $num_asistencias++;
      }
    }
    if ($num_asistencias > $max_asistencias) {
      $max_asistencias = $num_asistencias;
      $mejor_alumno = $num_alumnos[$i];
    }
  }
  return $mejor_alumno;
}

$alumnos = array('Pepito', 'Yayita', 'Fulanita', 'Panchito');
$asistencia = array(
  array(true, true, true, false, false, false, false),
  array(true, true, true, false, true, false, true),
  array(true, true, true, true, true, true, true),
  array(true, true, true, false, true, true, true)
);

$resultado_total_por_alumno = total_por_alumno($asistencia);
$resultado_total_por_clase = total_por_clase($asistencia);
$resultado_alumno_estrella = alumno_estrella($asistencia);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Tabla de Asistencia</title>
</head>
<body>
  <h1>Tabla de Asistencia</h1>
  <table>
    <thead>
      <tr>
        <th>Clase</th>
        <?php foreach (range(1, count($asistencia[0])) as $clase) {
          echo "<th>$clase</th>";
        } ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alumnos as $i => $alumno) {
        echo "<tr><td>$alumno</td>";
        foreach ($asistencia[$i] as $asistio) {
          $icono = $asistio ? "✓" : "";
          echo "<td>$icono</td>";
        }
        echo "</tr>";
      } ?>
    </tbody>
  </table>
  <h2>Total por alumno
