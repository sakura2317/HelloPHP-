<?php
$msg = "<p>ぼくはカエルです</p>\n";
$msg .= "<p>よろしくね！</p>\n";
$age = 10;
$age = "<p>ぼくは{$age}才なんだよ</p>\n";
$mission = <<<eof
<h2>学習内容</h2>
<ul>
<li>PHP</li>
<li>MySQL</li>
</ul>
eof;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>始めようphp</title>
</head>

<body>
<h1>PHPの基本</h1>

<?php echo $msg; ?>

<p>PHPを覚えるぞ</p>

<?php echo $age;
echo $mission;
?>
</body>
</html>