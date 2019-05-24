<?php

/*
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
 */
class Login {

    private $ra, $senha, $nome, $sobrenome, $email;

    function __get($name) {
        switch ($name) {
            case 'ra':
                return $this->ra;
            case 'senha':
                return $this->senha;
            case 'nome':
                return $this->nome;
            case 'sobrenome':
                return $this->sobrenome;            
            case 'email':
                return $this->email;
        }
    }

    function __set($atributo, $valor) {
        switch ($atributo) {
            case 'ra':
                $this->ra = $valor;
                break;
            case 'senha':
                $this->senha = $valor;
                break;
            case 'nome':
                $this->nome = $valor;
                break;
            case 'sobrenome':
                $this->sobrenome = $valor;
                break;
            case 'email':
                $this->email = $valor;
                break;
        }
    }

}
