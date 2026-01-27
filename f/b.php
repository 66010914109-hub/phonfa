<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พรฟ้า พาหา(หมิว)🐧</title>
</head>

<body>
    <h1>พรฟ้า พาหา(หมิว)</h1>

    <form method="post"action="">
        กรอกตัวเลข<input type="number"name="a"autofocus required>
        <button type="submit"name="Submit">OK</button>
    </form>

    <?php
       if(isset($_POST['Submit'])){

        $gender = $_POST['a'];
        
        if($gender == '1'){
        echo "♀️ เพศชาย";
        }
        else if($gender == "2"){
        echo "♂️ เพศหญิง";
        }
        else if($gender == "3"){
        echo "⚧ เพศทางเลือก";
        }
        //กรอกเลขอื่นจะไม่โชว์อะไรต้องกดแค่เลข1
        //กรอก2จะแสดงผู้หญิง โค้ดที่เพิ่มมา
        
    }
       
    ?>
    
</body>
</html>