<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$score = array("鈴木" => 92, "佐藤" => 74, "中村" => 42, "三浦" => 65);
print "ソート前<br>";
foreach($score as $k => $v ){
	print "キー: ". $k. " 要素: ". $v."<br>";
}

print "ソート後<br>";
rsort($score);
foreach($score as $k2 => $v2 ){
	print "キー: ". $k2. " 要素: ". $v2."<br>";
}
?>
</body>
</html>