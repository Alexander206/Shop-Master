<?php

require_once (__DIR__ . '/middleware/SessionUser.php');

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
        $url = parse_url(URL, PHP_URL_PATH);
        $url = trim($url, '/');

        $segments = explode('/', $url);

        // El primer segmento es el controlador
        $this->controller = !empty ($segments[0]) ? ucfirst($segments[0]) : 'Home';

        // El segundo segmento (si existe) es el método
        $this->method = !empty ($segments[1]) ? $segments[1] : 'home';

        $this->controller = $this->controller . "Controller";

        require_once (__DIR__ . '/controllers/' . $this->controller . '.php');
    }

    public function run()
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
            }
        }

        $method = $this->method;
        $controller->$method();
    }
}
