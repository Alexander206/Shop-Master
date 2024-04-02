<?php

require_once(__DIR__ . "/../models/offices/Office.php");

class OfficesController extends Controller
{

    private $officeModel;

    public function __construct(PDO $connection)
    {
        $this->officeModel = new Office($connection);
        /* $this->publicMethods = [
            "",
            "",
        ]; */
    }

    /* Views */

    public function home(): void
    {
        $this->render('offices/index', [], 'home');
    }

    /* Endpoinds */

    public function list()
    {
        $res = new Result();
        $users = $this->officeModel->getOffices();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }
}
