<?php
namespace Digi\Keha\Kernel;

use Digi\Keha\Configuration\Config;

class Views {
    private string $html;
    private string $head;
    private string $header;

    private string $footer;

    public function setHtml(string $html):self
    {
        $this->html = Config::VIEWS.$html;
   

        return $this;
    }
    public function setHead(string $head):self
    {
        $this->head = Config::TEMPLATES.$head;

        return $this;
    }

    public function setHeader(string $header):self
    {
        $this->header = Config::TEMPLATES.$header;
        return $this;
    }
    public function setFooter(string $footer):self
    {
        $this->footer = Config::TEMPLATES.$footer;
        return $this;
    }

    public function render(array $vars)
    {
        // if ($html !== null) {
        //     $this->html = $html;
           
        // }  
        // if($head !==null) {
        //     $this->head = $head;
        // }   
        // if($header !==null){
        //     $this->header = $header;
        // } 
        // if($footer!==null){
        //     $this->footer = $footer;
        // }
        extract($vars);
        
        include(dirname(__FILE__)."/../".$this->head);
        include(dirname(__FILE__)."/../".$this->header);
        include(dirname(__FILE__)."/../".$this->html);
        include(dirname(__FILE__)."/../".$this->footer);
    }
}