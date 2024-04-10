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
        $this->render('user/register', [], 'home');
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
        $userDoc = $_GET['id'] ?? null;

        if (isset($userDoc)) {
            $user = $this->userModel->getByDoc($userDoc);
            $message = $user !== null ? "Usuario encontrado" : "Usuario no encontrado";
        } else {
            $sessionUser = new SessionUser();
            $sessionUserData = $sessionUser->getUserData();

            $user = $this->userModel->getByDoc($sessionUserData["document"]);
            $message = $user !== null && $sessionUser->isLoggedIn() ? "Usuario autenticado" : "Usuario no autenticado";
        }

        $res->success = $user !== null;
        $res->message = $message;
        $res->result = $user;

        echo json_encode($res);
    }

    public function update()
    {
        $this->validateRequestMethod("PATCH");

        $res = new Result();
        $sessionUser = new SessionUser();

        $json_data = file_get_contents("php://input");
        $icomingUser = json_decode($json_data, true);

        $user = $this->userModel->update($icomingUser);
        $sessionUserData = $sessionUser->getUserData();

        if ($sessionUserData["document"] === $user["document"]) {
            $sessionUser->login($user, 1800);
        }

        $res->success = $user !== null;
        $res->message = $user !== null ? "Usuario modificado" : "Usuario sin modificar";
        $res->result = $user;

        echo json_encode($res);
    }

    public function updateImage()
    {
        $this->validateRequestMethod("POST");

        $res = new Result();
        $sessionUser = new SessionUser();
        $userDoc = $_GET['id'] ?? null;

        $user = $this->userModel->updateImage($userDoc, $_FILES['image']);
        $sessionUserData = $sessionUser->getUserData();

        if ($sessionUserData["document"] === $user["document"]) {
            $sessionUser->login($user, 1800);
        }

        $res->success = $user !== null;
        $res->message = $user !== null ? "Usuario modificado" : "Usuario sin modificar";
        $res->result = $user;

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

        $res->success = $UserDeleted !== null;
        $res->message = $UserDeleted !== null ? "La eliminación fue exitosa" : "La eliminación falló";
        $res->result = $doc;

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
        }

        $res->success = $user !== null;
        $res->message = $user !== null ? "Inicio exitoso" : "El inicio de sesión falló";
        $res->result = $user;

        echo json_encode($res);
    }

    public function create()
    {
        $this->validateRequestMethod("POST");

        $res = new Result();
        $body = json_decode($_POST['user'], true);
        $files = $_FILES['image'];

        $user = $this->userModel->register($body, $files);

        $res->success = $user !== null;
        $res->message = $user !== null ? "El Registro fue exitoso" : "El registro falló";
        $res->result = $user;

        echo json_encode($res);
    }

    public function changePassword()
    {
        $this->validateRequestMethod("PATCH");

        $res = new Result();
        $sessionUser = new SessionUser();
        $json_data = file_get_contents("php://input");
        $data = json_decode($json_data, true);

        $document = $data["document"];
        $oldPassword = $data["old_password"];
        $newPassword = $data["new_password"];

        $user = $this->userModel->changePassword($document, $oldPassword, $newPassword);

        if ($user !== null) {
            $sessionUser->logout();
        }

        $res->success = $user !== null;
        $res->message = $user !== null ? "Contraseña cambiada" : "La contraseña no se pudo cambiar, verifica que la contraseña actual sea correcta";

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
