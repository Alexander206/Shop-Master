<?php

require_once(__DIR__ . "/IRol.php");
require_once(__DIR__ . "/Rol.dao.php");

class Rol implements IRol
{
    protected static object $daoInstance;

    public function __construct(PDO $connection)
    {
        self::$daoInstance = new RolDao('rols', $connection);
    }

    public function list(): ?array
    {
        return self::$daoInstance->list();
    }

    public function get(int $id): ?array
    {
        return self::$daoInstance->get($id);
    }

    public function update(int $id, array $icomingArrayUser): ?array
    {
        return self::$daoInstance->update($id, $icomingArrayUser);
    }

    public function delete(int $id): bool
    {
        return self::$daoInstance->delete($id);
    }
}
