<?php

interface IProduct
{
    public function getProducts(): ?array;
    public function getProduct(int $id): ?array;
    public function createProduct(array $product): ?object;
    public function updateProduct(array $product): ?object;
    public function deleteProduct(int $id): ?object;
}
