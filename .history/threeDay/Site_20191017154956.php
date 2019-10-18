<?php
    class Site {

        var $url;
        var $title;

        function setUrl($url){
            $this->url = $url;
        }

        function getUrl(){
            return $this->url;
        }
        function setTitle($title){
            $this->title = $title;
        }

        function getTitle(){
            return $this->title;
        }
    }

    
?>