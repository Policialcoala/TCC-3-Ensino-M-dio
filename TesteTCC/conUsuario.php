<?php
include('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_aluno WHERE nome = '$nome'";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Usuário já cadastrado!";
} else {
    // Cadastrar usuário
    // $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";
    // mysqli_query($conexao, $sql);
    echo "Usuário NÃO cadastrado!";
}
?>