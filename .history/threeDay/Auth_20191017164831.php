<?php
    class Auth {
        private $title;

        public function _construct($arg){
            $this->title = $arg;
        }

        public function getTitle(){
            return $this->title;
        }

        private function myPrivate(){
            echo "调用了"
        }
        function foo(){
            $this->getTitle();
            $this->
        }
    }
?>