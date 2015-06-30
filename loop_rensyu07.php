<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$i = 1;

while($i <= 15){
	if($i % 3 == 0){
		print $i." YES!<br>";
	}else{
	print $i."<br>";
	}
	$i++;
}

?>
</body>
</html>