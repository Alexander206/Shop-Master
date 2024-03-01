<?php

require_once(__DIR__ . "/../repository/CrudRepository.orm.php");

class UserOrm extends CrudRepositoryOrm
{
    protected string $name;
    protected string $lastName;
    protected string $docuemnt;
    protected string $countryPhone;
    protected string $phone;
    protected string $password;
    protected int $roleId;
    protected int $companieId;

    protected array $arrayUser;

    public function __construct($table, PDO $connection, array $user)
    {
        parent::__construct($table, $connection);
        $this->name = $user['name'];
        $this->lastName = $user['last_name'];
        $this->docuemnt = $user['document'];
        $this->countryPhone = $user['country_phone'];
        $this->phone = $user['phone'];
        $this->password = $user['password'];
        $this->roleId = $user['role_id'];
        $this->companieId = $user['companie_id'];

        $this->arrayUser = $user;
    }


    public function createUser()
    {
        if (!parent::getByAttribute("document", $this->docuemnt)) {
            $newUser = parent::insert($this->arrayUser);

            unset($newUser['id']);
            $newUser['password'] = "";

            return new UserOrm($this->table, $this->db, $newUser);
        } else {
            return null;
        }
    }
}
