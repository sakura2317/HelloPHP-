<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$score = 80;

if ($score >= 80){
	echo "A判定";
}elseif ($score >= 70){
	echo "B判定";
}elseif ($score >= 60){
	echo "C判定";
}elseif ($score <= 60){
	echo "D判定";
}
?>
</body>
</html>