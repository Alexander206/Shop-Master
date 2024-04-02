<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");
require_once(__DIR__ . "/IOffice.php");

class OfficeDao extends CrudRepositoryDao implements IOffice
{
    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function getOffices(): ?array
    {
        return parent::getAll();
    }

    public function getOffice(int $id): ?array
    {
        return parent::getById($id);
    }

    public function createOffice(array $Office): ?array
    {
        return parent::create($Office);
    }

    public function updateOffice(int $id, array $Office): ?array
    {
        return parent::updateById($id, $Office);
    }

    public function deleteOffice(int $id): ?bool
    {
        return parent::deleteById($id);
    }
}
