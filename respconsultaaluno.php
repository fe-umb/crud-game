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

        $banco = new LoginDao();
        if (!$banco->consultarAluno($conta)) {
            echo '<h1>Dados Incorretos. Redirecionando...</h1>';
            include 'respalunoincorreto.php';
        } else {
            echo '<h1>Bem Vindo!</h1>';
            include 'respdashaluno.php';
        }
        ?>
    </body>
</html>