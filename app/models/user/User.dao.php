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

    public function update(array $icomingUser): ?array
    {
        $doc = $icomingUser["document"];
        $userExist = parent::getByAttribute("document", $doc);

        $userUpdate = parent::updateById($userExist["id"], $icomingUser);

        if ($userUpdate) {
            unset($userUpdate['password']);
            return $userUpdate;
        } else {
            return null;
        }
    }

    public function updateImage(int $doc, array $image): ?array
    {
        $userExist = parent::getByAttribute("document", $doc);

        $targetPath = __DIR__ . '/../../../public_html/assets/images/profile/' . $image['name'];
        $imagePath = '/assets/images/profile/' . $image['name'];

        move_uploaded_file($image['tmp_name'], $targetPath);
        $data = ['image' => $imagePath];

        $userUpdate = parent::updateById($userExist["id"], $data);

        if ($userUpdate) {
            unset($userUpdate['password']);
            return $userUpdate;
        } else {
            return null;
        }
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

    public function register(array $icomingUser, array $image): ?array
    {
        $targetPath = __DIR__ . '/../../../public_html/assets/images/profile/' . $image['name'];
        $imagePath = '/assets/images/profile/' . $image['name'];
        move_uploaded_file($image['tmp_name'], $targetPath);

        $icomingUser['image'] = $imagePath;
        $icomingUser['password'] = password_hash($icomingUser['password'], PASSWORD_DEFAULT);

        if (!parent::getByAttribute("document", $icomingUser['document'])) {
            $newUser = parent::create($icomingUser);
            unset($newUser['password']);
            return $newUser;
        } else {
            return null;
        }
    }

    public function delete(int $doc): bool
    {
        $user = parent::getByAttribute("document", $doc);
        return parent::deleteById($user["id"]);
    }

    public function changePassword(int $document, string $oldPassword, string $newPassword): ?bool
    {
        $user = parent::getByAttribute("document", $document);

        if (password_verify($oldPassword, $user['password'])) {
            $data = ['password' => password_hash($newPassword, PASSWORD_DEFAULT)];
            return parent::updateById($user["id"], $data) !== null ? true : false;
        } else {
            return null;
        }
    }
}
