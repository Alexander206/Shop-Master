<?php

require_once(__DIR__ . "/../models/user/User.php");

class UserController extends Controller
{

    private $userModel;

    public function __construct(PDO $connection)
    {
        $this->userModel = new User($connection);
        $this->publicMethods = [
            "login",
            "authentication",
            "register",
            "createUser",
            "recover"
        ];
    }

    /* Views */

    public function home(): void
    {
        $res = new Result();
        $users = $this->userModel->getAll();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }

    public function login(): void
    {
        $this->render('user/login', [], 'site');
    }

    public function register(): void
    {
        $this->render('user/register', [], 'site');
    }

    public function recover(): void
    {
        $this->render('user/recover', [], 'site');
    }

    public function registerCompany(): void
    {
        echo 'Estoy registrando la compañia';
    }

    public function config(): void
    {
        echo "Estoy en la configuración";
    }

    public function editUsers(): void
    {
        echo "Estoy en la edición de usuarios";
    }

    /* Endpoinds */

    public function authentication()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);



        $res->success = true;
        $res->message = "Inicio exitoso";
        $res->result = $body;

        echo json_encode($res);
    }

    public function createUser()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true)['user'];

        $body['password'] = password_hash($body['password'], PASSWORD_DEFAULT);

        $user = $this->userModel->createUser($body);

        if ($user !== null) {
            $res->success = true;
            $res->message = "El Registro fue exitoso";
            $res->result = $body;
        } else {
            $res->success = false;
            $res->message = "El registro falló";
        }

        echo json_encode($res);
    }
}
