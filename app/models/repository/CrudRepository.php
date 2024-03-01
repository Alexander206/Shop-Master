<?php

require_once(__DIR__ . "./ICrudRepository.php");
require_once(__DIR__ . "./CrudRepository.orm.php");

class CrudRepository implements ICrudRepository
{
    protected string $table;
    protected object $db;
    protected static object $ormInstance;

    public function __construct($table, PDO $connection)
    {
        $this->table = $table;
        $this->db = $connection;
        self::$ormInstance = new CrudRepositoryOrm($this->table, $this->db);
    }

    public function getAll(): ?array
    {
        return self::$ormInstance->getAll();
    }

    public function getById(int $id): ?array
    {
        return self::$ormInstance->getById($id);
    }

    public function create(array $entity): ?array
    {
        return self::$ormInstance->insert($entity);
    }

    public function updateById(int $id, array $entity): ?array
    {
        return self::$ormInstance->updateById($id, $entity);
    }

    public function deleteById(int $id): bool
    {
        return self::$ormInstance->deleteById($id);
    }

    public function paginate(int $page, int $limit): array
    {
        return self::$ormInstance->paginate($page, $limit);
    }
}
