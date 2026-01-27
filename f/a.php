<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พรฟ้า พาหา(หมิว)</title>
</head>

<body>
    <h1>พรฟ้า พาหา(หมิว)</h1>
    <?php
    echo"บทที่ 10 PHP เบื้องต้น <br>";
    print "วิชา Web Programming <br>";

    $name = "Phonfa Phaha";
    $age = 25.5;

    echo gettype($age);
    echo "<hr>";
    var_dump( $name);
    echo "<hr>";

    echo $name;
    echo "<hr>";

    $a = 10;
    $b = 5;
    $c = 2;
    $x = ($a + $b) * $c;
    echo $x;

    ?>
    
</body>
</html>