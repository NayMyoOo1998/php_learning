<?php

class QueryBilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function Insert($table, $parameter){
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
        $table,
        implode(', ', array_keys($parameter)),
        ':' . implode(', :', array_keys($parameter)),
        );

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameter);
        }catch(Exception $e){
            die("Whoops, Something went wrong?");
        }
    }
}
