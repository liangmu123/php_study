<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 6666;
        var_dump($x);
        $y = 0x8C;
        var_dump($y);
        echo "<br/>";
        $cars = array("宝马","别克");
        var_dump($cars);
    ?>
    <br/>
    <?php
        if(42 == "42"){
            echo "相等";
        }
        echo PHP_EOL;
        if(42 === "42"){
            echo "不相等";
        }
    ?>
    <?php
        define("GREETING","欢迎光临");
        echo GREETING;
    ?>
    <br/>
    <?php
        $text = "hello";
        $text2 = "world";
        echo $text . ' ' . $text2;
    ?>
    <br/>
    <?php
        $strLength = strlen("hello ");
        echo $strLength;
    ?>
</body>
</html>