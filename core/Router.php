<?php

namespace core;

class Router
{

    private $controller = 'Site';
    private $method = 'home';
    private $param = [];

    public function __construct()
    {
        
    }
    
    private function url()
    {
        $parseUrl = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parseUrl;

    }


}
