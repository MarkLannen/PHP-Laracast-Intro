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
                'purchaseUrl' => 'www.example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Anderw Weir',
                'purchaseUrl' => 'www.example.com'
            ]

        ];
        ?>
        <ul>
            <?php foreach ($books as $book): ?>
                <li><a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>

</html>