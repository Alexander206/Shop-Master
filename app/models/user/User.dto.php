<?php

require_once(__DIR__ . "./IUser.php");
require_once(__DIR__ . "/../repository/CrudRepository.dto.php");

class User extends CrudRepository implements IUser
{
    public function __construct(PDO $connecion)
    {
        parent::__construct('users', $connecion);
    }
}
