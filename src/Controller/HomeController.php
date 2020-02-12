<?php
namespace App\Controller;

use App\View\View;

class HomeController
{
    public function index()
    {
        $view = new View('site/home.phtml');

        $view->nome = 'Salumão';

        return $view->render();
    }
}