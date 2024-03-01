<?php

class HomeController extends Controller
{

    public function __construct(PDO $connection)
    {
        $this->publicMethods = ["list"];
    }

    public function home(): void
    {
        $this->render('home/index', [], 'site');
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
}
