<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $peso = 64;
    $altura = 1.64;
    $imc = $peso / ($altura * $altura);

    echo "peso = ",$peso, "kg";
    echo "<br>";
    echo "<br>";
    echo "Altura = ",$altura, "cm";
    echo "<br>";
    echo "<br>";
    echo "imc = ",$imc;
    echo "<br>";
    echo "<br>";

    if ($imc < 16.9){
        echo "muito abaixo do peso";
    }
    else if ($imc < 18.4){
        echo "abaixo do peso";
}
    else if ($imc < 24.9){
        echo "peso normal";
    }
    else if ($imc < 30){
        echo "acima do peso";
    }
    else if ($imc < 35){
        echo "obesidade grau I";
        }
    else if ($imc < 40){
        echo "obesidade grau II";
        }
    else if ($imc > 40){
        echo "obesidade grau III";
            }

    ?>
</body>
</html>