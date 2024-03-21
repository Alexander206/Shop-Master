<?php 

interface IProduct
{
    public function createProduct(array $product): ?object;
    public function updateProduct(array $product): ?object;
    public function deleteProduct(int $id): ?object;
    public function getProduct(int $id): ?object;
    public function getProducts(): ?object;
}