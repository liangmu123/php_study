<?php
    class Control {

        public $public = 'public';
        protected $protect = 'protect';
        private $private = 'private';

        function printHello(){
            echo $this->public;
            echo $this->protect;
            echo $this->private;
        }
    }

    $obj = new Control();
    echo $obj->public;
?>