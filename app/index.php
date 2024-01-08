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
                'Do Androids Dream of Electric Sheep?',
            'Animal Farm',
            'Us',
            "Tha Langoliers",
        ]
    ?>

    <h1>
        Recommended Books
    </h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li> <?= $book ?></li>
        <?php endforeach; ?>


        <?php
            foreach ($books as $book) {
                echo "<li>{$book}</li>";
            }
        ?>
    </ul>
</body>
</html>