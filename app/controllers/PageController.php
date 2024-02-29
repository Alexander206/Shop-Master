<?php

class PageController extends Controller
{

    public function __construct(PDO $connection)
    {
    }

    public function home()
    {
        $this->render('home/index', [], 'site');
    }

    public function list()
    {
        echo "Estoy en Listar";
    }

    public function modify()
    {
        echo "Estoy en Modificar";
    }
    
    public function new()
    {
        echo "Estoy en Nuevo";
    }
}
