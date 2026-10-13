<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = $_POST ["n"];


    // SOMMA DI TUTTI I NUMERI PARI fino a n
    $i = 0;
    $somma = 0;

    while($i <= $n){
        $resto = $i % 2;
        if ($resto == 0) {      // se il resto è 0, ovvero quando il numero è pari
            $somma = $somma + $i;
        }
        
        $i = $i + 1;
    }

    echo "Somma dei numeri pari fino al numero inserito: $somma";
    ?>
</html>