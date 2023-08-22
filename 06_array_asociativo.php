<?php

$edades=[
    'Jaime'=>19,
    'Bruce'=>32,
    'Diana'=>440,
    'Oliver'=>40,
    'Billy'=>11
];

echo "<pre>";
print_r($edades);
"</pre>";

//Agregar items
$edades["Clark"]=25;
echo "<pre>";
print_r($edades);
"</pre>";

//count
echo "Cantidad de elementos: " .count($edades)."<br>";

//end
echo "El ultimo elemento es: " .end($edades);

//array pop
array_pop($edades);
echo "<pre>";
print_r($edades);
"</pre>";

//eliminar un elemento
unset($edades['Oliver']);
echo "<pre>";
print_r($edades);
"</pre>";

?>