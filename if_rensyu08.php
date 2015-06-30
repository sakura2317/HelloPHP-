<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$A = 6;
$B = 9;
if ($A == $B){
	echo $A."と".$B."は等しい";
}elseif ($A > $B){
	echo $A."は".$B."より大きい";
}elseif ($A < $B){  //elseでもいい。
	echo $A."は".$B."より小さい";
}
?>
</body>
</html>