<?php

require_once (__DIR__ . "/../_repository/CrudRepository.orm.php");

class ProductOrm extends CrudRepositoryOrm
{
    public string $image;
    public string $name;
    public string $description;
    public float $price;
    public int $stock;
    public string $creationDate;
    public string $updateDate;

    public function __construct($table, PDO $connection, $arrayProduct = [])
    {
        parent::__construct($table, $connection);

        $this->name = $arrayProduct['name'] ?? '';
        $this->description = $arrayProduct['description'] ?? '';
        $this->price = $arrayProduct['price'] ?? 0;
        $this->stock = $arrayProduct['stock'] ?? 0;
        $this->categoryId = $arrayProduct['category_id'] ?? -1;
        $this->userId = $arrayProduct['user_id'] ?? -1;
    }

    public function createProduct(array $product): ?ProductOrm
    {
        if (!parent::getByAttribute("name", $product['name'])) {
            return parent::insert($product);
        } else {
            return null;
        }
    }

    public function updateProduct(array $product): ?ProductOrm
    {
        return parent::update($product);
    }

    public function deleteProduct(int $id): ?ProductOrm
    {
        return parent::delete($id);
    }

    public function getProduct(int $id): ?ProductOrm
    {
        return parent::getById($id);
    }

    public function getProducts(): ?array
    {
        return parent::getAll();
    }
}