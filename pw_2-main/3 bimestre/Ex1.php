<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
<?php
    function soma($x,$y){
        $z=$x + $y;
        return $z;
    }
    echo "soma = ". soma(5,6), "<br>";
    echo "soma = ". soma(8,6), "<br>";
    echo "soma = ". soma(51,9), "<br>";
    ?>
</body>
</html>