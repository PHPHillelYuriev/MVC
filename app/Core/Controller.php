<?php
namespace Core;

use Core\View;

abstract class Controller
{    
    public $view;
    public $templateName;
    
    public function __construct($templateName) 
    {
        $this->templateName = $templateName;        
        $this->view = new View();       
    }
}