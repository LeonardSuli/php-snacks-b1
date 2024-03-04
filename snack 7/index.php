<?php 

// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Stampare Nome, Cognome e la media dei voti di ogni alunno.



$students = [
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'votes' => [1,2,3,4,5,6]
    ],
    [
        'name' => 'Gianni',
        'lastname' => 'Bianchi',
        'votes' => [1,4,3,4,7,6]
    ],
    [
        'name' => 'Leo',
        'lastname' => 'Verdi',
        'votes' => [4,2,8,4,5,6]
    ],
    [
        'name' => 'Pippo',
        'lastname' => 'Neri',
        'votes' => [6,2,3,9,5,6]
    ],
    [
        'name' => 'Anto',
        'lastname' => 'Gialli',
        'votes' => [1,6,3,4,6,6]
    ],
];


foreach ($students as $student) {

    echo '<div>';

    echo $student['name']. ' ' . $student['lastname']. ' ' . 'votes avg:'. array_sum($student['votes']) / count($student['votes']);
    
    echo '</div>';



    // var_dump(array_sum($students[2]['votes']) / count($students[2]['votes']));
};


// var_dump(array_sum($students['votes']) / count($students['votes']));








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>