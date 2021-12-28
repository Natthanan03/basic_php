<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php
        echo"-----------------------is_numeric--------------------<br>";
        $num1 = 1545000;
        $num2 = "125000";
        $num3 = "Natthanan";
        echo "Num 1 = ".is_numeric($num1)."<br>";
        echo "Num 2 = ".is_numeric($num2)."<br>";
        echo "Num 3 = ".is_numeric($num3)."<br>";
        echo"-----------------------round ciel floor--------------------<br>";
        echo "round 4.7 = ".round(4.7)."<br>";
        echo "ceil 4.7 = ".ceil(4.7)."<br>";
        echo "floor 4.7 = ".floor(4.7)."<br>";
        echo"-----------------------min max--------------------<br>";
        echo "min(4,7,8,3,5,2) = ".min(4,7,8,3,5,2)."<br>";
        echo "max(4,7,8,3,5,2) = ".max(4,7,8,3,5,2)."<br>";
        echo"-----------------------rand--------------------<br>";
        echo "rand (1, 48) = ".rand(1,48)."<br>";
        echo"-----------------------is_null--------------------<br>";
        $a = null;
        echo "is_null (1, 48) = ".is_null($a)."<br>";
        echo"-----------------------number_format--------------------<br>";
        $number = 5000;
        echo "number_format 5000 = ".number_format($number,2)."<br>";
        echo"-----------------------trim--------------------<br>";
        echo "trim = ".trim(" Natthanan ")."<br>";
        echo "ltrim = ".ltrim(" Natthanan")."<br>";
        echo "rtrim = ".rtrim("Natthanan ")."<br>";
        echo"-----------------------strtolower,strtoupper--------------------<br>";
        echo "strtolower(NATTHANAN) = ".strtolower("NATTHANAN")."<br>";
        echo "strtoupper(natthanan) = ".strtoupper("natthanan")."<br>";
        echo"-----------------------substr--------------------<br>";
        $text = "Natthanan Ngamping";
        echo "substr(Natthanan Ngamping) = ".substr($text,9,9)."<br>";
        echo"-----------------------substr_count--------------------<br>";
        echo "substr_count(Natthanan Ngamping) = ".substr_count($text,"n")."<br>";
        echo"-----------------------strlen--------------------<br>";
        echo "strlen(Natthanan Ngamping) = ".strlen($text)."<br>";
        echo"-----------------------MD5--------------------<br>";  //สำคัญ
        $password = 1234;
        echo "MD5(1234) = ".md5($password)."<br>";
        echo"-----------------------date--------------------<br>"; //สำคัญ
        echo "date (d/m/y) = ".date('d/m/y')."<br>";
        echo "date (d/M/Y) = ".date('d/M/Y')."<br>";
        echo "date (D/M/Y) = ".date('D/M/Y')."<br>";
        echo "date (D) = ".date('D')."<br>";
        echo "date (d) = ".date('d')."<br>";
        echo "date (m) = ".date('m')."<br>";
        echo "date (M) = ".date('M')."<br>";
        echo "date (F) = ".date('F')."<br>";
        echo "date (Y) = ".date('Y')."<br>";
        echo "date (Y) = ".date('Y')+543;

    ?>
    
</body>
</html>