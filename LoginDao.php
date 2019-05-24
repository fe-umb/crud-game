<?php

/*
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
 */


 
require_once 'DataSource.php';
require_once 'Login.php';

class LoginDao {

    private $link;

    function __construct() {
        $this->link = new DataSource("bdjogodamemoria");
    }

    function __destruct() {
        $this->link = NULL;
    }

    //ALUNO:

    function inserirAluno($obj) {
        $sql = "INSERT INTO aluno (ra, senha, nome, sobrenome, email) VALUES (?, ?, ?, ?, ?)";
        $ra = $obj->ra;
        $senha = $obj->senha;
        $nome = $obj->nome;
        $sobrenome = $obj->sobrenome;
        $email = $obj->email;
        
        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sssss", $ra, $senha, $nome, $sobrenome, $email)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function removerAluno($ra, $senha) {
        $sql = "DELETE FROM aluno WHERE ra=? AND senha=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $ra, $senha)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function atualizarAluno($ra, $senha1, $senha2) {
        $sql = "UPDATE aluno SET senha=? WHERE ra=? AND senha=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sss", $senha2, $ra, $senha1)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function consultarAluno($obj) {
        $sql = "SELECT * FROM aluno WHERE ra=? AND senha=?";
        $ra = $obj->ra;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $ra, $senha)) {
            die('Falha na atribuicao de valores');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            return true;
        }
    }

    //PROFESSOR:

    function inserirProfessor($obj) {
        $sql = "INSERT INTO professor (ra, senha, nome, sobrenome, email) VALUES (?, ?, ?, ?, ?)";
        $ra = $obj->ra;
        $senha = $obj->senha;
        $nome = $obj->nome;
        $sobrenome = $obj->sobrenome;
        $email = $obj->email;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sssss", $ra, $senha, $nome, $sobrenome, $email)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function removerProfessor($ra, $senha) {
        $sql = "DELETE FROM professor WHERE ra=? AND senha=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $ra, $senha)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function atualizarProfessor($ra, $senha1, $senha2) {
        $sql = "UPDATE professor SET senha=? WHERE ra=? AND senha=?";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sss", $senha2, $ra, $senha1)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function consultarProfessor($obj) {
        $sql = "SELECT * FROM professor WHERE ra=? AND senha=?";
        $ra = $obj->ra;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $ra, $senha)) {
            die('Falha na atribuicao de valores');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            return true;
        }
    }

}
