<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Basic HTML Part -->
   

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="forloop.php">ForLoop</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="doWhileLoop.php">DoWhile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="switch.php">Switch Case</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<h1>This is PHP </h1>

    <!-- Follow those link -->
    <!-- <h2 class="m-2 text-danger">Follow Those Link</h2>
    <ul>
        <li>
            <a href="">Simple Array</a>
        </li>
        <li>
            <a href="" class="btn btn-success m-1">For Loop</a>
        </li>
        <li>
            <a href="doWhileLoop.php" class="btn btn-primary m-1">Do While Loop</a>
        </li>
        <li>
            <a href="ifstatement.php" class="btn btn-warning m-1">
                If StateMent</a>
        </li>
        <li>
            <a href="" class="btn btn-primary m-1">
                Switch StateMent</a>
        </li>
         <li>
            <a href=""></a>
        </li> -->
    <!-- </ul> --> -->

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