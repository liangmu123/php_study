<?php
    class Auth {
        private $title;

        public function _construct($arg){
            $this->title = $arg;
        }

        public function getTitle(){
            return $this->title;
        }

        protect function myPrivate(){
            echo "调用了private方法"
        }

        private function myPrivate(){
            echo "调用了private方法"
        }

        function foo(){
            $this->getTitle();
            $this->
        }
    }
?>