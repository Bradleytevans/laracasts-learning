<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <?php 
        $name = "Dark Matter";
        $read = false;
    ?>
    <?php 
        if($read) {
            $message = "you have read $name";
        } else {
            $message = "you have not read $name";
        }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>

</html>