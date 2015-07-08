<?php
$USER = 'i511';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i511;host=sv1;charset=utf8";
try{
	$pdo = new PDO($dnsinfo, $USER, $PW);
	$sql = "INSERT INTO goods VALUES('1999','神秘的な鉛筆',300)";
	$stmt = $pdo->prepare($sql);
	$res = $stmt->execute(null);
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
<h1>goodsテーブルにレコードを追加する</h1>
<?php 
if($res==TRUE){echo "OK";}
else if($res==FALSE){echo "NGだよ";}
else{echo $res;}
?>

</body>
</html>