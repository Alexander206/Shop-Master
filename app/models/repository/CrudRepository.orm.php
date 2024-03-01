<?php

class CrudRepositoryOrm
{
    protected string $table;
    protected object $db;

    public function __construct($table, PDO $connection)
    {
        $this->table = $table;
        $this->db = $connection;
    }

    public function getAll(): ?array
    {
        $stm = $this->db->prepare("SELECT * FROM {$this->table}");
        $stm->execute();
        $result = $stm->fetchAll();

        return ($result !== false) ? $result : null;
    }

    public function getById($id): ?array
    {
        $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        $result = $stm->fetch();

        return ($result !== false) ? $result : null;
    }

    public function getByAttribute($attribute, $value): ?array
    {
        $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE $attribute = :value");
        $stm->bindValue(":value", $value);
        $stm->execute();
        $result = $stm->fetch();

        return ($result !== false) ? $result : null;
    }

    public function insert($data): ?array
    {
        $sql = "INSERT INTO {$this->table} (";
        foreach ($data as $key => $value) {
            $sql .= "{$key},";
        }
        $sql = trim($sql, ',');
        $sql .= ") VALUES (";

        foreach ($data as $key => $value) {
            $sql .= ":{$key},";
        }
        $sql = trim($sql, ',');
        $sql .= ")";

        $stm = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }

        $stm->execute();

        $lastInsertId = $this->db->lastInsertId();

        return $this->getById($lastInsertId);
    }

    public function updateById($id, $data): ?array
    {
        $sql = "UPDATE {$this->table} SET ";
        foreach ($data as $key => $value) {
            $sql .= "{$key} = :{$key},";
        }
        $sql = trim($sql, ',');
        $sql .= " WHERE id = :id ";

        $stm = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }

        $stm->bindValue(":id", $id);
        $stm->execute();

        return $this->getById($id);
    }

    public function deleteById($id): bool
    {
        $stm = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stm->bindValue(':id', $id);
        $stm->execute();

        $rowCount = $stm->rowCount();
        return $rowCount > 0;
    }

    public function paginate($page, $limit): array
    {
        $offset = ($page - 1) * $limit;

        $rows = $this->db->query("SELECT COUNT(*) FROM {$this->table}")->fetchColumn();

        $sql = "SELECT * FROM {$this->table} LIMIT {$offset},{$limit}";
        $stm = $this->db->prepare($sql);
        $stm->execute();

        $pages = ceil($rows / $limit);
        $data = $stm->fetchAll();

        return [
            'data' => $data,
            'page' => $page,
            'limit' => $limit,
            'pages' => $pages,
            'rows' => $rows,
        ];
    }
}
