<?php
namespace App\Controller;

use App\View\View;

class AboutController
{
    public function index()
    {
        $view = new View('site/about.phtml');

        return $view->render();
    }
}