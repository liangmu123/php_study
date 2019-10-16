<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
        echo "hello,world";
        echo "hello,world2";
    ?>
    <?php
        echo "hello,world2";
        echo "hello,world3";

        $x = 5;
        $y = 10;

        echo $z = $x + $y;

        

    ?>
    <br/>
    <?php
        $test = 5;
        $test3 = 999;
        function myTest() {
            $test2 = 10;
            global $test3;
            echo $test;
            echo $test2;
            echo $test3;
        }

        myTest();

        echo $test;
    ?>
    <br/>
    <?php
         $test222 = 5;
        
        function myTest2() {
            global $test222;
            echo $test222;
        }

        myTest2();
    ?>
    <br/>
    <?php
        $a = 1;
        $b = 2;

        function sum() {
            $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
        }

        sum();

        echo $b;
    ?>
    <br/>
    <?php
        function staticDemo() {
            static $c = 0;
            echo $c;
            $x++;
            echo PHP_EOL; 
        }
        staticDemo();
        staticDemo();
        staticDemo();

    ?>
    <?php
        $cars = array("vlove","宝马","toyota");
        echo "车的牌子是$cars[1]"
    ?>
    <br/>
    <?php
        $name = "宝马";
        echo <<<EOF
        <h1>我得第一个eof</h1>
        <p>$name</p>
        EOF;
        $age = <<<EOF
            "abc"$name
            "123"
        EOF;
        echo $age;
    ?>
</body>
</html>