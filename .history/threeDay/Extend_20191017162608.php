<?php
    class Extend {

        var $title;

        function setTitle($title){
            $this->title = $title;
        }

        function getTitle(){
            return $this->title;
        }

    }

    class Child extends Extend {

        var $category;

        function setCate($cate){
            $this->category = $cate;
        }

        function getCate(){
            return $this->category;
        }

        function getTitle(){
            return $this->title . "孩子";
         }

    }

    $child = new Child();
?>