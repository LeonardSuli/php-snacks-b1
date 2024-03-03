<?php 

// Snack 4
// Creare un array con 15 numeri casuali, 
// tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


$list = [];

while (count($list) < 15) {

    # generare un numero random
    $randomNumber = rand(1, 100);


    # controllare se il numero generato non è incluso nell'array list
    if(!in_array($randomNumber, $list)){       // se il numero non c'è
        
        // se non è incluso lo pushiamo
        $list[] = $randomNumber;      // o anche     array_push($list, $randomNumber);

    }

}


var_dump($list);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks 1</title>
</head>
<body>
    
</body>
</html>