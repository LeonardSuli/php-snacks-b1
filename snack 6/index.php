<?php 

// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. 
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [

    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],

    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks 6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <?php foreach ($db as $category => $list) : ?>

        <div class="<?php echo $category === 'teachers' ? 'bg-success' : 'bg-secondary' ?>">
            
            <?php foreach ($list as $employee) : ?>
            
                <h3><?= $employee['name'] ?></h3>
            
            <?php endforeach ?>
            
        </div>
        


    <?php endforeach ?>
    
</body>
</html>