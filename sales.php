<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CSVファイルの読み込み</title>
</head>

<body>
<?php
$fp = fopen("C:\Users\am\Google ドライブ\授業用\05.PHP概論\練習問題（CSVファイルの取り込み\sales.csv","r");
while(feof($fp)){
	$str = fgetcsv($fp);
	foreach($str as $val){
	print $val;
	}
	}
fclose($fp);
?>

</body>
</html>