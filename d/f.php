<?php
// กำหนดให้แสดงผลภาษาไทยได้ถูกต้อง (UTF-8)
header('Content-Type: text/html; charset=utf-8');

// ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- ฟังก์ชันทำความสะอาดข้อมูลเพื่อป้องกัน XSS ---
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // --- 1. ดึงข้อมูลจาก $_POST และทำความสะอาด ---

    // ตำแหน่งงาน
    // ใช้ ternary operator (??) เพื่อกำหนดค่าเริ่มต้นเป็น '-' หากไม่มีข้อมูลส่งมา
    $position = clean_input($_POST['position'] ?? '-');

    // ข้อมูลส่วนตัว
    $prefix = clean_input($_POST['prefix'] ?? '-');
    $firstName = clean_input($_POST['firstName'] ?? '-');
    $lastName = clean_input($_POST['lastName'] ?? '-');
    $dob = clean_input($_POST['dob'] ?? '-');
    $email = clean_input($_POST['email'] ?? '-');

    // ข้อมูลการศึกษา
    $educationLevel = clean_input($_POST['educationLevel'] ?? '-');
    $major = clean_input($_POST['major'] ?? '-');

    // ความสามารถและประสบการณ์
    $specialSkills = clean_input($_POST['specialSkills'] ?? '-');
    $workExperience = clean_input($_POST['workExperience'] ?? '-');

    // ข้อมูลอื่นๆ
    $otherInfo = clean_input($_POST['otherInfo'] ?? '-');

?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปใบสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS เพื่อให้หน้าสรุปผลมีธีมสีม่วงพาสเทลเดียวกัน */
        body {
            background-color: #f3e5f5; /* Pastel Purple BG */
            padding-top: 40px;
        }
        .summary-box {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-left: 10px solid #9c27b0; /* Primary Purple highlight */
        }
        h2 {
            color: #9c27b0;
            border-bottom: 2px solid #ce93d8;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        h4 {
            color: #7b1fa2;
            margin-top: 30px;
            margin-bottom: 15px;
            border-left: 5px solid #ce93d8;
            padding-left: 10px;
            font-weight: 600;
        }
        .data-label {
            font-weight: 600;
            color: #4A0E4B;
            display: block; /* ทำให้ Label และ Value อยู่คนละบรรทัดในบางกรณี */
            margin-bottom: 5px;
        }
        .data-value {
            white-space: pre-wrap; /* เพื่อให้ขึ้นบรรทัดใหม่ใน textarea ได้ถูกต้อง */
            color: #333;
        }
        .alert-custom {
            background-color: #f9f6fd; /* Section BG */
            border-color: #ce93d8; /* Light Purple border */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="summary-box">
            <h2 class="text-center">✅ สรุปข้อมูลใบสมัครงาน</h2>
            <p class="text-center text-muted">ข้อมูลที่ผู้สมัครได้กรอกเข้ามา</p>

            <hr>

            <h4>✨ 1. ตำแหน่งงาน</h4>
            <div class="row mb-3">
                <div class="col-12">
                    <span class="data-label">ตำแหน่งที่สมัคร:</span>
                    <span class="data-value"><?php echo htmlspecialchars($position); ?></span>
                </div>
            </div>

            <h4>👤 2. ข้อมูลส่วนตัว</h4>
            <div class="row mb-2">
                <div class="col-md-6">
                    <span class="data-label">ชื่อ-นามสกุล:</span>
                    <span class="data-value"><?php echo htmlspecialchars($prefix . $firstName . " " . $lastName); ?></span>
                </div>
                <div class="col-md-6">
                    <span class="data-label">วันเดือนปีเกิด:</span>
                    <span class="data-value"><?php echo htmlspecialchars($dob); ?></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <span class="data-label">อีเมล:</span>
                    <span class="data-value"><?php echo htmlspecialchars($email); ?></span>
                </div>
            </div>

            <h4>🎓 3. ข้อมูลการศึกษา</h4>
            <div class="row mb-2">
                <div class="col-md-6">
                    <span class="data-label">ระดับสูงสุด:</span>
                    <span class="data-value"><?php echo htmlspecialchars($educationLevel); ?></span>
                </div>
                <div class="col-md-6">
                    <span class="data-label">สาขาวิชา/คณะ:</span>
                    <span class="data-value"><?php echo htmlspecialchars($major); ?></span>
                </div>
            </div>

            <h4>💡 4. ความสามารถและประสบการณ์</h4>
            <div class="mb-3">
                <p class="data-label mb-0">ความสามารถพิเศษ:</p>
                <div class="alert alert-custom data-value"><?php echo nl2br(htmlspecialchars($specialSkills)); ?></div>
            </div>
            <div class="mb-3">
                <p class="data-label mb-0">ประสบการณ์ทำงานโดยสรุป:</p>
                <div class="alert alert-custom data-value"><?php echo nl2br(htmlspecialchars($workExperience)); ?></div>
            </div>

            <h4>🔍 5. ข้อมูลอื่นๆ</h4>
            <div class="row mb-4">
                <div class="col-12">
                    <span class="data-label">ช่องทางการทราบข่าว:</span>
                    <span class="data-value"><?php echo htmlspecialchars($otherInfo); ?></span>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
<?php
} else {
    // กรณีที่ไม่ได้เข้าถึงไฟล์โดยการส่ง POST
    echo "<h1 style='text-align:center; color:#9c27b0; margin-top:50px;'>🚫 กรุณากรอกแบบฟอร์มที่ไฟล์ e.php ก่อน</h1>";
}
?>