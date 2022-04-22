<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swicth Statement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    echo "<h1>Switch StateMent</h1>";
    $grade ="B";

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