<?php

require_once(__DIR__ . "/../models/rol/Rol.php");
require_once(__DIR__ . "/../middleware/SessionUser.php");

class RolController extends Controller
{

    private $rolModel;

    public function __construct(PDO $connection)
    {
        $this->rolModel = new Rol($connection);
        $this->publicMethods = [
            "",
        ];
    }

    # ----- Views ----- #

    public function home()
    {
        $this->render('user/admin', [], 'home');
    }

    # ----- Endpoinds ----- #

    public function list()
    {
        $this->validateRequestMethod("GET");

        $res = new Result();
        $users = $this->rolModel->list();
        $res->success = true;
        $res->message = "Lista de roles";
        $res->result = $users;

        echo json_encode($res);
    }

    public function get($id)
    {
        $this->validateRequestMethod("GET");

        $res = new Result();
        $user = $this->rolModel->get($id);
        $res->success = true;
        $res->message = "Rol encontrado";
        $res->result = $user;

        echo json_encode($res);
    }

    public function update($id)
    {
        /* $this->json($this->rolModel->update($id, $this->getData())); */
    }

    public function delete($id)
    {
        /* $this->json($this->rolModel->delete($id)); */
    }

    public function create()
    {
        /* $this->json($this->rolModel->create($this->getData())); */
    }
}
