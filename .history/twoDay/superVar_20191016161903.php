<?php
    $x = 1;
    $y = 2;
    function add(){
        $GLOBALS("z") = 1;
    }
    add();
    echo $z;
?>