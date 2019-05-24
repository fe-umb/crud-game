<!DOCTYPE html>
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->

<!-- Resolucao da Resposta de Aluno -->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../JogoMemoria/LoginDao.php';

        $ra = $_POST['ra'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];

        $banco = new LoginDao();
        if (!$banco->atualizarAluno($ra, $senha1, $senha2)) {
            echo ' Dados Incorretos. Redirecionando...';
            include 'atualizaraluno.php';
        } else {
            echo 'Dados Atualizados! Redirecionando...';
            include 'respredaluno.php';
        }
        ?>
    </body>
</html>