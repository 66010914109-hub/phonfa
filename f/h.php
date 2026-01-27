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
        รหัสนิสิต<input type="number"name="a"autofocus required>
        <button type="submit"name="Submit">OK</button>
    </form>
    <hr>

    <?php
       if(isset($_POST['Submit'])){

        $id=$_POST['a'];
        $y = substr($id,0,2); //ตัดข้อความเอามาแค่2ตัวแรก   
        echo "{$y}";
        echo "<img src='http:202.28.32.210/student/picture/{$y}/{$id}.jpg'width='400'><br>";
        
    }
       
    ?>
    
</body>
</html>