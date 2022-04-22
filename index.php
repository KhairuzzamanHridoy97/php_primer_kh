<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Basic HTML Part -->
    <h1>This is PHP </h1>

    <!-- Follow those link -->
    <h2 class="m-2 text-danger">Follow Those Link</h2>
    <ul>
        <li>
            <a href="array.php">Simple Array</a>
        </li>
        <li>
            <a href="forloop.php">For Loop</a>
        </li>
        <li>
            <a href="doWhileLoop.php">Do While Loop</a>
        </li>
        <li>
            <a href="ifstatement.php" class="btn btn-warning m-1">
                If StateMent</a>
        </li>
        <li>
            <a href="switch.php" class="btn btn-primary m-1">
                Switch StateMent</a>
        </li>
        <!-- <li>
            <a href=""></a>
        </li> -->
    </ul>

    <!-- Basic PHP Part -->

    <?php
    //  printing HTML using PHP
        echo "Hello PHP " ;
        echo '<br/>' ;
        echo 'Second Line';
        echo '<br/>';

    ?>

    <?php
        // declare variable
        $name ='MK Hridoy';
        $age='25';

        //print the variabele
        echo $name;
        echo '<h1>My Name Is : '.$name.'</h1>';
        echo '<h2>I am '.$age.' years old </h2> ';
    ?>
</body>
</html>