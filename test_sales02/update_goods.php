<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
$res = "";
$pdo = new PDO($dnsinfo, $USER, $PW);

try{
	$sql = "SELECT * FROM goods";
	$stmt = $pdo->prepare($sql);
	$array = null;
	$stmt->execute($array);
	$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= "<tr><td>" .
				$row['GoodsID']    ."</td><td>" .
				$row['GoodsName']  ."</td><td>" .
				$row['Price']      ."</td>";
	//更新ボタンのコード
	$res .= <<<eof
	<td><form action="" method="post">
	<input type="hidden" name="id" value="{$row['GoodsID']}">
	<input type="submit" name="update" value="更新">
	</form></td>
eof;
	$res .= "</tr>";
	}
	$res .="</table>";
}catch(Exception $e){
	$res = $e->getMessage();
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>売上管理システム</title>
</head>

<body>
<h1>商品マスタの更新</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="10" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="30" required></label>
<label>Price<input type="text" name="Price" size="10" required></label>
<input type="submit" name="submit" value="更新">
</form>

<?php echo $res ?>

</body>
</html>