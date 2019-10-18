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

    $baidu = new Site();
    $huohu = new Site();

    $baidu->setTitle("百度");
    $baidu->setUrl("http://baidu.com");

    $huohu->setTitle("火狐");
    $huohu->setUrl("http://huohu.com");

    $baidu->getUrl();
    $baidu->getTitle();
    $huohu->
?>