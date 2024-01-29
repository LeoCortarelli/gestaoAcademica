<?php
include ('../../bd/conexao.php');

    $nome = $_POST['nome'];
    $cargaHoraria = $_POST['ch'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO disciplina(nome,carga_horario,descricao) VALUE('$nome','$cargaHoraria','$desc')";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        die('Erro ao inserir dados da diciplina:'.mysqli_error($conn));
    }

    header('Location: cadastrarDisciplina.php');
?>