<?php
require_once('db.php');
$db = new DB();
if(isset($_POST['insert'])){
	$sql = "INSERT INTO goods VALUES(?,?,?)";
	$array = array($_POST['GoodsID'],$_POST['GoodsName'],$_POST['Price']);
	$db->executeSQL($sql,$array);
}
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
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="8" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="30" required></label>
<label>Price<input type="text" name="Price" size="8" required></label>
<input type="submit" name="insert" value="登録">
</form>
<hr />
<?php echo $recordlist; ?>
<td></td>
</body>
</html>