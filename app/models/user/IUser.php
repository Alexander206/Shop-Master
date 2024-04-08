<?php

interface IUser
{
    public function list(): ?array;
    public function getByDoc(int $doc): ?array;
    public function update(array $icomingUser): ?array;
    public function updateImage(int $doc, array $image): ?array;
    public function delete(int $id): bool;
    public function login(string $document, string $password): ?array;
    public function register(array $icomingUser): ?array;
}
