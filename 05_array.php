<?php
$nombres=["Arno", "Ezio", "Connor"];
echo "<pre>";
print_r($nombres);
"</pre>";

$paises= array("Francia", "Italia", "USA");
echo "<pre>";
print_r($paises);
"</pre>";

//agregar items

$nombres[] = "Edward";

echo "<pre>";
print_r($nombres);
"</pre>";

//mostrar numero de nombres
echo "el numero total de nombres es: ". count($nombres).'<br>';

//accede a los indices
echo 'el nombre del indice 2 es ' .$nombres[2].'<br>';
echo 'el ultimo nombre es ' .end($nombres).'<br>';

//ordenar alfabeticamente
sort($nombres);
echo "<pre>";
print_r($nombres);
"</pre>";

//eliminar el ultimo elemento
array_pop($nombres);
echo "<pre>";
print_r($nombres);
"</pre>";

//eliminar por indices
unset($nombres[1]);
echo "<pre>";
print_r($nombres);
"</pre>";
?>

