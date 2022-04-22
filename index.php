<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-Index</title>
</head>
<body>
    <!-- Basic HTML Part -->
    <h1>This is PHP </h1>

    <!-- Follow those link -->
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
            <a href="ifstatement.php">If StateMent</a>
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