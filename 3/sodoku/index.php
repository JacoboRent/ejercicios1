<?php
function solucion_es_correcta($sudoku) {
  // Verificar filas
  for ($i = 0; $i < 9; $i++) {
    $fila = array();
    for ($j = 0; $j < 9; $j++) {
      $fila[] = $sudoku[$i][$j];
    }
    if (count(array_unique($fila)) != 9) {
      return false;
    }
  }
  
  // Verificar columnas
  for ($j = 0; $j < 9; $j++) {
    $columna = array();
    for ($i = 0; $i < 9; $i++) {
      $columna[] = $sudoku[$i][$j];
    }
    if (count(array_unique($columna)) != 9) {
      return false;
    }
  }
  
  // Verificar regiones
  for ($k = 0; $k < 9; $k++) {
    $region = array();
    $x = 3 * floor($k / 3);
    $y = 3 * ($k % 3);
    for ($i = $x; $i < $x + 3; $i++) {
      for ($j = $y; $j < $y + 3; $j++) {
        $region[] = $sudoku[$i][$j];
      }
    }
    if (count(array_unique($region)) != 9) {
      return false;
    }
  }
  
  // Si no se encontraron repeticiones, la solución es correcta
  return true;
}

// Ejemplo de uso
$sudoku = array(
  array(5, 3, 4, 6, 7, 8, 9, 1, 2),
  array(6, 7, 2, 1, 9, 5, 3, 4, 8),
  array(1, 9, 8, 3, 4, 2, 5, 6, 7),
  array(8, 5, 9, 7, 6, 1, 4, 2, 3),
  array(4, 2, 6, 8, 5, 3, 7, 9, 1),
  array(7, 1, 3, 9, 2, 4, 8, 5, 6),
  array(9, 6, 1, 5, 3, 7, 2, 8, 4),
  array(2, 8, 7, 4, 1, 9, 6, 3, 5),
  array(3, 4, 5, 2, 8, 6, 1, 7, 9)
);

if (solucion_es_correcta($sudoku)) {
  echo "<p>La solución es correcta</p>";
} else {
  echo "<p>La solución es incorrecta</p>";
}
?>
