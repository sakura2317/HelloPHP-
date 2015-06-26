<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$thColor = "#E1E1BC";
$tdColor = "#E7E7E7";
$fontColor = "red";
$popAomori = 1407;
$popIwate = 1364;
$popAkita = 1121;
$AomoriM = 663;
$AomoriF = 744;
$IwateM = 652;
$IwateF = 712;
$AkitaM = 527;
$AkitaF = 593;

?>

<table border="1">
  <tr style="background-color:<?php echo $thColor; ?>">
    <th rowspan=2 scope="col">県名</th>
    <th rowspan=2 scope="col">総人口（千人）</th>
    <th rowspan=2 scope="col">男性（千人）</th>
    <th rowspan=2 scope="col">女性（千人）</th>
    <th colspan=2 scope="col">男女比</th>
  </tr>
  <tr style="background-color:<?php echo $thColor; ?>">
  	<td>男性</td>
    <td>女性</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>青森県</td>
    <td><?php echo $popAomori;?></td>
    <td><?php echo $AomoriM;?></td>
    <td><?php echo $AomoriF;?></td>
    <td><?php printf("%.1f",$AomoriM / $popAomori * 100);?>%</td>
    <td style="color:<?php echo $fontColor; ?>"><?php printf("%.1f",$AomoriF / $popAomori * 100);?>%</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>岩手県</td>
    <td><?php echo $popIwate;?></td>
    <td><?php echo $IwateM;?></td>
    <td><?php echo $IwateF;?></td>
    <td style="color:<?php echo $fontColor; ?>"><?php printf("%.1f",$IwateM / $popIwate * 100);?>%</td>
    <td><?php printf("%.1f",$IwateF / $popIwate * 100);?>%</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>秋田県</td>
    <td><?php echo $popAkita;?></td>
    <td><?php echo $AkitaM;?></td>
    <td><?php echo $AkitaF;?></td>
    <td><?php printf("%.1f",$AkitaM / $popAkita * 100);?>%</td>
    <td style="color:<?php echo $fontColor; ?>"><?php printf("%.1f",$AkitaF / $popAkita * 100);?>%</td>
  </tr>
</table>




</body>
</html>