<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$score = array("鈴木" => 92, "佐藤" => 74, "中村" => 42, "三浦" => 65);

foreach($score as $key => $value ){
	print "氏名: ". $key. " 点数: ". $value."<br>";
}


?>
</body>
</html>