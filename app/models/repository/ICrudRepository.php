<?php

interface ICrudRepository
{
    public function getAll(): array;
    public function getById(int $id): ?object;
    public function create(object $entity): ?object;
    public function updateById(int $id, object $entity): ?object;
    public function deleteById(int $id): bool;

    public function paginate(int $page, int $limit): array;
}
