<?php

$texto = $_POST['texto'];
echo "<br>";
echo "<p> texto ingresado: </p>";
echo ($texto);
echo "<br>";
echo  "<p> texto en mayuscula: </p>";
echo strtoupper($texto);
echo "<br>";
echo "<p> el numero de caracteres ingresados son:</p>";
echo strlen($texto);
echo "<br>";
echo "<p> imprimir una cadena de texto en orden inverso:  </p>";
echo strrev($texto);
echo "<br>";

?>
<?php
echo "<br>";
echo "texto letra por letra:";
$variable=$texto;
$variable_len=strlen($variable);
echo "<td>";
for($i=0;$i<=$variable_len;$i++)
{
echo "<p>".substr($variable, $i,1)."</p>";
}
echo "</td>";
?>