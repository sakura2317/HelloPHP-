<?php
if(isset($_POST['exe'])){
	$name = $_POST['username'];
	echo "入力された名前: " . $name;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>始めようphp</title>
</head>

<body>
<h1>動的なWebページの作成</h1>
<form method="post" action="">
<label>名前<input type="text" name="username" required></label>
<input type="submit" name="exe" value="実行" >
</form>

</body>
</html>