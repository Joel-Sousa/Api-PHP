<?php 
require_once "conexao.php";

$json = array();

if(isset($_GET["codigo"])){
    
    $codigo = (int) $_GET["codigo"];
    $sql = "SELECT * FROM curso WHERE codigo = ?";

    $pdo = Conexao::getInstance();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $codigo);
    $stmt->execute();
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($registro)
        $json['curso'][] = $registro;

}else{
    $json = "Sem dados";
}

echo json_encode($json);

?>