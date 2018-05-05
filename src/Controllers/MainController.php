<?php 

namespace Controllers;

use Core\Controller;
use Model\Articles;

class MainController extends Controller
{
    public function actionIndex()
    {   

        $model = new Articles();
        $data = $model->getData();
        $this->view->render($this->templateName, $data);
    }

    public function actionContact()
    {   
        $this->view->render($this->templateName);
    }

    public function actionAbout()
    {
        $this->view->render($this->templateName);
    }

    public function actionPortfolio()
    {
        $this->view->render($this->templateName);
    }
    
}