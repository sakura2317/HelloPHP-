<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
try{
	$pdo = new PDO($dnsinfo, $USER, $PW);
	$sql = "SELECT * FROM goods WHERE GoodsID=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array('1003'));
	$res = "";
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= $row['GoodsID'] ."," .
				$row['GoodsName'] ."," .
				$row['Price'] ."<br>\n";
	}
}catch(PDOException $e){
	$res = $e->getMessage();
	// ID passが違うとき
	// SQLSTATE[HYOOO][1045]Access denied for user ''@'SV1' (using password: NO)
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めよう</title>
</head>

<body>
<h1>goodsテーブルにレコードを抽出する</h1>
<?php echo $res; ?>
</body>
</html>