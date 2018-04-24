<?php 
require ROOT . '/Core/View.php';
require ROOT . '/Core/Controller.php';
require ROOT . '/../src/Model/Articles.php';


class MainController extends Controller
{
    public function actionIndex($templateName)
    {   
        $model = new Articles;
        $data = $model->getData();

        $this->view->render($templateName, $data);
    }

    public function actionContact($templateName)
    {
        $this->view->render($templateName);
    }

    public function actionAbout($templateName)
    {
        $this->view->render($templateName);
    }

    public function actionPortfolio($templateName)
    {
        $this->view->render($templateName);
    }
    
}