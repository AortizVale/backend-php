<?php 

$calificaciones = [
    "Steve" => [
        "Matematicas" => 3,
        "Historia" => 4,
        "Ingles" => 1
    ],
    "Alex" => [
        "Matematicas" => 5,
        "Historia" => 2,
        "Ingles" => 4
    ],
    "Efe" => [
        "Matematicas" => 4,
        "Historia" => 3,
        "Ingles" => 4,
        "Ciencia" => 5
    ],
];

//count
echo "La cantidad de estudiantes es: ".count($calificaciones)."<br>";
echo "<pre>";
print_r($calificaciones);
"</pre>";
//count recursivo
echo "La cantidad de registros es: ".count($calificaciones, COUNT_RECURSIVE)."<br>";

$calificaciones['Efe']['Matematicas']=5;
echo "<pre>";
print_r($calificaciones);
"</pre>";

?>