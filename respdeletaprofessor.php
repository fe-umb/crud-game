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

        $ra = $_POST['ra'];
        $senha = $_POST['senha'];

        $banco = new LoginDao();

        if (!$banco->removerProfessor($ra, $senha)) {
            echo 'Falha na deleção de aluno';
        } else {
            echo 'Conta deletada';
        }

        include 'respredhomepage.php';

        ?>
    </body>
</html>