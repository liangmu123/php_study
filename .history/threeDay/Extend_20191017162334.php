<?php
    class Parent {

        var $title;

        function setTitle($title){
            $this->title = $title;
        }

        function getTitle(){
            return $this->title;
        }

    }

    class Child extends Parent {

        var $category;

        function setCate($cate){
            $this->category = $cate;
        }

        function getCate(){
            return $this->category;
        }

        function getTitle(){
            echo $this->title . "孩子";
            return $this->title;
         }

    }

    $child = new Child();

    $child->

?>