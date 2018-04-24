<?php 
class View
{
    public function render($template, $data = null)
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

    public function getTemplatePath($template)
    {
        return ROOT . '/../src/views/' . $template . '.php';
    }

    public function getLayoutPath()
    {
        return ROOT . '/../src/views/layout.php';
    }
}