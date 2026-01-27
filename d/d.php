<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>พรฟ้า พาหา(หมิว) - Gemini</title>
  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJFn2lL4xjD2l8vx53V4JfZI7g+YYsHEJwCfiFhdoPbMm8At39n0XJl8xj7J" crossorigin="anonymous">
  <style>
    /* Custom Styling */
    body {
      background-color: #f3f4f9;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin-top: 50px;
    }

    h1 {
      color: #6f42c1; /* Purple */
      text-align: center;
      font-weight: bold;
    }

    .form-container {
      background-color: #e0d4f1; /* Light lavender */
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control,
    .form-select {
      border-radius: 10px;
    }

    .btn-custom {
      background-color: #6f42c1;
      color: white;
      border-radius: 10px;
    }

    .btn-custom:hover {
      background-color: #5a32a3;
    }

    .btn-reset {
      background-color: #f8f9fa;
      color: #6f42c1;
      border-radius: 10px;
    }

    .btn-reset:hover {
      background-color: #e0e0e0;
    }

    .btn-print {
      background-color: #cfe2f3;
      color: #4a6b94;
      border-radius: 10px;
    }

    .btn-print:hover {
      background-color: #a6c1d5;
    }

    .color-preview {
      width: 50px;
      height: 50px;
      margin-top: 5px;
      border-radius: 50%;
    }

    .hr-line {
      margin-top: 50px;
      border: 1px solid #ddd;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>ฟอร์มสมัครสมาชิก -- พรฟ้า พาหา (หมิว) -- gpt</h1>

    <div class="form-container">
      <form method="post" action="">
        <div class="mb-3">
          <label for="fullname" class="form-label">ชื่อ-สกุล</label>
          <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
        </div>

        <div class="mb-3">
          <label for="phon" class="form-label">เบอร์โทร</label>
          <input type="text" class="form-control" name="phon" id="phon">
        </div>

        <div class="mb-3">
          <label for="height" class="form-label">ความสูง</label>
          <input type="number" class="form-control" name="height" id="height" step="0" min="100" max="220" required>
        </div>

        <div class="mb-3">
          <label for="color" class="form-label">สีที่ชอบ</label>
          <input type="color" class="form-control" name="color" id="color">
          <div class="color-preview" style="background-color: #ffffff;"></div>
        </div>

        <div class="mb-3">
          <label for="major" class="form-label">สาขาวิชา</label>
          <select name="major" id="major" class="form-select">
            <option value="การบัญชี">การบัญชี</option>
            <option value="การจัดการ">การจัดการ</option>
            <option value="การตลาด">การตลาด</option>
            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
          </select>
        </div>

        <button type="submit" name="Submit" class="btn btn-custom">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-reset">รีเซ็ต</button>
        <button type="button" class="btn btn-print" onClick="window.print();">พิมพ์</button>
        <button type="button" class="btn btn-outline-primary" onClick="window.location='https://www.msu.ac.th';">ไปยัง MSU</button>
      </form>
    </div>

    <hr class="hr-line">

    <?php
    if(isset($_POST['Submit'])) {
      $fullname = $_POST['fullname'];
      $phon = $_POST['phon'];
      $color = $_POST['color'];
      $major = $_POST['major'];
      
      echo "<div class='container mt-4'>";
      echo "<h5>ข้อมูลที่กรอก</h5>";
      echo "ชื่อ-สกุล: " . $fullname . "<br>";
      echo "เบอร์โทร: " . $phon . "<br>";
      echo "ความสูง: " . $_POST['height'] . " ซม.<br>";
      echo "สีที่ชอบ: <div style='background:{$color}' class='color-preview'></div><br>";
      echo "สาขาวิชา: " . $major . "<br>";
      echo "</div>";
    }
    ?>

  </div>

  <!-- Bootstrap 5.3 JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb0CkJdH1I5I5g6jL1R3jSxIN7shpVyyHfR3kF2yVDAa8Lbg9" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Bz7QJ7K9zfiQ2zVfJ6m95tfJ1zyz71WVsb6sPb1ykFq9rYx" crossorigin="anonymous"></script>

</body>

</html>
