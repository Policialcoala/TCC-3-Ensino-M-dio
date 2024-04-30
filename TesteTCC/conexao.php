<?php

$servidor   = "localhost";
$banco      = "bd_tcc";
$usuario    = "root";
$senha      = "";
$cdn        = "mysql:host=$servidor;dbname=$banco";

try{
    $conn = new PDO($cdn, $usuario, $senha);
}catch(PDOException $E){
    echo "Erro de conexao burro".$E->getMessage();
}

?>