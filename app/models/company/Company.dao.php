<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");

class CompanyDao extends CrudRepositoryDao implements ICompany
{

    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function get(int $id): ?array
    {
        return parent::getById($id);
    }
    public function list(): ?array
    {
        return parent::getAll();
    }
    public function update(int $id, array $company): ?array
    {
        return parent::updateById($id, $company);
    }
    public function delete(int $id): bool
    {
        return parent::deleteById($id);
    }
}
