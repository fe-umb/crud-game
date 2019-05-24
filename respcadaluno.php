<!DOCTYPE html>
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../JogoMemoria/LoginDao.php';

        $conta = new Login();
        $conta->ra = $_POST['ra'];
        $conta->senha = $_POST['senha'];
        $conta->nome = $_POST['nome'];
        $conta->sobrenome = $_POST['sobrenome'];
        $conta->email = $_POST['email'];

        $banco = new LoginDao();
        if (!$banco->inserirAluno($conta)) {
            echo 'Falha no Cadastro Redirecionando...';
        } else {
            echo '<h1>Cadastro realizado Redirecionando...</h1>';
        }

        include 'respredaluno.php';
        ?>
    </body>
</html>