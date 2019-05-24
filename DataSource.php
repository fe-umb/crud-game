<?php

/*
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
 */

class DataSource {

    private $con;

    function __construct($nomebd) {
        $this->con = mysqli_connect("localhost", "root", "", $nomebd);
        if (!$this->con) {
            die('Falha na conexao');
        }
    }

    function __destruct() {
        mysqli_close($this->con);
    }

    function __get($name) {
        return $this->con;
    }

}
