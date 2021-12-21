<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operater</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Athiti', sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $color = array("red"=>"100","blue"=>"200","yellow"=>"300","black"=>"400","green"=>"500","pink"=>"600");
    foreach ($color as $colors => $number)
    {
       echo "สี :\t".$colors."\tรหัส\t".$number."<br>"; 
    }
    
    ?>
</body>
</html>