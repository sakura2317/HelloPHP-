<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
$res = "";
if(isset($_POST['insert'])){
	try{
		$pdo = new PDO($dnsinfo, $USER, $PW);
		$sql = "INSERT INTO goods VALUES(?,?,?)";
		$stmt = $pdo->prepare($sql);
		$array = array($_POST['GoodsID'],$_POST['GoodsName'],$_POST['Price']);
		$res = $stmt->execute($array);
	}catch(PDOException $e){
		$res = $e->getMessage();
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>売上管理システム</title>
</head>

<body>
<h1>商品マスタの登録</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="20" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="40" required></label>
<label>Price<input type="text" name="Price" size="20" required></label>
<input type="submit" name="insert" value="登録">
</form>

<?php echo $res ?>
</body>
</html>