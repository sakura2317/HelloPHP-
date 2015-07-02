<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
/*
$kokugo = array(52, 69, 74, 95, 41);
function score($kokugo){
}
	print '合計点:';
	printf(array_sum($kokugo));
	print '<br>平均点:';
	printf('%.1f',array_sum($kokugo)/count($kokugo));
*/
function getStats($arr){
	$sum = array_sum($arr);
	$ave = $sum / count($arr);
	return array($sum, $ave);
}
$kokugo = array(52, 69, 74, 95, 41);
$result = getStats($kokugo);

print "合計点:". $result[0]."<br>";
print "平均点:". $result[1];
?>
</body>
</html>