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

        $obj = new pergunta();

        $obj->enunciado = $_POST['enunciado'];
        $obj->alternativa1 = $_POST['alternativa1'];
        $obj->alternativa2 = $_POST['alternativa2'];
        $obj->alternativa3 = $_POST['alternativa3'];
        $obj->alternativa4 = $_POST['alternativa4'];
        $obj->alternativacorreta = $_POST['alternativacorreta'];
        $obj->ra = $_POST['ra'];

        $banco = new perguntaDao();

        if (!$banco->inserirPergunta($obj)) {
            echo 'Falha na insercao da questao. Redirecionando...';
        } else {
            echo 'Questao Inserida. Redirecionando...';
        }
            include 'respredpergunta.php';
        ?>
    </body>
</html>