<?php

require_once(__DIR__ . "/../models/shopingCar/ShopingCar.php");

class ShopingCarController extends Controller
{
    private $shopingCarModel;

    /*   public function __construct(PDO $connection)
    {
        $this->shopingCarModel = new ShopingCar($connection);
        $this->publicMethods = [""];
    } */

    public function home(): void
    {
        $this->render('shopingCar/index', [], 'home');
    }

    public function add(): void
    {
        $this->render('shopingCar/add', [], 'site');
    }

    /* End points */

    public function listshopingCars()
    {
        /* $res = new Result();
        $users = $this->shopingCarModel->getshopingCars();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res); */
    }

    public function getshopingCar()
    {
        /* $res = new Result();
        $shopingCar = $this->shopingCarModel->getshopingCar($id);
        $res->success = true;
        $res->result = $shopingCar;

        echo json_encode($res); */
    }

    public function addshopingCar()
    {
        /* $res = new Result();
        $data = [
            "data" => [
                "image" => "",
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'stock' => $_POST['stock'],
                'brands_id' => 1,
                'creation_date' => '2024-03-05 08:00:00',
                'update_date' => '2024-03-05 08:00:00'
            ],
            "image" => $_FILES['image']
        ];

        $shopingCar = $this->shopingCarModel->createshopingCar($data);
        $res->success = true;
        $res->result = $shopingCar;

        echo json_encode($res); */
    }

    public function updateshopingCar()
    {
        /* $res = new Result();
        $shopingCar = $this->shopingCarModel->updateshopingCar($id, $shopingCar);
        $res->success = true;
        $res->result = $shopingCar;

        echo json_encode($res); */
    }

    public function deleteshopingCar()
    {
        /* $res = new Result();
        $shopingCar = $this->shopingCarModel->deleteshopingCar($id);
        $res->success = true;
        $res->result = $shopingCar;

        echo json_encode($res); */
    }
}
