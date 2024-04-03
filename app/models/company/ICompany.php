<?php

interface ICompany
{
    public function get(int $id): ?array;
    public function list(): ?array;
    public function create(array $company): ?array;
    public function update(int $id, array $company): ?array;
    public function delete(int $id): bool;
}
