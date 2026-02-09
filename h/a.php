<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรฟ้า พาหา(หมิว)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name']='พรฟ้า พาหา';
	$_SESSION['nickname']='หมิว';
	
	echo $_SESSION['name']."<br>";
	echo $_SESSION['nickname']."<br>";
?>
</body>
</html>