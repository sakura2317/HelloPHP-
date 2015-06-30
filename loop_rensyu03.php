<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php
/*
$num = 0;
$sum = 0;
while($num <= 100){
	if($num % 4 == 0){
		$sum = ( $sum + $num );
	}
	$num++;
}
	echo "合計は". $sum ;
*/


$sum = 0;
for($num = 0;$num <= 100;$num++){
	if($num % 4 == 0){
		$sum = ( $sum + $num );
	}
}
	echo "合計は". $sum ;


?>

</body>
</html>