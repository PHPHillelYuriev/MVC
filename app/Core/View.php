<?php
namespace Core;
 
class View
{
    public function render(string $template, array $data = null)
    {
        $content = $this->getTemplatePath($template);        

        $layout = $this->getLayoutPath();

        if (file_exists($layout)) {
            include_once($layout);
        }

        if (file_exists($content)) {
            include_once($content);
        }        
    }

    public function getTemplatePath(string $template) : string
    {
        return ROOT . '/../src/views/' . $template . '.php';
    }

    public function getLayoutPath() : string
    {
        return ROOT . '/../src/views/layout.php';
    }
}