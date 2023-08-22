<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraPHP</title>
</head>
<body>
    <h1>Punto 1</h1>
    <label> Basado en </label><a href="https://youtu.be/vLRJWNJKmnI">este video</a> <br><br>
    <h2>Calculadora de operaciones básicas</h2>
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Número 1</label>
    <input type="number" name="n1" required> 
    <br><br>
    <label>Número 2</label>
    <input type="number" name="n2" required> 
    <br><br>
    <label>Elija la operación</label>
    <select name="oper">
        <option value="suma">+</option>
        <option value="resta">-</option>
        <option value="multiplicacion">x</option>
        <option value="division">÷</option>
    </select>
    <br><br>
    <input type="submit" value="Calcular" name="submit">
</form>

    <?php
    if(isset($_POST['submit'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $oper = $_POST['oper'];

        switch ($oper) {
            case 'suma':
                $n3 = $n1 + $n2;
                break;
            case 'resta':
                $n3 = $n1 - $n2;
                break;
            case 'multiplicacion':
                $n3 = $n1 * $n2;
                break;
            case 'division':
                if ($n2==0) {
                    $n3 = "indefinido";
                } else {
                    $n3 = $n1 / $n2;
                }
                
                break;
            
            default:
                $n3 = "No hay resutado";
                break;
        }
        echo "<br>El resultado de la ".$oper." de ".$n1." y ".$n2 ." es ".$n3;
    }
    
    ?>
</body>
</html>