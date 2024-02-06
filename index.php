<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Demo</title>
        <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>

    <body>
        <h1>
            Recommended Books
        </h1>
        <?php $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Phillip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'www.example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andrew Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'www.example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andrew Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'www.example.com'
            ]
        ];
        function filter($items, $fn)
        {
            $filteredItems = [];

            foreach ($items as $item)
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            return $filteredItems;
        }


        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andrew Weir';
        });

        ?>
        <ul>
            <?php foreach ($filteredBooks as $book): ?>
                <li><a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </body>

</html>