<?php

require 'controllers/BlogController.php';
class Router{
    public function handleRequest(array $get) : void
    {
        $a = new BlogController();

        if(!isset($get["route"])){
            $a->home();
        }
    }
}