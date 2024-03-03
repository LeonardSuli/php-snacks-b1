<?php

// Snack 3
// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
// e come valore un array di post associati a quella data. 
// Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


// foreach ($posts as $date => $post_list) {

//     # code...
//     // var_dump($date, $post_list);
//     echo $date;

//     foreach ($post_list as $post) {

//         # code...
//         var_dump($post);
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        
        <?php foreach ($posts as $date => $post_list) : ?>
            
            <h2><?php echo $date; ?></h2>

            <?php foreach ($post_list as $post) : ?>
        
                <div class="card mb-3">

                    <div class="card-body">
                        <h3><?php echo $post['title']; ?></h3>
                        <p><?php echo $post['text']; ?></p>
                    </div>

                    <div class="card-footer">
                        <?php echo $post['author']; ?>
                    </div>

                </div>

            <?php endforeach ?>
        
        <?php endforeach; ?>

    </div>
    
</body>
</html>