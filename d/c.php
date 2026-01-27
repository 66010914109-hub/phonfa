<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครสมาชิก - พรฟ้า พาหา(หมิว)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /* 💜 CSS ที่ถูกแก้ไขให้ใช้สีม่วงพาสเทล */
    body {
        /* Pale Lavender: สีม่วงพาสเทลอ่อนมาก */
        background-color: #e6e6fa; 
    }
    .container {
        max-width: 600px;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 30px;
        /* เพิ่มเงาให้ฟอร์มลอยเด่น */
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.2); 
        border-radius: 0.75rem;
        /* ให้ฟอร์มเป็นสีขาวเพื่อให้ตัดกับพื้นหลังสีม่วงพาสเทล */
        background-color: #ffffff; 
    }
    /* ปรับสีหัวข้อหลักให้เข้ากับโทนม่วง/ชมพู */
    .text-primary {
        color: #8a2be2 !important; /* BlueViolet */
    }
</style>

</head>

<body>
<div class="container">
    <h1 class="text-center mb-4 text-primary">ฟอร์มสมัครสมาชิก</h1>
    <p class="text-center mb-4 text-muted">--พรฟ้า พาหา(หมิว)--gemini</p>

    <form method="post" action="" class="needs-validation" novalidate>
        
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
            <div class="invalid-feedback">
                กรุณากรอกชื่อ-สกุล
            </div>
        </div>
        
        <div class="mb-3">
            <label for="phon" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="phon" name="phon" required pattern="[0-9]{10}"> 
            <div class="invalid-feedback">
                กรุณากรอกเบอร์โทรศัพท์ (10 หลัก ตัวเลขเท่านั้น)
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" class="form-control" id="height" name="height" step="1" min="100" max="220" required>
                    <span class="input-group-text">ซม.</span>
                    <div class="invalid-feedback">
                        กรุณากรอกความสูง 100-220 ซม.
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c">
            </div>
        </div>
        
        <div class="mb-4">
            <label for="major" class="form-label">สาขาวิชา</label>
            <select class="form-select" id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การตลาด">การตลาด</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>
        
        <hr class="my-4">
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="Submit" class="btn btn-primary me-md-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                </svg>
                สมัครสมาชิก
            </button>
            
            <button type="reset" class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                </svg>
                Reset
            </button>
            
            <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info text-white">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                    <path fill-rule="evenodd" d="M10 8a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0 0 1h4a.5.5 0 0 0 .5-.5"/>
                </svg>
                go to MSU
            </button>
            
            <button type="button" onClick="window.print();" class="btn btn-light border">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                </svg>
                พิมพ์
            </button>
        </div>
    </form>
    
    <hr class="my-4">

    <?php
    if(isset($_POST['Submit'])){
        $fullname = htmlspecialchars($_POST['fullname']);
        $phon = htmlspecialchars($_POST['phon']);
        $height = htmlspecialchars($_POST['height']);
        $color = htmlspecialchars($_POST['color']);
        $major = htmlspecialchars($_POST['major']);
        
        echo "<h3 class='text-success mb-3'>✅ ข้อมูลที่ส่งมา:</h3>";
        echo "<p><strong>ชื่อ-สกุล:</strong> {$fullname}</p>";
        echo "<p><strong>เบอร์โทร:</strong> {$phon}</p>";
        echo "<p><strong>ความสูง:</strong> {$height} ซม.</p>";	
        echo "<p class='d-flex align-items-center'><strong>สีที่ชอบ:</strong> 
              <span class='ms-2 px-3 py-1 border border-secondary rounded-pill' style='background-color:{$color};'>&nbsp;</span>
              <span class='ms-2 text-muted'>({$color})</span>
              </p>";
        echo "<p><strong>สาขาวิชา:</strong> {$major}</p>";
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
</body>
</html>