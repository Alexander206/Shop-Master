<?php

require_once(__DIR__ . "./ICrudRepository.php");
require_once(__DIR__ . "./CrudRepository.orm.php");

class CrudRepository implements ICrudRepository
{
    protected $table;
    protected $db;
    protected static $ormInstance;

    public function __construct($table, PDO $connecion)
    {
        $this->table = $table;
        $this->db = $connecion;
        self::$ormInstance = new CrudRepositoryOrm($this->table, $this->db);
    }

    public function getAll(): array
    {
        return self::$ormInstance->getAll();
    }

    public function getById(int $id): ?object
    {
        return self::$ormInstance->getById($id);
    }

    public function create(object $entity): ?object
    {
        return self::$ormInstance->insert($entity);
    }

    public function updateById(int $id, object $entity): ?object
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
