<?php

class Product implements IProduct
{
    private int $id;
    private $image;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $creationDate;
    private $updateDate;


    public function __construct($id, $name, $description, $price, $stock, $creationDate, $updateDate, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->creationDate = $creationDate;
        $this->updateDate = $updateDate;
        $this->image = $image;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    public function setCreationDate(string $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    public function getUpdateDate(): ?string
    {
        return $this->updateDate;
    }

    public function setUpdateDate(string $updateDate): void
    {
        $this->updateDate = $updateDate;
    }

    /* public function getProducts(): ?array;
    public function getProduct(int $id): ?array;
    public function createProduct(array $product): ?object;
    public function updateProduct(array $product): ?object;
    public function deleteProduct(int $id): ?object; */
}
