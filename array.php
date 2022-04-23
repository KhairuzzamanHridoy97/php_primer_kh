<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


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
                <li class="nav-item">
                <a class="nav-link" href="array.php">Array</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center text-danger m-2">Array</h1>

    <?php
        $num = 3;

        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);
        echo $numbers[3];

        echo "<p>$numbers[11]<p>";


        $size = count($numbers);
        echo"<h4>The size of  arrays: $size</h4>";

        for($count=0; $count<$size; $count++){
            echo "<p>$numbers[$count]</p>";
        };
    ?>


</body>
</html>