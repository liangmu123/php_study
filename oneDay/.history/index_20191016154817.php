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
        $t = date("H");
        echo $t;

        echo "<br/>";
        
        if($t < 20){
            echo "早上好";
        }

        $date = date("H");
        if($date <= 9){
            echo "早上好";
        }elseif($date <= 12){
            echo "上午好"
        }
    ?>
</body>
</html>