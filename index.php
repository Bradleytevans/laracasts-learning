<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $books = [
        [
            'name' => 'Do androids dream of electric sheep?',
            'author' => 'Phillip Dick',
            'purchaseUrl' => 'example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'example.com'
        ]
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <a href="<?= $book['purchaseUrl'] ?>">  <li><?= $book['name'] . ' : ' . $book['author']; ?></li> </a>
        <?php endforeach; ?>
    </ul>
</body>

</html>