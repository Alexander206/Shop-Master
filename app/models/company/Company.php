<?php

require_once(__DIR__ . "/ICompany.php");
require_once(__DIR__ . "/Company.dao.php");

class Company implements ICompany
{
    protected static object $daoInstance;

    public function __construct(PDO $connection)
    {
        self::$daoInstance = new CompanyDao('companies', $connection);
    }

    public function get(int $id): ?array
    {
        return self::$daoInstance->get($id);
    }

    public function list(): ?array
    {
        return self::$daoInstance->list();
    }

    public function create(array $company): ?array
    {
        return self::$daoInstance->create($company);
    }

    public function update(int $id, array $company): ?array
    {
        return self::$daoInstance->update($id, $company);
    }

    public function delete(int $id): bool
    {
        return self::$daoInstance->delete($id);
    }
}
