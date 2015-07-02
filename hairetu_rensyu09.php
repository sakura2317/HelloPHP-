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
	print "氏名: ". $key. " 点数: ". $value."<br>";
}
print "合計点: ". array_sum($a)."<br>";  //$sum += $v;  print $sum
print "平均点: "; 
printf('%.1f',array_sum($a)/count($score));

?>
</body>
</html>