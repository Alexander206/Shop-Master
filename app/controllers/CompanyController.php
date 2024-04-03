<?php

require_once(__DIR__ . "/../models/company/Company.php");

class CompanyController extends Controller
{
    private $companyModel;

    public function __construct(PDO $connection)
    {
        $this->companyModel = new Company($connection);
        $this->publicMethods = [""];
    }

    public function home(): void
    {
        $this->render('product/index', [], 'home');
    }

    /* End points */

    public function list()
    {
        $res = new Result();
        $users = $this->companyModel->list();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }

    public function get()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $id = json_decode($postData, true)['id'];

        $product = $this->companyModel->get($id);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res);
    }

    public function create()
    {
        $res = new Result();
        $product = $this->companyModel->create($_POST);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res);
    }

    public function update()
    {
        $res = new Result();
        $company = [
            "nit" => $_POST['nit'],
            "name" => $_POST['name'],
            "address" => $_POST['address']
        ];

        $product = $this->companyModel->update($_POST['id'], $company);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res);
    }

    public function delete()
    {
        $res = new Result();
        $product = $this->companyModel->delete($_POST['id']);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res);
    }
}
