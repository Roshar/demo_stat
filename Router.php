<?php

namespace app;
use app\Database;

/**
 * Class Router
 * @package app
 */
class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public Database $db;

    /**
     * @param string $url
     * @param array $fn
     */
    public function get(string $url, array $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    /**
     * @param string $url
     * @param array $fn
     */
    public function post(string $url, array $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    /**
     * Router constructor.
     */
    public function __construct()
    {
        return $this->db = new Database();
    }


    public function resolve()
    {

        $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';

        if(strpos($currentUrl, '?')!== false){
            $currentUrl = substr($currentUrl,0,strpos($currentUrl,'?'));
        }

//        echo "<pre>";
//        print_r($currentUrl);
//        echo "<pre>";
//        exit;

        $method = $_SERVER['REQUEST_METHOD'] ?? null;

        if($method === "GET") {
            $fn = $this->getRoutes[$currentUrl];
        }else {
            $fn = $this->postRoutes[$currentUrl];
        }

        if($fn){
            call_user_func($fn, $this);
        }else{
            echo "Page not found!";
        }
    }

    /**
     * @param $view
     * @param array $params
     */
    public function renderView($view, $params=[])
    {
        foreach ($params as $key => $value){
            $$key = $value;
        }

        ob_start();
        require_once __DIR__."/view/$view.php";
        $content = ob_get_clean();
        include_once __DIR__."/view/_layout.php";
    }


}