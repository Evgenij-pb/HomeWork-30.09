<?php


namespace core;


class View
{
    public function render(string $page, array $data = [], string $template = TEMPLATE_DEFAULT)
    {
        extract($data);

        include_once 'app/resource/views/templates/' . $template . '.php';
    }
}