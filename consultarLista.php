<?php 
require_once "conexao.php";

$json = array();

$sql = "SELECT codigo, nome, categoria, professor FROM curso;";

$pdo = Conexao::getInstance();
$stmt = $pdo->prepare($sql);
$stmt->execute();
$registro = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $json['curso'] = $registro;
    
    
echo json_encode($json);

?>