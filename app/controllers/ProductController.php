<?php

require_once(__DIR__ . "/../models/products/Product.php");

class ProductController extends Controller
{
    private $productModel;

    public function __construct(PDO $connection)
    {
        $this->productModel = new Product($connection);
        $this->publicMethods = [""];
    }

    public function home(): void
    {
        $this->render('product/index', [], 'home');
    }

    public function add(): void
    {
        $this->render('product/add', [], 'site');
    }

    /* End points */

    public function listProducts()
    {
        $res = new Result();
        $users = $this->productModel->getProducts();
        $res->success = true;
        $res->result = $users;

        echo json_encode($res);
    }

    public function getProduct()
    {
        /* $res = new Result();
        $product = $this->productModel->getProduct($id);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res); */
    }

    public function addProduct()
    {
        $res = new Result();
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

        $product = $this->productModel->createProduct($data);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res);
    }

    public function updateProduct()
    {
        /* $res = new Result();
        $product = $this->productModel->updateProduct($id, $product);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res); */
    }

    public function deleteProduct()
    {
        /* $res = new Result();
        $product = $this->productModel->deleteProduct($id);
        $res->success = true;
        $res->result = $product;

        echo json_encode($res); */
    }
}
