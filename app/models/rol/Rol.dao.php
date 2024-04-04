<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");

class RolDao extends CrudRepositoryDao implements IRol
{
    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function list(): ?array
    {
        return parent::getAll();
    }

    public function get(int $id): ?array
    {
        return parent::getById($id);
    }

    public function update(int $id, array $user): ?array
    {
        parent::updateById($id, $user);
        return parent::getById($id);
    }

    public function delete(int $id): bool
    {
        return parent::deleteById($id);
    }
}
