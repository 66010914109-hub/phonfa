<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสมัครงาน - บริษัท นวัตกรรมก้าวหน้า จำกัด (Pastel Purple)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* --- โทนสีม่วงพาสเทลที่ใช้ --- */
        :root {
            --pastel-bg: #f3e5f5; /* พื้นหลังอ่อนมาก (Lavender Blush) */
            --form-bg: #ffffff;    /* พื้นหลังฟอร์ม (ขาวสะอาด) */
            --primary-purple: #9c27b0; /* ม่วงเข้มหลัก (Deep Purple) */
            --light-purple: #ce93d8; /* ม่วงอ่อนสำหรับขอบ/ส่วนแบ่ง */
            --section-bg: #f9f6fd;   /* พื้นหลังส่วนที่แบ่ง (Nearly White/Lavender) */
        }
        
        body {
            background-color: var(--pastel-bg); /* พื้นหลังโดยรวมของหน้า */
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .application-form {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 15px; /* เพิ่มความโค้งมน */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* เงาที่ดูนุ่มนวล */
            background-color: var(--form-bg);
            border-top: 5px solid var(--primary-purple); /* เส้นขอบด้านบนสีม่วงหลัก */
        }
        .form-header {
            color: var(--primary-purple);
            border-bottom: 3px solid var(--light-purple);
            padding-bottom: 10px;
            margin-bottom: 30px;
            font-weight: 700;
        }
        .section-title {
            background-color: var(--section-bg); 
            color: var(--primary-purple);
            padding: 10px 15px;
            margin-top: 25px;
            margin-bottom: 20px;
            border-radius: 8px; /* ขอบโค้งมนสำหรับส่วนหัวย่อย */
            font-weight: 600;
            border-left: 5px solid var(--light-purple);
        }
        .btn-submit {
            background-color: var(--primary-purple); /* ปุ่มสีม่วงเข้มหลัก */
            border-color: var(--primary-purple);
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #7b1fa2; /* ม่วงเข้มขึ้นเมื่อ Hover */
            border-color: #7b1fa2;
        }
        /* ปรับสีของ Label ให้ดูเด่นขึ้นเล็กน้อย */
        .form-label {
            color: #4A0E4B; /* สีม่วงเข้มเกือบดำ */
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="application-form">
            <h1 class="text-center form-header">💜 ใบสมัครงาน</h1>
            <h4 class="text-center mb-4" style="color: var(--primary-purple);">บริษัท นวัตกรรมก้าวหน้า จำกัด (Nawatta-Kam Advanced Co., Ltd.)</h4>

            <form action="f.php" method="POST"> <h5 class="section-title">✨ 1. ตำแหน่งงานที่ต้องการสมัคร</h5>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                        <select class="form-select" id="position" name="position" required>
                            <option value="" disabled selected>กรุณาเลือกตำแหน่ง</option>
                            <option value="Software_Engineer">วิศวกรซอฟต์แวร์ (Software Engineer)</option>
                            <option value="Marketing_Specialist">ผู้เชี่ยวชาญด้านการตลาดดิจิทัล (Digital Marketing Specialist)</option>
                            <option value="Data_Scientist">นักวิทยาศาสตร์ข้อมูล (Data Scientist)</option>
                            <option value="Project_Manager">ผู้จัดการโครงการ (Project Manager)</option>
                            <option value="HR_Officer">เจ้าหน้าที่ฝ่ายบุคคล (HR Officer)</option>
                        </select>
                    </div>
                </div>

                <h5 class="section-title">👤 2. ข้อมูลส่วนตัว</h5>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="prefix" class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="firstName" class="form-label">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="col-md-5">
                        <label for="lastName" class="form-label">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col-md-8">
                        <label for="email" class="form-label">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <h5 class="section-title">🎓 3. ข้อมูลการศึกษา</h5>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="educationLevel" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select class="form-select" id="educationLevel" name="educationLevel" required>
                            <option value="" disabled selected>กรุณาเลือกระดับ</option>
                            <option value="ปวช">ปวช. / ม.6</option>
                            <option value="ปวส">ปวส. / อนุปริญญา</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="major" class="form-label">สาขาวิชา/คณะ</label>
                        <input type="text" class="form-control" id="major" name="major">
                    </div>
                </div>

                <h5 class="section-title">💡 4. ความสามารถและประสบการณ์</h5>
                <div class="mb-3">
                    <label for="specialSkills" class="form-label">ความสามารถพิเศษ (เช่น ภาษา, โปรแกรม, ทักษะเฉพาะทาง)</label>
                    <textarea class="form-control" id="specialSkills" name="specialSkills" rows="3" placeholder="ระบุทักษะหรือความสามารถที่โดดเด่น"></textarea>
                </div>

                <div class="mb-3">
                    <label for="workExperience" class="form-label">ประสบการณ์ทำงานโดยสรุป</label>
                    <textarea class="form-control" id="workExperience" name="workExperience" rows="5" placeholder="ระบุประสบการณ์ทำงานที่เกี่ยวข้อง โดยเริ่มจากงานล่าสุด"></textarea>
                </div>

                <h5 class="section-title">🔍 5. ข้อมูลอื่นๆ</h5>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="otherInfo" class="form-label">ท่านทราบข่าวการรับสมัครงานนี้จากช่องทางใด</label>
                        <input type="text" class="form-control" id="otherInfo" name="otherInfo" placeholder="เช่น เว็บไซต์บริษัท, Facebook, LinkedIn, อื่นๆ">
                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-submit btn-lg">ส่งใบสมัคร</button>
                </div>
                
                <p class="text-center text-muted mt-3"><small>ข้อมูลที่ระบุเครื่องหมาย <span class="text-danger">*</span> จำเป็นต้องกรอก</small></p>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>