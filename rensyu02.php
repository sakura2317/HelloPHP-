<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>練習</title>
</head>

<body>
<?php

define("MILE", 1.6); //1マイルは1.6キロ

$toTokyo   = 715; //km
$toMorioka = 180; //km
$toSendai  = 350; //km

print "<p>東京" . ($toTokyo   /MILE) . "マイル</p>";
print "<p>盛岡" . ($toMorioka /MILE) . "マイル</p>";
print "<p>仙台" . ($toSendai  /MILE) . "マイル</p>";

?>
</body>
</html>