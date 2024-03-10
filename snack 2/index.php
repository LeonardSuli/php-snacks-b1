<?php

## Snack 2
// Con un form passare come parametri GET name, mail e age 
// e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola 
// e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


// name è settato ed è più lungo di 3 caratteri
var_dump(isset($_GET['name']) && strlen($_GET['name']) > 3);

// email è settata e contiene una '@' e un '.'
var_dump(isset($_GET['email']), $_GET['email'], str_contains($_GET['email'], '@'), str_contains($_GET['email'], '.'));

// age è settato ed è un valore numerico
var_dump(isset($_GET['age']), $_GET['age'], is_numeric($_GET['age']));



if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {

    echo 'Error, compila tutti i campi';

} elseif (strlen($_GET['name']) <= 3) {

    echo 'Non puoi entrare';

} elseif (!str_contains($_GET['email'], '@') || !str_contains($_GET['email'], '.')) {

    echo 'Non puoi entrare';

} elseif (!is_numeric($_GET['age'])) {

    echo 'Non puoi entrare';

} else {

    echo 'Benvenuto puoi entrare';
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <form action="" method="get">

        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <label for="age">Age</label>
        <input type="text" name="age" id="age">

        <button type="submit">Invia</button>

    </form>
    
</body>
</html>