<?php

interface ICrudRepository
{
    public function getAll(): ?array;
    public function getById(int $id): ?array;
    public function getByAttribute(string $attribute, string $value): ?array;
    public function create(array $entity): ?array;
    public function updateById(int $id, array $entity): ?array;
    public function deleteById(int $id): bool;

    public function paginate(int $page, int $limit): array;
}
