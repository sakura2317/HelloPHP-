<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>練習１</title>
</head>

<body>
<table border="1">
    <tr bgcolor = "#FFFF00">
        <th>名前</th>
        <th>最終アクセス時刻</th>
        <th>最終修正時間</th>
        <th>作成時刻</th>
        <th>サイズ</th>
    </tr>
<?php
$curdir = opendir("."); //ディレクトリ情報にアクセス
while($name = readdir($curdir)){ //ディレクトリ名・ファイル名を１つ読み込み
	$stat = stat($name);
	$atime= date("Y/m/d H:i:s",$stat['atime']);
	$mtime= date("Y/m/d H:i:s",$stat['mtime']);
	$ctime= date("Y/m/d H:i:s",$stat['ctime']);
	$size= $stat['size'];
	print "<tr>
		<td>$name</td>
		<td>$atime</td>
		<td>$mtime</td>
		<td>$ctime</td>
		<td>$size</td>
	</tr>";
}
closedir($curdir);


?>
</table>

</body>
</html>