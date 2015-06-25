<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
print "先頭から5文字切り取る：".mb_substr("あいうえお", 0, 5);
print "<br>";
print "末尾2文字切り取る：".mb_substr("あいうえお", -2, 2);
?> 
</body>
</html>