 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 Conversor de Moneda</title>
</head>
<body>
    <h1>Punto 2</h1>
    <h2>Conversor de pesos colombianos a otras monedas</h2>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Ingrese la cantidad de pesos colombianos</label><br>
    <a>$</a><input type="number" name="pesos" required> 
    <br><br>
    <label>Convertir a: </label>
    <select name="moneda2">
        <option value="dolares">Dólar</option>
        <option value="euros">Euro</option>
        <option value="rupias">Rupia india</option>
    </select>
    <br><br>
    <input type="submit" value="Convertir" name="submit">
</form>
<?php
    if(isset($_POST['submit'])){
        $pesos = $_POST['pesos'];
        $moneda2 = $_POST['moneda2'];

        switch ($moneda2) {
            case 'dolares':
                $conversion = $pesos * 0.00024;
                break;
            case 'euros':
                $conversion = $pesos * 0.00022;
                break;
            case 'rupias':
                $conversion = $pesos * 0.0202;
                break;
            default:
                $conversion = "no convertido";
                break;
        }
        echo "<br>".$pesos." pesos colombianos equivalen a ".$conversion." ".$moneda2;
    }
    
    ?>
</body>
</html>