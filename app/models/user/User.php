<?php

require_once(__DIR__ . "/IUser.php");
require_once(__DIR__ . "/User.dao.php");

class User implements IUser
{
    protected static object $daoInstance;

    private int $id;
    private string $name;
    private string $lastName;
    private string $document;
    private string $countryPhone;
    private string $phone;
    private string $password;
    private int $roleId;
    private int $companieId;

    public function __construct(PDO $connection)
    {
        self::$daoInstance = new UserDao('users', $connection);
    }

    public function listUsers(): ?array
    {
        return self::$daoInstance->listUsers();
    }

    public function loginUser($document, $password): ?array
    {
        $arrayUser = self::$daoInstance->loginUser($document, $password);
        $this->setAttributes($arrayUser);
        return $arrayUser;
    }

    public function registerUser(array $icomingArrayUser): ?array
    {
        $arrayUser = self::$daoInstance->registerUser($icomingArrayUser);
        $this->setAttributes($arrayUser);
        return $arrayUser;
    }

    public function updateUser(int $id, array $icomingArrayUser): ?array
    {
        $arrayUser = self::$daoInstance->updateUser($id, $icomingArrayUser);
        $this->setAttributes($arrayUser);
        return $arrayUser;
    }

    public function deleteUser(int $id): bool
    {
        return self::$daoInstance->deleteUser($id);
    }

    private function setAttributes(array $arrayUser)
    {
        $this->id = $arrayUser['id'] ?? -1;
        $this->name = $arrayUser['name'] ?? '';
        $this->lastName = $arrayUser['last_name'] ?? '';
        $this->document = $arrayUser['document'] ?? '';
        $this->countryPhone = $arrayUser['country_phone'] ?? '';
        $this->phone = $arrayUser['phone'] ?? '';
        $this->password = $arrayUser['password'] ?? '';
        $this->roleId = $arrayUser['role_id'] ?? -1;
        $this->companieId = $arrayUser['companie_id'] ?? -1;
    }

    /* [Getters and Setters]  */

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setDocument(string $document): void
    {
        $this->document = $document;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    public function setCountryPhone(string $countryPhone): void
    {
        $this->countryPhone = $countryPhone;
    }

    public function getCountryPhone(): string
    {
        return $this->countryPhone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setRoleId(int $roleId): void
    {
        $this->roleId = $roleId;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function setCompanieId(int $companieId): void
    {
        $this->companieId = $companieId;
    }

    public function getCompanieId(): int
    {
        return $this->companieId;
    }
}
