<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If StateMent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h5 style="color:red"></h5>
    <?php
        echo "<h2 >If StateMent </h2>";

        $grade = 50;

        if($grade<=51){
            echo '<h5 style="color:green">You Have Passed</h5>';
        }else{
            echo '<h5 style="color:red">You Have Failed</h5>';
        };
       echo '<p>-- -- -- -- --</p>';

        echo'<h2>GPA Test</h2>';

        $gpa="C";

        if($gpa=="A+"){
            echo "<h4 class='text-success'>You are GPA 5</h4>";
        }
        elseif($gpa=="C") {
            echo '<h5 class="text-success">You are GPA3</h5>';
        }
        else{
            echo '<h5 class="text-danger">You are failed</h5>';
        }
    ?>
</body>
</html>