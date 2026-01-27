<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>พรฟ้า พาหา(หมิว)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 40%; border-collapse: collapse; margin-bottom: 30px; }
        th { background-color: #f2f2f2; }

        /* จัดการเลย์เอาต์กราฟ */
        .charts-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 20px;
        }

        .chart-box {
            flex: 1;
            min-width: 350px;
            max-width: 550px;
            height: 400px; /* คุมความสูงของกล่อง */
            border: 1px solid #eee;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        h2, h3 { color: #333; }
    </style>
</head>

<body>
<h1>พรฟ้า พาหา(หมิว)</h1>

<table border="1">
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
    <?php
        include_once("connectdb.php");
        $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`";
        $rs = mysqli_query($conn, $sql);
        
        $countries = [];
        $totals = [];

        while($data = mysqli_fetch_array($rs)){
            $countries[] = $data['p_country'];
            $totals[] = (float)$data['total'];
    ?>
    <tr>
        <td><?php echo $data['p_country'];?></td>
        <td align="right"><?php echo number_format($data['total'], 0);?> </td>
    </tr>
    <?php } ?>
</table>

<hr>

<div class="charts-wrapper">
    <div class="chart-box">
        <h3 align="center">ยอดขายรายประเทศ (Bar Chart)</h3>
        <canvas id="barChart"></canvas>
    </div>

    <div class="chart-box">
        <h3 align="center">สัดส่วนยอดขาย (Pie Chart)</h3>
        <canvas id="pieChart"></canvas>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($countries); ?>;
    const dataValues = <?php echo json_encode($totals); ?>;

    // ชุดสีแบบ High Contrast (สีสดและตัดกันชัดเจน)
    const distinctColors = [
        '#E6194B', // แดง
        '#3CB44B', // เขียว
        '#FFE119', // เหลือง
        '#4363D8', // น้ำเงิน
        '#F58231', // ส้ม
        '#911EB4', // ม่วง
        '#42D4F4', // ฟ้า
        '#F032E6', // ชมพูเข้ม
        '#BFEF45', // เขียวตอง
        '#FABEBE'  // ชมพูอ่อน
    ];

    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: { boxWidth: 12, padding: 20 }
            }
        }
    };

    // สร้าง Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                backgroundColor: distinctColors, // ใช้ชุดสีที่แตกต่างกันในแต่ละแท่ง
                borderColor: '#ffffff',
                borderWidth: 2
            }]
        },
        options: {
            ...chartOptions,
            scales: {
                y: { beginAtZero: true }
            },
            plugins: {
                legend: { display: false } // ปิด Legend ในกราฟแท่งเพราะมี Label ใต้แท่งแล้ว
            }
        }
    });

    // สร้าง Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: distinctColors,
                hoverOffset: 15
            }]
        },
        options: chartOptions
    });
</script>

</body>
</html>