<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$x1=8;
$x2=4;
$x3=-6.9;

$result="";

echo ("x1 = ".$x1.";<br> x2 = ".$x2.";<br> x3 = ".$x3.";<br>");

$result=max($x1,$x2,$x3);
echo ("<p>max: ");
echo ($result);
echo (";</p>");

$result=min($x1,$x2,$x3);
echo ("<p>min: ");
echo ($result);
echo ("</p>");

$result=$x1+$x2+$x3;
echo ("<p>x1+x2+x3= ");
echo ($result);
echo ("</p>");

$result=$x1-$x2-$x3;
echo ("<p>x1-x2-x3= ");
echo ($result);
echo ("</p>");

$result=$x1*$x2*$x3;
echo ("<p>x1*x2*x3= ");
echo ($result);
echo ("</p>");

$result=($x1+$x2+$x3)/3;
echo ("<p>numerical average= ");
echo ($result);
echo ("</p>");

?>

</body>
</html>