<?php

interface IProduct
{
    public function getProducts(): ?array;
    public function getProduct(int $id): ?array;
    public function createProduct(array $product): ?array;
    public function updateProduct(int $id, array $product): ?array;
    public function deleteProduct(int $id): ?bool;
}
