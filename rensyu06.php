<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$color1 = "#E1E1BC";
$color2 = "#E7E7E7";
$color3 = "red";
$AomoriM = 663;
$AomoriF = 744;
$IwateM = 652;
$IwateF = 712;
$AkitaM = 527;
$AkitaF = 593;

?>

<table border="1">
  <tr style="background-color:<?php echo $color1; ?>">
    <th>県名</th>
    <th>総人口（千人）</th>
    <th>男性（千人）</th>
    <th>女性（千人）</th>
    <th>男女比</th>
  </tr>
  <tr style="background-color:<?php echo $color2; ?>">
    <td>青森県</td>
    <td><?php echo $AomoriM+$AomoriF;?></td>
    <td><?php echo $AomoriM;?></td>
    <td><?php echo $AomoriF;?></td>
    <td></td>
  </tr>
  <tr style="background-color:<?php echo $color2; ?>">
    <td>岩手県</td>
    <td><?php echo $IwateM+$IwateF;?></td>
    <td><?php echo $IwateM;?></td>
    <td><?php echo $IwateF;?></td>
    <td></td>
  </tr>
  <tr style="background-color:<?php echo $color2; ?>">
    <td>秋田県</td>
    <td><?php echo $AkitaM+$AkitaF;?></td>
    <td><?php echo $AkitaM;?></td>
    <td><?php echo $AkitaF;?></td>
    <td></td>
  </tr>
</table>




</body>
</html>