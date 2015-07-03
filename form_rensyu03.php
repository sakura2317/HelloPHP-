<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$errors = "";
if(strlen($_POST['user']) == 0){
  $errors[]  = "氏名に何も入力されていません";
}
if(strlen($_POST['pass1']) == 0){
  $errors[]  = "パスワードに何も入力されていません";
}
if(strlen($_POST['pass2']) == 0){
  $errors[]  = "パスワード確認欄に何も入力されていません";
}
if($errors){
	foreach($errors as $val){
    print $val."<br>";
	}
} elseif(($_POST['user'] == "") && ($_POST['pass'] == 1234)){
	print "ログイン ＯＫ";
}elseif(($_POST['user'] != "admin") && ($_POST['pass'] != 1234)){
	print "ユーザ名またはパスワードが違います";
}

?>
</body>
</html>