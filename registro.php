<?php
require_once "conexao.php";

$json = array();

if(isset($_POST["codigo"]) && isset($_POST["nome"]) &&
   isset($_POST["categoria"]) && isset($_POST["professor"])){

        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $professor = $_POST["professor"];
    
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO curso (codigo, nome, categoria, professor) VALUES(?, ?, ?, ?);";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $codigo);
        $stmt->bindValue(2, $nome);
        $stmt->bindValue(3, $categoria);
        $stmt->bindValue(4, $professor);
        $status = $stmt->execute();

        if($status)
            echo "registra";

        json_encode($json);
        
}

?>