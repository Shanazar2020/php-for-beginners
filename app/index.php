<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        /*body {*/
        /*    display: grid;*/
        /*    place-items: center;*/
        /*    height: 100vh;*/
        /*    margin: 0;*/
        /*    font-family: sans-serif;*/
        /*}*/
    </style>
</head>

<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'https://example.com',
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2022,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'https://example.com'
            ],
        ];

        $filter = function ($items, $key, $value, $fn){
            $filteredItems = [];

            foreach ($items as $item){
                if ($fn($item[$key], $value)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $equal = function ($a, $b){
            return $a === $b;
        };

        $bigger = function ($a, $b){
            return $a > $b;
        };

        $equalOrBigger = function ($a, $b){
            return ($a >= $b);
        };

        $filteredBooks = $filter($books, 'releaseYear', 2011, $equalOrBigger);
    ?>

    <h1>
        Recommended Books
    </h1>
    <ul>
        <?php foreach($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> - <?= $book['author'] ?> - <?= $book['releaseYear'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>