<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$customer1 = "男";
$customer2 = "女";
if (($customer1 == "女") || ($customer2 == "女")){
	echo "入場できます";
}elseif (($customer1 == "男") && ($customer2 == "男")){
	echo"入場できません";
}
?>
</body>
</html>