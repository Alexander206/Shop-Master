<?php

require_once(__DIR__ . "/../models/user/User.php");
require_once(__DIR__ . "/../middleware/SessionUser.php");

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
        echo 'Estoy en el home de usuarios';
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

    public function edit(): void
    {
        echo "Estoy en la edición de usuarios";
    }

    /* Endpoinds */

    public function listUser()
    {
        $res = new Result();
        $users = $this->userModel->listUsers();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }

    public function loginUser()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);

        $document = $body["document"];
        $password = $body["password"];

        $user = $this->userModel->loginUser($document, $password);

        if ($user !== null) {
            $sessionUser = new SessionUser();
            $sessionUser->login($user, 1800);

            $res->success = true;
            $res->message = "Inicio exitoso";
            $res->result = $user;
        } else {
            $res->success = false;
            $res->message = "El inicio de sesión falló";
        }

        echo json_encode($res);
    }

    public function registerUser()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true)['user'];

        $user = $this->userModel->registerUser($body);

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

    public function editUser()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $id = json_decode($postData, true)['id'];
        $body = json_decode($postData, true)['user'];


        $user = $this->userModel->updateUser($id, $body);

        if ($user !== null) {
            $res->success = true;
            $res->message = "La edición fue exitosa";
            $res->result = $body;
        } else {
            $res->success = false;
            $res->message = "La edición falló";
        }

        echo json_encode($res);
    }
}
