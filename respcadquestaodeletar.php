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
        if(!$banco->deletarPergunta($id)) {
            echo '<h1>ID nao encontrado. Redirecionando...</h1>';
            include 'respcadquestaoinvalida.php';
        } else {
            echo '<h1>Questao removida! Redirecionando...</h1>';
            include 'questoesprofessor.php';
        }
        ?>
    </body>
</html>