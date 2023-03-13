<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and Filtering</title>
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

    function filterByAuthor($books){
        $filteredBook = [];

        foreach($books as $book){
            if ($book['author'] == 'Andy Weir') {
                $filteredBook[] = $book;
            }
        }

        return $filteredBook;
        
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?>(<?= $book['releaseYear']?>) - By <?= $book['author']?>
            </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>