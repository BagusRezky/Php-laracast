<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        $books =[
            [
            'name' => "Do Andorid Dream of Eletric Sheep",
            'author' => "The Langoliers",
            'purchaseUrl' => "Hail Mary"
            ],
            [
                'name' => "Do Andorid Dream of Eletric Sheep",
                'author' => "The Langoliers",
                'purchaseUrl' => "Hail Mary"
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>