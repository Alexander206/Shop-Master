<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");

class ProductDao extends CrudRepositoryDao implements IProduct
{
    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function getProducts(): ?array
    {
        return parent::getAll();
    }

    public function getProduct(int $id): ?array
    {
        return parent::getById($id);
    }

    public function createProduct(array $product): ?array
    {
        $data = $product['data'];
        $image = $product['image'];
        $targetPath = __DIR__ . '/../../../public_html/assets/images/product/' . $image['name'];
        $imagePath = '/assets/images/product/' . $image['name'];

        move_uploaded_file($image['tmp_name'], $targetPath);
        $data['image'] = $imagePath;

        return parent::create($data);
    }

    public function updateProduct(int $id, array $product): ?array
    {
        return parent::updateById($id, $product);
    }

    public function deleteProduct(int $id): ?bool
    {
        return parent::deleteById($id);
    }
}
