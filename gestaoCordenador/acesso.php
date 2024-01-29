<?php
    include('../bd/conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){ // Verificando se existe essa variavel

        if(strlen($_POST['email']) == 0){ // Verificando se o campo está em branco
            echo "Preencha seu email";
        }else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        }else{
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sqlcode = "SELECT * FROM cordenador WHERE email = '$email' AND senha = '$senha'";
            $sql_query = mysqli_query($conn, $sqlcode) or die("Falha na execução do codigo sql:" . $mysqli->error);

            $quantidade = $sql_query->num_rows; // Retorna a quantidade de linhas que a consulta retornou

            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header('Location: cordenador.php');

            }else{
                echo "Falha ao logar email ou senha incorretos";
            }

        }

    }
?>