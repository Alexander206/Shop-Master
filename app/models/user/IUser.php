<?php

interface IUser
{
    public function createUser(array $user): ?object;
    public function userExist(string $document, string $password): ?object;
}
