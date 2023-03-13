<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Function</title>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids Dreams of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com',
            ],
        ];

        $filteredBooks= array_filter($books,function($book){
            return $book['releaseYear'] > 2000;
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?=$book['purchaseUrl']?>">
                <?=$book['name']?>(<?=$book['releaseYear']?>)
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>