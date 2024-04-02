<?php

interface IOffice
{
    public function getOffices(): ?array;
    public function getOffice(int $id): ?array;
    public function createOffice(array $Office): ?array;
    public function updateOffice(int $id, array $Office): ?array;
    public function deleteOffice(int $id): ?bool;
}
