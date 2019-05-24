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
        require_once '../JogoMemoria/perguntaDao.php';

        $id = $_POST['id'];

        $banco = new perguntaDao();

        if (!$banco->consultarPergunta($id)) {
            echo 'Falha na consulta da questão. Redirecionando...';
        } else {
            echo 'Questão consultada. Redirecionando...';
        }
            include 'respredpergunta.php';
        ?>
    </body>
</html>