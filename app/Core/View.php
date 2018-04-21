<?php 
class View
{
    public function render($template, $data = null)
    {
        $content = '../src/views/' . $template . '.php';        

        $layout = '../src/views/layout.php';

        if (file_exists($layout)) {
            include_once($layout);
        }        
    }
}