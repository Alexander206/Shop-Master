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
            "authenticate",

            "register",
            "create",

            "recover",
        ];
    }

    # ----- Views ----- #

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

    # ----- Endpoinds ----- #

    public function list()
    {
        $this->validateRequestMethod("GET");

        $res = new Result();
        $users = $this->userModel->list();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }

    public function get()
    {
        $this->validateRequestMethod("GET");

        $res = new Result();
        $userDoc = isset($_GET['id']) ? $_GET['id'] : null;

        if (isset($userDoc)) {
            $user = $this->userModel->getByDoc($userDoc);

            if ($user !== null) {
                $res->success = true;
                $res->message = "Usuario encontrado";
                $res->result = $user;
            } else {
                $res->success = false;
                $res->message = "Usuario no encontrado";
            }
        } else {
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
        }

        echo json_encode($res);
    }

    public function edit()
    {
        $this->validateRequestMethod("PUT");

        $res = new Result();
        /* $postData = file_get_contents('php://input');
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
 */

        $res->success = true;
        $res->message = "La edición fue exitosa";
        $res->result = $_POST;

        echo json_encode($res);
    }

    public function delete()
    {
        $this->validateRequestMethod("DELETE");

        $res = new Result();
        $sessionUser = new SessionUser();

        $doc = isset($_GET['doc']) ? $_GET['doc'] : null;
        $user = $sessionUser->getUserData();

        $UserDeleted = $user["document"] !== $doc ? $this->userModel->delete($doc) : false;

        if ($UserDeleted) {
            $res->success = true;
            $res->message = "La eliminación fue exitosa";
            $res->result = $doc;
        } else {
            $res->success = false;
            $res->message = "La eliminación falló";
            $res->result = $doc;
        }

        echo json_encode($res);
    }

    public function authenticate()
    {
        $this->validateRequestMethod("POST");

        $res = new Result();

        $document = $_POST["document"];
        $password = $_POST["password"];

        $user = $this->userModel->login($document, $password);

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

    public function create()
    {
        $res = new Result();
        $body = $_POST['user'];

        $user = $this->userModel->register($body);

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
}
