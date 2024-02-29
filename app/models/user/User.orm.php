<?php

class UserOrm
{
    protected $table;
    protected $db;

    protected $id;
    protected $name;
    protected $lastName;
    protected $docuemnt;
    protected $countryPhone;
    protected $phone;
    protected $password;

    public function __construct($table, PDO $connecion)
    {
        $this->table = $table;
        $this->db = $connecion;
    }
}
