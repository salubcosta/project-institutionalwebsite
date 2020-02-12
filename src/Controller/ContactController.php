<?php
namespace App\Controller;

use App\View\View;

class ContactController
{
    public function index()
    {
        $view = new View('site/contact.phtml');

        return $view->render();
    }
}