<?php 

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;

class About {
   
    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('about.html');
        $view->setFooter('footer.html');
      
        $view->render([
            'about' => 'je suis une variable',
            'about2' => 'Je suis une autre variable'
        ]);
    }

}