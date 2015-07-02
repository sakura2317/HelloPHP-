<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$a = array("鈴木" => 92, "佐藤" => 74, "中村" => 42, "三浦" => 65);

foreach($a as $key => $value ){
	if(($value >= 80)&&($value <= 100)){
		print "氏名: ". $key. " 点数: ". $value. " 評価:優<br>";
	}else if(($value >= 70)&&($value <= 79)){
		print "氏名: ". $key. " 点数: ". $value." 評価:良<br>";
	}else if(($value >= 60)&&($value <= 69)){
		print "氏名: ". $key. " 点数: ". $value." 評価:可<br>";
	}else if($value <= 60){
		print "氏名: ". $key. " 点数: ". $value." 評価:不可<br>";
	}
}

?>
</body>
</html>