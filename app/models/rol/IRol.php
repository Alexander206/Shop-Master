<?php

interface IRol
{
    public function list(): ?array;
    public function get(int $id): ?array;
    public function update(int $id, array $rol): ?array;
    public function delete(int $id): bool;
}
