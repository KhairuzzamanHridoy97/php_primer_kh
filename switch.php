<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swicth Statement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
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
    <?php
    echo "<h1>Switch StateMent</h1>";
    $grade ="A+";

    switch($grade){
        case 'A+':
            echo '<h4 class="text-success">Number is 80-100 </h4>';
            break;
        case 'A':
            echo '<h4 class="text-success">Number is 70-79</h4>';
            break;    
        case 'B':
            echo '<h4 class="text-success">Number is 60-69</h4>';
            break;
        default:
            echo '<h4 class="text-danger">Failed</h4>';
            break;        
    }

    ?>
</body>
</html>