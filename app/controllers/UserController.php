<?php

require_once(__DIR__ . "/../models/user/User.dto.php");

class UserController extends Controller
{

    private $userModel;

    public function __construct(PDO $connection)
    {
        $this->userModel = new User($connection);
    }

    public function home()
    {
        $users = $this->userModel->getAll();

        echo "<pre>";
        var_dump($users);
        echo "</pre>";
    }

    public function login()
    {
    }

    public function register()
    {
    }

    public function registerCompany()
    {
        echo 'Estoy registrando la compañia';
    }

    public function config()
    {
    }

    public function edit()
    {
    }
}
