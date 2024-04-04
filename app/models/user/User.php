<?php

require_once(__DIR__ . "/IUser.php");
require_once(__DIR__ . "/User.dao.php");

class User implements IUser
{
    protected static object $daoInstance;

    public function __construct(PDO $connection)
    {
        self::$daoInstance = new UserDao('users', $connection);
    }

    public function list(): ?array
    {
        return self::$daoInstance->list();
    }

    public function getByDoc(int $doc): ?array
    {
        return self::$daoInstance->getByDoc($doc);
    }

    public function login($document, $password): ?array
    {
        return self::$daoInstance->login($document, $password);
    }

    public function register(array $icomingArrayUser): ?array
    {
        return self::$daoInstance->register($icomingArrayUser);
    }

    public function update(int $id, array $icomingArrayUser): ?array
    {
        return self::$daoInstance->update($id, $icomingArrayUser);
    }

    public function delete(int $doc): bool
    {
        return self::$daoInstance->delete($doc);
    }
}
