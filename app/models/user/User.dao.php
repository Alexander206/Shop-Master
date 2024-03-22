<?php

require_once(__DIR__ . "/../_repository/CrudRepository.dao.php");

class UserDao extends CrudRepositoryDao implements IUser
{
    public function __construct($table, PDO $connection)
    {
        parent::__construct($table, $connection);
    }

    public function listUsers(): ?array
    {
        return parent::getAll();
    }

    public function loginUser(string $doc, string $pass): ?array
    {
        $user = parent::getByAttribute("document", $doc);

        if ($user !== null && password_verify($pass, $user['password'])) {
            unset($user['password']);
            return $user;
        } else {
            return null;
        }
    }

    public function registerUser(array $user): ?array
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

    public function updateUser(int $id, array $user): ?array
    {
        $password = $user['password'];
        $user['password'] = password_hash($password, PASSWORD_DEFAULT);

        if (parent::updateById($id, $user)) {
            return $this->loginUser($user['document'], $password);
        } else {
            return null;
        }
    }

    public function deleteUser(int $id): bool
    {
        return parent::deleteById($id);
    }
}
