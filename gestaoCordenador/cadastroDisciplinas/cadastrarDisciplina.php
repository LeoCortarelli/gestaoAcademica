<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Disciplina</title>
</head>
<body>
    <a href="../cordenador.php">Voltar</a>
    <h2>Cadastrar Disciplina</h2>
    <div>
        <form action="cadastrarDisciplinaConfig.php" method="post">
            <input type="text" placeholder="Nome Disciplina" name="nome"><br>
            <input type="number" placeholder="Carga Horaria" name="ch"><br>
            <textarea name="desc" cols="30" rows="5" placeholder="Descrição"></textarea><br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>