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
            "loginUser",

            "register",
            "registerUser",

            "recover",
        ];
    }

    /* Views */

    public function home()
    {
        $this->render('user/admin', [], 'home');
    }

    public function login()
    {
        $this->render('user/login', [], 'site');
    }

    public function register()
    {
        $this->render('user/register', [], 'site');
    }

    public function recover()
    {
        $this->render('user/recover', [], 'site');
    }

    public function config()
    {
        $this->render('user/config', [], 'home');
    }

    public function chat()
    {
        $this->render('user/chat', [], 'home');
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

    public function getUser()
    {
        $res = new Result();
        $sessionUser = new SessionUser();
        $user = $sessionUser->getUserData();

        if ($user !== null && $sessionUser->isLoggedIn()) {
            $res->success = true;
            $res->message = "Usuario autenticado";
            $res->result = $user;
        } else {
            $res->success = false;
            $res->message = "Usuario no autenticado";
        }

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
            $res->result = $user;
        } else {
            $res->success = false;
            $res->message = "El registro falló";
        }

        echo json_encode($res);
    }

    public function logout()
    {
        $res = new Result();
        $sessionUser = new SessionUser();

        $sessionUser->logout();
        $res->success = true;
        $res->message = "Sesión cerrada";

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

    public function deleteUser()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $id = json_decode($postData, true)['id'];

        $user = $this->userModel->deleteUser($id);

        if ($user) {
            $res->success = true;
            $res->message = "La eliminación fue exitosa";
        } else {
            $res->success = false;
            $res->message = "La eliminación falló";
        }

        echo json_encode($res);
    }
}
