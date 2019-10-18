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
        
    }
?>