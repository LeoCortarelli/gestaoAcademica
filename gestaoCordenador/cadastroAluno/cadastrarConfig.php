<?php
include ('../../bd/conexao.php');

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];

$sql = "INSERT INTO alunos(nome,data_nascimento) VALUE('$nome','$dataNascimento')";
$query = mysqli_query($conn,$sql);

if (!$query) {
    die('Erro ao inserir dados usuario: ' . mysqli_error($conn));
}

header('Location: cadastrarAluno.php');

?>