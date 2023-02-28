<!DOCTYPE html>
<html>
<head>
	<title>Tabla de verdad</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class = "tabla">
<?php
function predicado_logico($p, $q, $r) {
    return ($p && $q) || (!$q && $r);
}

function tabla_de_verdad($predicado) {
    echo "<table> <br>";
    echo "<tr><th>p</th><th>q</th><th>r</th><th>resultado</th></tr>";
    $valores_booleanos = array(true, false);
    foreach ($valores_booleanos as $p) {
        foreach ($valores_booleanos as $q) {
            foreach ($valores_booleanos as $r) {
                $resultado = $predicado($p, $q, $r);
                echo "<tr><td>" . ($p ? 'true' : 'false') . "</td><td>" . ($q ? 'true' : 'false') . "</td><td>" . ($r ? 'true' : 'false') . "</td><td>" . ($resultado ? 'true' : 'false') . "</td></tr>";
            }
        }
    }
    echo "</table>";
}

tabla_de_verdad("predicado_logico");

?>
</div>

</body>
</html>
