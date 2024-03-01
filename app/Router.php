<?php

require_once(__DIR__ . '/middleware/SessionUser.php');

class Router
{
    private $controller;
    private $method;
    private $sessionUser;

    public function __construct()
    {
        $this->matchRoute();
        $this->sessionUser = new SessionUser();
    }

    public function matchRoute()
    {
        $url = explode('/', URL);

        $this->controller = !empty($url[1]) ? $url[1] : 'Home';
        $this->method = !empty($url[2]) ? $url[2] : 'home';

        $this->controller = $this->controller . "Controller";
        require_once(__DIR__ . './controllers/' . $this->controller . '.php');
    }

    public  function run()
    {
        $database = new Database();
        $connection = $database->getConnection();
        $controller = new $this->controller($connection);

        if (in_array($this->method, $controller->getPublicMethods())) {
            $method = $this->method;
            $controller->$method();
            return;
        }

        if (!$this->sessionUser->isLoggedIn()) {
            header("Location: " . URL_PATH . "/user/login");
            exit;
        }

        if ($this->sessionUser->isLoggedIn() && $this->controller === 'UserController') {
            switch ($this->method) {
                case 'login':
                case 'register':
                case 'recover':
                    header("Location: " . URL_PATH . "/home/");
                    exit;
                    break;
            }
        }

        $method = $this->method;
        $controller->$method();
    }
}
