<?php

require_once(__DIR__ . "/../models/user/User.php");

class HomeController extends Controller
{
    private $userModel;

    public function __construct(PDO $connection)
    {
        $this->userModel = new User($connection);
        $this->publicMethods = ["list", "info"];
    }

    public function home(): void
    {
        $this->render('home/index', [], 'home');
    }

    public function dashboard(): void
    {
        echo "Estoy en dashboard";
    }

    public function list(): void
    {
        echo "Estoy en Listar";

        $users = $this->getPublicMethods();

        echo "<pre>";
        var_dump($users);
        echo "</pre>";
    }

    public function modify(): void
    {
        echo "Estoy en Modificar";
    }

    public function new(): void
    {
        echo "Estoy en Nuevo";
    }

    public function info(): void
    {
        echo phpinfo();
    }
}
