<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$stock = 10;

switch($stock){
	case 0:
		echo "在庫がありません";
		break;
	case 1:  //$stock <= 3 はやめた方がいい。
	case 2:  //不等号を使う場合はifを使う。
	case 3:
		echo "在庫がわずかです";
		break;
	default:
		echo "在庫がございます";
		break;
}

?>
</body>
</html>