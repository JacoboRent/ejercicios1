<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="texto">Introduce un texto:</label><br>
  <input type="text" id="texto" name="texto"><br><br>
  <input type="submit" value="Mayusculizar" name="mayusculizar">
  <input type="submit" value="Minusculizar" name="minusculizar">
  <input type="submit" value="Limpiar" name="limpiar">
</form> 

<?php
if(isset($_POST['mayusculizar'])){
  $texto = $_POST['texto'];
  $texto_mayusculas = strtoupper($texto);
  echo $texto_mayusculas;
} elseif(isset($_POST['minusculizar'])){
  $texto = $_POST['texto'];
  $texto_minusculas = strtolower($texto);
  echo $texto_minusculas;
} elseif(isset($_POST['limpiar'])){
  unset($_POST['texto']);
}
?>

</body>
</html>

