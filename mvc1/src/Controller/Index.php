<?php

namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;

class Index {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('index.html');
        $view->setFooter('footer.html');
      
        $view->render([
            'var' => 'je suis une variable',
            'var2' => 'Je suis une autre variable'
        ]);
    }
}