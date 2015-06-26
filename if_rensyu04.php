<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$tyokin = 10000;
if ($tyokin <= 0){
	echo "貯金がありません";
}elseif($tyokin <= 1000){
	echo"貯金がわずかです";
}else{
	echo"貯金がございます";
}
?>
</body>
</html>