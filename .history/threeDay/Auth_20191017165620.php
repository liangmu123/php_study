<?php
    class Auth {

        private $title;

        // 构造函数两个下划线__construct
        public function __construct($arg){
            $this->title = $arg;
        }

        public function getTitle(){

            echo $this->title;

        }

        protected function myProtect(){

            echo "调用了protect方法";

        }

        private function myPrivate(){

            echo "调用了private方法";

        }

        function foo(){

            $this->getTitle();
            $this->myProtect();
            $this->myPrivate();

        }

    }

    $auth = new Auth("测试");
    $auth->getTitle();
    $auth->foo();
?>