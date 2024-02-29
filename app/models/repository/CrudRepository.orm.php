<?php

class CrudRepositoryOrm
{
    protected $table;
    protected $db;

    public function __construct($table, PDO $connecion)
    {
        $this->table = $table;
        $this->db = $connecion;
    }

    public function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getById($id)
    {
        $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function insert($data)
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

    public function updateById($id, $data)
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

    public function deleteById($id)
    {
        $stm = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stm->bindValue(':id', $id);
        $stm->execute();

        $rowCount = $stm->rowCount();
        return $rowCount > 0;
    }

    public function paginate($page, $limit)
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
