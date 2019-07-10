<?php 
require_once 'php/models/List.php';

$list = new Lista;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
    <meta name="description" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="list-left">
            <ul>
                <li>Jordi</li>
                <li>David</li>
                <li>Luis</li>
                <li>Alexis</li>
                <li>Petro</li>
                <li>Alejandro</li>
                <li>Fran</li>
                <li>Adrian</li>
            </ul>
        </div>
        <div class="list-right">
            <ul>
                <?php 
                    $list->arrayToList();
                ?>
            </ul>
        </div>
    </div>
</body>

</html>