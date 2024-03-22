<?php

require_once(__DIR__ . "/ICrudRepository.php");
require_once(__DIR__ . "/CrudRepository.dao.php");

class CrudRepository implements ICrudRepository
{
    protected string $table;
    protected object $db;
    protected static object $daoInstance;

    public function __construct($table, PDO $connection)
    {
        $this->table = $table;
        $this->db = $connection;
        self::$daoInstance = new CrudRepositoryDao($this->table, $this->db);
    }

    public function getAll(): ?array
    {
        return self::$daoInstance->getAll();
    }

    public function getById(int $id): ?array
    {
        return self::$daoInstance->getById($id);
    }

    public function getByAttribute(string $attribute, string $value): ?array
    {
        return self::$daoInstance->getByAttribute($attribute, $value);
    }

    public function create(array $entity): ?array
    {
        return self::$daoInstance->create($entity);
    }

    public function updateById(int $id, array $entity): ?array
    {
        return self::$daoInstance->updateById($id, $entity);
    }

    public function deleteById(int $id): bool
    {
        return self::$daoInstance->deleteById($id);
    }

    public function paginate(int $page, int $limit): array
    {
        return self::$daoInstance->paginate($page, $limit);
    }
}
