<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CSVファイルの読み込み</title>
</head>

<body>
<?php

$rawdata = array();
$price = array();

//---モデル(Model)--- csvファイルを開く

$fp = fopen("test1.csv","r");

//---モデル(Model)--- １行ずつ取り出す
//---モデル(Model)--- EOFまで繰り返す
//---モデル(Model)--- (ディレクトリ情報を読み込む)

while(!feof($fp)){
	$rawdata[] = fgetcsv($fp);
}

//---コントローラ(Controller)--- 商品ごとの売り上げを計算する
/*
foreach($rawdata as $line){
	while(($data = explode($line, 1000, ",")) !==FALSE){
		for ($c=0; $c < 2; $c++){
			echo $data[$c] . "<br />\n";
		}
	}
}
*/

foreach($rawdata as $line){
	if(!isset($price[$line[0]])){
		$price[$line[0]] = 0;
	}
	$qty = 1;
	if(isset($line[2])){
		$qty = $line[2];
	}
	$price[$line[0]] += $line[1] * $qty;
}

//---ビュー(View)--- 加工後の行を表示する
/*
foreach($rawdata as $line){
	print_r($line);
	print "<br>";
}
*/
foreach($price as $k => $v){
	if($k == ""){
		continue;
	}
	print "商品" . $k . "合計" . $v;
	print "<br>";
}

//---モデル(Model)--- 開いたファイルを閉じる

fclose($fp);
?>

</body>
</html>