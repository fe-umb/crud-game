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
        $enunciado = $_POST['enunciado'];
        $alternativa1 = $_POST['alternativa1'];
        $alternativa2 = $_POST['alternativa2'];
        $alternativa3 = $_POST['alternativa3'];
        $alternativa4 = $_POST['alternativa4'];
        $alternativacorreta = $_POST['alternativacorreta'];
        $ra = $_POST['ra'];

        $banco = new perguntaDao();

        if (!$banco->atualizarPergunta($id, $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $alternativacorreta, $ra)) {
            echo 'Falha na atualização da questão';
        } else {
            echo 'Questão atualizada. Redirecionando...';
            include 'respredpergunta.php';
        }
        ?>
    </body>
</html>