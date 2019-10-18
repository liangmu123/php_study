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
        echo $_SERVER['PHP_SELF'];
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nmae:<input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
        $name = $_REQUEST['fname'];
        echo $name;
    ?>
    <a href="<?php echo $_SERVER['PHP_SELF'].'';?>"></a>
</body>
</html>