<?php

interface IUser
{
    public function list(): ?array;
    public function getByDoc(int $doc): ?array;
    public function update(int $id, array $user): ?array;
    public function delete(int $id): bool;
    public function login(string $document, string $password): ?array;
    public function register(array $user): ?array;
}
