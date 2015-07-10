<?php
require_once('db.php');
class DBGoods extends DB{
	public function InsertGoods(){
		$sql = "INSERT INTO goods VALUES(?,?,?)";
		$array = array($_POST['GoodsID'],$_POST['GoodsName'],$_POST['Price']);
		parent::executeSQL($sql,$array);
	}

	public function SelectGoodsAll(){
		$sql = "SELECT * FROM goods";
		$res = parent::executeSQL($sql,null);
		$records = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$records .= "<tr><td>" .
					$row['GoodsID']    ."</td><td>" .
					$row['GoodsName']  ."</td><td>" .
					$row['Price']      ."</td></tr>";
		}
		$records .= "</table>";
		return $records;
	}
}
?>
