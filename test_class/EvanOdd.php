<?php
class EvanOdd{
	public function JudgeEvenOdd($num){
		if($num % 2){
			return "奇数です";
		}else{
			return "偶数です";
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>はじめてのクラス</title>
</head>

<body>
<?php print_r($_POST); ?>
<h1>Classの確認</h1>
<form action="" method="post">
<label>数字を入力<input type="text" name="num" required></label>
<input type="submit" name="submit" value="判定">
</form>
<?php
echo $res;
?>

</body>
</html>