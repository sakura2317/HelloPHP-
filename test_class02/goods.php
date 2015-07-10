<?php
require_once('db.php');
$db = new DB();
$sql = "SELECT * FROM goods";
$res = $db->executeSQL($sql,null);
$recordlist = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
	while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$recordlist .= "<tr><td>" .
						$row['GoodsID']    ."</td><td>" .
						$row['GoodsName']  ."</td><td>" .
						$row['Price']      ."</td></tr>";
	}
$recordlist .= "</table>";
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>クラスの活用</title>
</head>

<body>
<h1>goodsマスタテーブル</h1>
<?php echo $recordlist; ?>

</body>
</html>