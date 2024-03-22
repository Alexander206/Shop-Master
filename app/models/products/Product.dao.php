<?php

require_once(__DIR__ . "/../_repository/CrudRepository.Dao.php");

class ProductDao extends CrudRepositoryDao
{
    protected string $image;
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

    public function createProduct(array $product): ?ProductDao
    {
        if (!parent::getByAttribute("name", $product['name'])) {
            return parent::insert($product);
        } else {
            return null;
        }
    }

    public function updateProduct(array $product): ?ProductDao
    {
        return parent::update($product);
    }

    public function deleteProduct(int $id): ?ProductDao
    {
        return parent::delete($id);
    }

    public function getProduct(int $id): ?ProductDao
    {
        return parent::getById($id);
    }

    public function getProducts(): ?array
    {
        return parent::getAll();
    }
}
