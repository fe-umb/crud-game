<?php

/*
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
 */

    /* Resolucao da Classe DAO de Pergunta */


require_once 'DataSource.php';
require_once 'pergunta.php';

class perguntaDao {

    private $link;

    function __construct() {
        $this->link = new DataSource("bdjogodamemoria");
    }

    function __destruct() {
        $this->link = NULL;
    }

    //Pergunta:

    function inserirPergunta($obj) {
        $sql = "INSERT INTO pergunta (enunciado, alternativa1, alternativa2, alternativa3, alternativa4, alternativacorreta, ra) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $enunciado = $obj->enunciado;
        $alternativa1 = $obj->alternativa1;
        $alternativa2 = $obj->alternativa2;
        $alternativa3 = $obj->alternativa3;
        $alternativa4 = $obj->alternativa4;
        $alternativacorreta = $obj->alternativacorreta;
        $ra = $obj->ra;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sssssii", $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $alternativacorreta, $ra)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function deletarPergunta($id) {
        $sql = "DELETE FROM pergunta WHERE id=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("i", $id)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function atualizarPergunta($id, $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $alternativacorreta, $ra) {
        $sql = "UPDATE pergunta SET enunciado=?, alternativa1=?, alternativa2=?, alternativa3=?, alternativa4=?, alternativacorreta=?, ra=? WHERE id=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sssssisi", $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $alternativacorreta, $ra, $id)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function consultarPergunta($id) {
        $sql = "SELECT * FROM pergunta WHERE id=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("i", $id)) {
            die('Falha na atribuicao de valores');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row['id'] . "<br>" .
                "enunciado: " . $row['enunciado'] . "<br>" .
                "alternativa 1: " . $row['alternativa1'] . "<br>" .
                "alternativa 2: " . $row['alternativa2'] . "<br>" .
                "alternativa 3: " . $row['alternativa3'] . "<br>" .
                "alternativa 4: " . $row['alternativa4'] . "<br>" .
                "alternativa correta: " . $row['alternativacorreta'] . "<br>" .
                "R.A.: " . $row['ra'] . "<br>";
            }
            return true;
        }
    }

    function listarPergunta() {
        $sql = "SELECT * FROM pergunta";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row['id'] . "<br>" .
                "Enunciado: " . $row['enunciado'] . "<br>" .
                "Alternativa 1: " . $row['alternativa1'] . "<br>" .
                "Alternativa 2: " . $row['alternativa2'] . "<br>" .
                "Alternativa 3: " . $row['alternativa3'] . "<br>" .
                "Alternativa 4: " . $row['alternativa4'] . "<br>" .
                "Alternativa correta: " . $row['alternativacorreta'] . "<br>";  
            }
            return true;
        }
    }

}
