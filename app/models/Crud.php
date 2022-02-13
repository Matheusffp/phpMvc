<?php 

namespace app\models;

class Crud extends Connection
{
    public function create()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $conn = $this->connect();
        $sql = "INSERT INTO tb_person values(default, :nome, :email)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt;
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $res = $stmt->fetchAll();
        return $res;
    }
}