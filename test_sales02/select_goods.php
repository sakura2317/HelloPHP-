<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
$res = "";
if(isset($_POST['select'])){
	try{
		$pdo = new PDO($dnsinfo, $USER, $PW);
		$sql = "SELECT * FROM goods WHERE GoodsID=?";
		$stmt = $pdo->prepare($sql);
		$array = array($_POST['GoodsID']);
		$stmt->execute($array);
		
		
		$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th></tr>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$res .= "<tr><td>" .
					$row['GoodsID']    ."</td><td>" .
					$row['GoodsName']  ."</td></tr>\n";
		}
		$res .="</table>";
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
<h1>商品マスタの選択</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="20" required></label>
<input type="submit" name="select" value="表示">
</form>

<?php echo $res ?>

</body>
</html>