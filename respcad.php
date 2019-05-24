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
        $conta->email = $_POST['txtemail'];
        $conta->senha = $_POST['txtsenha'];
        
        $banco = new LoginDao();
        if(!$banco->inserir($conta)) {
            echo 'Falha na Gravacao';
        } else {
            echo '<h1>Dados Gravados</h1>';
        }
        
        ?>
    </body>
</html>
