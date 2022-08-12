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

    $x = 54;
    $result1 = "";
    $result2 = "";

    echo ("x = ".$x.";");

    echo ("<br>");

    echo ("<p>Is int: ");
    var_dump(is_int($x));
    echo (";</p>");

    $x < 0 ? $result1 = "Negative" : $result1 = "Positive";
    echo ("<p>");
    echo ($x.": ".$result1.";");
    echo ("</p>");

    $x % 2 != 0 ? $result2 = "Odd" : $result2 = "Even";
    echo ("<p>");
    echo ($x.": ".$result2.";");
    echo ("</p>");

    ?>

</body>

</html>