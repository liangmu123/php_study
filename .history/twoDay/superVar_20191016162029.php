<?php
    $x = 1;
    $y = 2;
    function add(){
        echo $GLOBALS('x');
    }
    add();
?>