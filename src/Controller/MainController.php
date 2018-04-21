<?php 
require '../app/Core/View.php';
require '../app/Core/Controller.php';
require '../src/Model/Articles.php';


class MainController extends Controller
{
    public function actionIndex($action)
    {   
        $model = new Articles;
        $data = $model->getData();

        $this->view->render($action, $data);
    }

    public function actionContact($action)
    {
        $this->view->render($action);
    }

    public function actionAbout($action)
    {
        $this->view->render($action);
    }

    public function actionPortfolio($action)
    {
        $this->view->render($action);
    }
    
}