<?php


namespace core;


use models\Users;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function main()
    {
        $this->view->render('main-page',['pageName'=>'Главная']);
    }

    public function contacts()
    {
        $this->view->render('contacts-page',['pageName'=>'Контакты']);
    }

    public function about()
    {
        $this->view->render('about-page',['pageName'=>'О нас']);
    }
}