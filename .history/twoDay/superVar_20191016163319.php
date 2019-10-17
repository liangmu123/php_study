<?php
    $x = 75; 
    $y = 25;
     
    function add() 
    { 
        $GLOBALS['z'] = $GLOBALS[] + $GLOBALS['y']; 
    }
     
    add(); 
    echo $z; 
?>