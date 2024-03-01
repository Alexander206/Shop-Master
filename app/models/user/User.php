<?php

require_once(__DIR__ . "./IUser.php");
require_once(__DIR__ . "./User.orm.php");
require_once(__DIR__ . "/../repository/CrudRepository.php");

class User extends CrudRepository implements IUser
{
    public function __construct(PDO $connection)
    {
        parent::__construct('users', $connection);
    }

    public function createUser(array $user): ?object
    {

        $userOrm = new UserOrm($this->table, $this->db, $user);
        return $userOrm->createUser();
    }
}
