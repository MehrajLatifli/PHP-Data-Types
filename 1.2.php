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

$a=8;
$b=4;
$result="";

echo ("a = ".$a."; b = ".$b);

echo ("<br>");


$result = $a>$b ? htmlspecialchars('a>b') : htmlspecialchars("a<b");
echo ("<p>");
echo ($result);
echo ("</p>");

$result = $a+$b;
echo ("<p> a+b= ");
echo ($result);
echo ("</p>");

$result = $a-$b;
echo ("<p> a-b= ");
echo ($result);
echo ("</p>");

$result = $a/$b;
echo ("<p> a/b= ");
echo ($result);
echo ("</p>");

$result = $a*$b;
echo ("<p> a*b= ");
echo ($result);
echo ("</p>");

?>

</body>
</html>