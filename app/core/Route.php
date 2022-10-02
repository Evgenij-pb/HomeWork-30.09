<?php


namespace core;


class Route
{
    static public function init(){
        $page = 'main';

        $actionInput = filter_input(INPUT_GET, 'page');
        if($actionInput){
            $page = $actionInput;
        }

        $controller = new Controller();

        if(!method_exists($controller, $page)){
            self::notFound();
        }

        $controller->$page();
    }

    static public function notFound(){
        http_response_code(404);

        header("Location: app/resource/views/pages/not-found-page.php");

        exit();
    }

    static public function url(string $page){
        return "/?page=$page";
    }

    static public function redirect(string $url){
        header("Location: $url");
        exit();
    }
}