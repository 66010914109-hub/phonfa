<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พรฟ้า พาหา(หมิว)</title>
</head>

<body>
    <h1>พรฟ้า พาหา(หมิว)👨🏻‍🎓👩🏻‍🎓</h1>

    <form method="post"action="">
        แม่สูตรคูณ<input type="number"name="a" min="0" max="100"autofocus required>
        <button type="submit"name="Submit">OK</button>
    </form>
    <hr>

    <?php
       if(isset($_POST['Submit'])){

        $m=$_POST['a'];
        //echo $m;

        for($p=1;$p<=12;$p++){
            $h=$m*$p;
            echo"{$m}x{$p}  = {$h} <br>";
        }
        
    }
       
    ?>
    
</body>
</html>