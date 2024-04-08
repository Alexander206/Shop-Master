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

    public function update(array $icomingUser): ?array
    {
        return self::$daoInstance->update($icomingUser);
    }

    public function updateImage(int $doc, array $image): ?array
    {
        return self::$daoInstance->updateImage($doc, $image);
    }

    public function login($document, $password): ?array
    {
        return self::$daoInstance->login($document, $password);
    }

    public function register(array $icomingUser): ?array
    {
        return self::$daoInstance->register($icomingUser);
    }

    public function delete(int $doc): bool
    {
        return self::$daoInstance->delete($doc);
    }
}
