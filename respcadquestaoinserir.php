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


        require_once 'perguntaDao.php';
        
        $obj = new pergunta();
        $obj->id = $_POST['id'];
        $obj->enunciado = $_POST['enunciado'];
        $obj->alternativa1 = $_POST['alternativa1'];
        $obj->alternativa2 = $_POST['alternativa2'];
        $obj->alternativa3 = $_POST['alternativa3'];
        $obj->alternativa4 = $_POST['alternativa4'];
        $obj->alternativacorreta = $_POST['alternativacorreta'];
        $obj->email = $_POST['emailprofessor'];

        echo $obj->enunciado;
        echo $obj->id;
        echo $obj->alternativa1;
        echo $obj->alternativa2;
        echo $obj->alternativa3;
        echo $obj->alternativa4;
        echo $obj->alternativacorreta;
        echo $obj->emailprofessor;

        $banco = new perguntaDao();

        if(!$banco->inserirPergunta($obj)) {
            echo '<h3>Questao nao inserida<h3>';
        } else {
            echo '<h3>Questao inserida!<h3>';
        }

        ?>

    </body>
</html>