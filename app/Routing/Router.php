<?php 
class Router 
{
    private $routes;

    public function __construct() 
    {
        $routesPath = ROOT . '/routes.php';
        $this->routes = include($routesPath);
    }

    //Returns request string

    private function getURI ()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() 
    {
        //Получить строку запроса
        $uri = $this->getURI();

        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
                
                //Получаем внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определить контроллер, action и параметры

                $segments = explode('/', $internalRoute);

                array_shift($segments);
                
                $action = array_shift($segments);                
                $actionName = 'action' . ucfirst($action);
                
                //Подключить файл класса-контроллера
                
                $controllerFile = '../src/Controller/MainController.php';
                
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создать обьект, вызвать метод (т.е. action)

                $result = new MainController();
                $result->$actionName($action);

                if ($result != null) {
                    break;
                }
            }

            
        }
    }
}

