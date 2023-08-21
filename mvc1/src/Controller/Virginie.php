<?php
namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;

class Virginie{
    public function index(){
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('virginie.html');
        $view->setFooter('footer.html');
      
        $view->render([
            'virginie' => 'je suis une variable  dans virginie',
            'list2' => 'Je suis une autre variable dans virginie'
        ]);

    }
   
       
}