<?php

namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;

class Liste {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('liste.html');
        $view->setFooter('footer.html');
      
        $view->render([
            'list' => 'je suis une variable  dans liste',
            'list2' => 'Je suis une autre variable dans liste'
        ]);
       
    }
}