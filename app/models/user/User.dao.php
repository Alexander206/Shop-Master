<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");

class UserDao extends CrudRepositoryDao implements IUser
{
    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function list(): ?array
    {
        $arrayUsers = parent::getAll();

        foreach ($arrayUsers as &$user) {
            unset($user['password']);
        }

        return $arrayUsers;
    }

    public function getByDoc(int $doc): ?array
    {
        $user = parent::getByAttribute("document", $doc);
        if ($user !== null) {
            unset($user['password']);
        }
        return $user;
    }

    public function login(string $doc, string $pass): ?array
    {
        $user = parent::getByAttribute("document", $doc);

        if ($user !== null && password_verify($pass, $user['password'])) {
            unset($user['password']);
            return $user;
        } else {
            return null;
        }
    }

    public function register(array $user): ?array
    {
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);

        if (!parent::getByAttribute("document", $user['document'])) {
            $newUser = parent::create($user);
            unset($newUser['password']);
            return $newUser;
        } else {
            return null;
        }
    }

    public function update(int $id, array $user): ?array
    {
        $password = $user['password'];
        $user['password'] = password_hash($password, PASSWORD_DEFAULT);

        if (parent::updateById($id, $user)) {
            return $this->login($user['document'], $password);
        } else {
            return null;
        }
    }

    public function delete(int $id): bool
    {
        return parent::deleteById($id);
    }
}
