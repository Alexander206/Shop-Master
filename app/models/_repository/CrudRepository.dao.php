<?php

require_once(__DIR__ . "/ICrudRepository.php");

class CrudRepositoryDao implements ICrudRepository
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
        $query = "SELECT * FROM {$this->table}";
        $stm = $this->db->prepare($query);
        $stm->execute();
        $result = $stm->fetchAll();

        return ($result !== false) ? $result : null;
    }

    public function getById($id): ?array
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stm = $this->db->prepare($query);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $result = $stm->fetch();

        return ($result !== false) ? $result : null;
    }

    public function getByAttribute($attribute, $value): ?array
    {
        $query = "SELECT * FROM {$this->table} WHERE $attribute = :value";
        $stm = $this->db->prepare($query);
        $stm->bindValue(":value", $value);
        $stm->execute();
        $result = $stm->fetch();

        return ($result !== false) ? $result : null;
    }

    public function create($data): ?array
    {
        $query = "INSERT INTO {$this->table} (";
        foreach ($data as $key => $value) {
            $query .= "{$key},";
        }
        $query = trim($query, ',');
        $query .= ") VALUES (";

        foreach ($data as $key => $value) {
            $query .= ":{$key},";
        }
        $query = trim($query, ',');
        $query .= ")";

        $stm = $this->db->prepare($query);

        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }

        $stm->execute();
        return $this->getById($this->db->lastInsertId());
    }

    public function updateById($id, $data): ?array
    {
        $query = "UPDATE {$this->table} SET ";
        foreach ($data as $key => $value) {
            $query .= "{$key} = :{$key},";
        }
        $query = trim($query, ',');
        $query .= " WHERE id = :id ";

        $stm = $this->db->prepare($query);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }

        $stm->bindValue(":id", $id);
        $stm->execute();

        return $this->getById($id);
    }

    public function deleteById($id): bool
    {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stm = $this->db->prepare($query);
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
