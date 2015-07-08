<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
$res = "";
$pdo = new PDO($dnsinfo, $USER, $PW);

//selectタグを生成
$sql = "SELECT GoodsID, GoodsName FROM goods";
$stmt = $pdo->prepare($sql);
$stmt->execute(null);
$selectTag = "<select name = 'GoodsID'>";
$selectTag .= "<option value =''>選択してください</option>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$selectTag .= "<option value =" .$row['GoodsID'].">"
				.$row['GoodsName'] ."</option>";
}
$selectTag .= "</select>";

//レコードの選択

if(isset($_POST['select'])){
	try{
		$sql = "SELECT * FROM goods WHERE GoodsID=?";
		$stmt = $pdo->prepare($sql);
		$array = array($_POST['GoodsID']);
		$stmt->execute($array);
		$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$res .= "<tr><td>" .
					$row['GoodsID']    ."</td><td>" .
					$row['GoodsName']  ."</td><td>" .
					$row['Price']      ."</td></tr>\n";
		}
		$res .="</table>";
	}catch(Exception $e){
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
<label>GoodsID<?php echo $selectTag; ?></label>
<input type="submit" name="select" value="表示">
</form>

<?php echo $res ?>

</body>
</html>