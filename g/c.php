<?php
// ====== DATABASE CONFIG ======
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "4109db"; 

$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}

// ดึงข้อมูลหลัก
$sql = "SELECT * FROM popsupermarket ORDER BY p_order_id DESC";
$result = $conn->query($sql);

// ดึงข้อมูลสรุป (Summary Stats)
$stats_sql = "SELECT COUNT(p_order_id) as total_orders, SUM(p_amount) as total_sales, COUNT(DISTINCT p_category) as total_cats FROM popsupermarket";
$stats_res = $conn->query($stats_sql);
$stats = $stats_res->fetch_assoc();
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pop Supermarket | Premium Report</title>

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #a855f7;
            --bg-color: #f8fafc;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--bg-color);
            color: #334155;
            background-image: radial-gradient(circle at top right, #e0e7ff 0%, transparent 40%), 
                              radial-gradient(circle at bottom left, #f3e8ff 0%, transparent 40%);
            min-height: 100vh;
        }

        /* Stats Cards */
        .stat-card {
            border: none;
            border-radius: 1.25rem;
            transition: transform 0.3s ease, shadow 0.3s ease;
            overflow: hidden;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        /* Main Table Card */
        .main-card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 4px 25px rgba(0,0,0,0.05);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
            border-radius: 1.5rem 1.5rem 0 0 !important;
        }

        /* Table Styling */
        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }
        .table thead th {
            background-color: #f1f5f9;
            border: none;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 1rem;
        }
        .table tbody tr {
            background-color: white;
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .table tbody tr:hover {
            transform: scale(1.005);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            background-color: #f8fafc !important;
        }
        .table td {
            padding: 1.25rem 1rem;
            border: none;
        }
        .table td:first-child { border-radius: 12px 0 0 12px; }
        .table td:last-child { border-radius: 0 12px 12px 0; }

        /* Badge Custom */
        .badge-premium {
            padding: 0.5em 1em;
            border-radius: 8px;
            font-weight: 400;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
        }

        /* DataTables Custom */
        .dataTables_wrapper .dataTables_paginate .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            margin: 0 2px;
        }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }
    </style>
</head>

<body>
<div class="container py-5">
    
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-0">🛒 Pop Supermarket</h2>
            <p class="text-muted">ระบบจัดการข้อมูลและสรุปยอดขายรายวัน</p>
        </div>
        <button class="btn btn-primary px-4 py-2 shadow-sm" style="border-radius: 12px;">
            <i class="fas fa-plus me-2"></i> เพิ่มรายการใหม่
        </button>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card stat-card p-3">
                <div class="icon-box bg-primary bg-opacity-10 text-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h6 class="text-muted mb-1">รายการขายทั้งหมด</h6>
                <h3 class="fw-bold"><?= number_format($stats['total_orders']) ?> <small class="fs-6 fw-normal">บิล</small></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card p-3">
                <div class="icon-box bg-success bg-opacity-10 text-success">
                    <i class="fas fa-money-bill-trend-up"></i>
                </div>
                <h6 class="text-muted mb-1">ยอดขายรวมสุทธิ</h6>
                <h3 class="fw-bold">฿<?= number_format($stats['total_sales'], 2) ?></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card p-3">
                <div class="icon-box bg-warning bg-opacity-10 text-warning">
                    <i class="fas fa-tags"></i>
                </div>
                <h6 class="text-muted mb-1">หมวดหมู่สินค้า</h6>
                <h3 class="fw-bold"><?= $stats['total_cats'] ?> <small class="fs-6 fw-normal">ประเภท</small></h3>
            </div>
        </div>
    </div>

    <div class="card main-card">
        <div class="card-header-custom">
            <div class="d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-medium"><i class="fas fa-table me-2"></i> ข้อมูลธุรกรรมล่าสุด</span>
                <span class="badge bg-white text-dark fw-normal">อัปเดตล่าสุด: <?= date('d/m/Y H:i') ?></span>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="popTable" class="table align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th>รายการสินค้า</th>
                            <th class="text-center">หมวดหมู่</th>
                            <th class="text-center">วันที่ทำรายการ</th>
                            <th>แหล่งที่มา/ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-center fw-bold text-muted">#<?= $row['p_order_id'] ?></td>
                            <td>
                                <div class="fw-bold"><?= $row['p_product_name'] ?></div>
                            </td>
                            <td class="text-center">
                                <span class="badge-premium">
                                    <?= $row['p_category'] ?>
                                </span>
                            </td>
                            <td class="text-center text-muted">
                                <i class="far fa-calendar-alt me-1"></i> <?= $row['p_date'] ?>
                            </td>
                            <td>
                                <i class="fas fa-map-marker-alt text-danger me-1"></i> <?= $row['p_country'] ?>
                            </td>
                            <td class="text-end">
                                <span class="fw-bold text-dark">฿<?= number_format($row['p_amount']) ?></span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#popTable').DataTable({
        pageLength: 8,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "ค้นหาข้อมูลในตาราง...",
            lengthMenu: "แสดง _MENU_ แถว",
            info: "แสดงลำดับที่ _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
            paginate: {
                next: '<i class="fas fa-chevron-right"></i>',
                previous: '<i class="fas fa-chevron-left"></i>'
            }
        },
        drawCallback: function() {
            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
        }
    });
});
</script>

</body>
</html>