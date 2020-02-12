<?php
namespace App\Controller;

use App\View\View;

class NotfoundController
{
    public function index()
    {
        $view = new View('site/notfound.phtml');

        return $view->render();
    }
}