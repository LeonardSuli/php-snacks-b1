<?php 

// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
// Prendere il paragrafo e suddividerlo in tanti paragrafi. 
// Ogni punto un nuovo paragrafo.


$paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ducimus vel debitis ipsam, numquam asperiores sit ab deleniti sapiente saepe. veniam ipsum quasi corporis quaerat labore voluptate qui natus accusamus eos voluptatem modi architecto sunt quo. Quia totam tenetur in praesentium! Doloremque, dolorem explicab. Esse corrupti sequi sapiente veritatis error?';


$explodedParagraph = explode('.', $paragraph);

var_dump($explodedParagraph)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks 5</title>
</head>
<body>

    <?php foreach ($explodedParagraph as $paragrafo) : ?>

        <p><?php echo $paragrafo ?></p>
        
        <!-- <p><?= $paragrafo ?></p>    la stessa di quella sopra -->

    <?php endforeach; ?>

</body>
</html>