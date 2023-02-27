<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll($table)
    {

        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOne($table, $id) {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql); //ЗАПРОС SELECT
        $statement->execute([
            "id" => $id,
        ]); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function update($table, $data, $id) {
        $keys = array_keys($data);
        $string = '';
        foreach ($keys as $key) {
            $string .= $key . '=:' . $key . ',';
        }
        $keys = rtrim($string, ",");
        $data["id"] = $id;
        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
        return $statement;
    }

    public function delete ($table,$id)
    {
        $sql = "DELETE FROM {$table} WHERE  id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id
        ]);

    }

    }










