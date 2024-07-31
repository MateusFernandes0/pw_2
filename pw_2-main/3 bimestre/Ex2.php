<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
<?php
    function area($x,$y){
        $z=($x * $y)/2;
        return $z;
    }
    echo " area do trinagulo= ". area(240,56), "<br>";
    echo " area do trinagulo= ". area(356,34), "<br>";
    echo " area do trinagulo= ". area(534,8), "<br>";
    ?>
</body>
</html>