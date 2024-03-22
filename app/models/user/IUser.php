<?php

interface IUser
{
    public function listUsers(): ?array;
    public function loginUser(string $document, string $password): ?array;
    public function registerUser(array $user): ?array;
    public function updateUser(int $id, array $user): ?array;
    public function deleteUser(int $id): bool;
}
