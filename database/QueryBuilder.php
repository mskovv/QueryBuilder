<?php
include 'function.php';

class QueryBuilder{
  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getOne($table, $id){
    $sql = "SELECT * FROM $table WHERE id=:id";
    $stmt = $this->pdo->prepare($sql);
    $stmt ->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function getAll($table){
    $sql = "SELECT * FROM $table";
    $stmt = $this->pdo->prepare($sql);
    $stmt ->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create($table, $data){
    $keys = implode(',', array_keys($data));
    $tags = ':' .implode(',:', array_keys($data));
    $sql = "INSERT INTO $table ($keys) VALUES ($tags)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($data);
  }

  public function delete($table, $id){
    $sql = "DELETE FROM $table WHERE `users`.`id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
  }

  public function update($table, $data, $id){
    $keys = array_keys($data);
    $string = '';
    foreach ($keys as $key){
      $string .= $key . '=:' . $key . ',';
    }
    $result =rtrim($string,',');
    $sql = "UPDATE $table SET $result WHERE id = :id";
    $data['id'] = $id;
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($data);
  }

}