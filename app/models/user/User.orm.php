<?php

require_once (__DIR__ . "/../_repository/CrudRepository.orm.php");

class UserOrm extends CrudRepositoryOrm
{
    public string $name;
    public string $lastName;
    public string $docuemnt;
    public string $countryPhone;
    public string $phone;
    public int $roleId;
    public int $companieId;

    public function __construct($table, PDO $connection, $arrayUser = [])
    {
        parent::__construct($table, $connection);

        $this->name = $arrayUser['name'] ?? '';
        $this->lastName = $arrayUser['last_name'] ?? '';
        $this->docuemnt = $arrayUser['document'] ?? '';
        $this->countryPhone = $arrayUser['country_phone'] ?? '';
        $this->phone = $arrayUser['phone'] ?? '';
        $this->roleId = $arrayUser['role_id'] ?? -1;
        $this->companieId = $arrayUser['companie_id'] ?? -1;
    }

    public function userExist(string $doc, string $pass): ?UserOrm
    {
        $user = parent::getByAttribute("document", $doc);

        if ($user !== null && password_verify($pass, $user['password'])) {
            return new UserOrm($this->table, $this->db, $user);
        } else {
            return null;
        }
    }

    public function createUser(array $user): ?UserOrm
    {
        $password = $user['password'];
        $user['password'] = password_hash($password, PASSWORD_DEFAULT);

        if (!parent::getByAttribute("document", $user['document'])) {
            parent::insert($user);
            return $this->userExist($user['document'], $password);
        } else {
            return null;
        }
    }
}
