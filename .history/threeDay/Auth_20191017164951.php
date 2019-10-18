<?php
    class Auth {
        private $title;

        public function _construct($arg){
            $this->title = $arg;
        }

        public function getTitle(){
            echo $this->title;
        }

        protected function myProtect(){
            echo "调用了protect方法"
        }

        private function myPrivate(){
            echo "调用了private方法"
        }

        function foo(){

            $this->getTitle();
            $this->myProtect();
            $this->myPrivate();
            
        }
    }


?>