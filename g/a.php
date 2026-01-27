<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรฟ้า พาหา(หมิว)</title>
</head>

<body>
<h1>พรฟ้า พาหา(หมิว)</h1>

<table border="1">
<tr>
    <th>Order ID</th>
    <th>สินค้า</th>
    <th>ประเภท</th>
    <th>วันที่</th>
    <th>ประเทศ</th>
    <th>จำนวนเงิน</th>
    <th>รูป</th>
</tr>
<?php
    include_once("connectdb.php");
    
    //$sql = "SELECT * FROM  `popsupermarket`
    //where p_country ='Sweden'
    //and p_category ='Vegetables'
    //order by p_product_name asc";
	$sql = "SELECT * FROM  `popsupermarket` ";
    $rs = mysqli_query($conn,$sql);
    $total = 0;
    while($data = mysqli_fetch_array($rs)){
        $total +=   $data['p_amount'];
?>
<tr>
    <td><?php echo $data['p_order_id'];?></td>
    <td><?php echo $data['p_product_name'];?></td>
    <td><?php echo $data['p_category'];?></td>
    <td><?php echo $data['p_date'];?></td>
    <td><?php echo $data['p_country'];?></td>
    <td><?php echo $data['p_amount'];?></td>
    <td><img src= "<?php echo $data['p_product_name'];?>.jpg"width="55"></td>
</tr>
<?php }?>

<tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td align="right"><b><?php echo number_format($total,0);?><b></td>
    <td> </td>
    
</table>


</body>
</html>