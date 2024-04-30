<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$sql = "INSERT INTO tb_aluno(nome, email, telefone, senha)
                    VALUES('$nome', '$email', '$telefone', '$senha')";
                    echo $sql;
try{
    $conn->exec($sql); echo("Dados gravados");
    // header("Location: ../consultar.php?cad=s");
}catch(PDOException $E){
    echo("Erro ao cadastrar".$E->getMessage());
}
// Antifragil

?>









<!-- 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            
            // include "conexao.php";

            //  $nome = $_POST['$nome'];
            //  $email = $_POST['$email'];
            //  $senha = $_POST['$senha'];
            //  $carrinho = $_POST['$carrinho'];
            //  $produto_software = $_POST['$produto_software'];

            //  $sql = "INSERT INTO `tb_clientes`(`nome`, `email`, `senha`, `carrinho`, `produto_software`) 
            //  VALUES ('$nome','$email','$senha','$carrinho','$produto_software')";

            
            
            //         </div>
            //     </div>
            // </body>
            // </html> -->
            
        -->