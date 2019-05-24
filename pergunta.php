<?php

/*
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
 */

  /* Resolucao da Classe de Pergunta */

class pergunta {

    private $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $alternativacorreta, $ra;

    function __get($name) {
        switch ($name) {
            case 'enunciado':
                return $this->enunciado;
            case 'alternativa1':
                return $this->alternativa1;
            case 'alternativa2':
                return $this->alternativa2;
            case 'alternativa3':
                return $this->alternativa3;
            case 'alternativa4':
                return $this->alternativa4;
            case 'alternativacorreta':
                return $this->alternativacorreta;
            case 'ra':
                return $this->ra;
        }
    }

    function __set($atributo, $valor) {
        switch ($atributo) {
            case 'enunciado':
                $this->enunciado = $valor;
                break;
            case 'alternativa1':
                $this->alternativa1 = $valor;
                break;
            case 'alternativa2':
                $this->alternativa2 = $valor;
                break;
            case 'alternativa3':
                $this->alternativa3 = $valor;
                break;
            case 'alternativa4':
                $this->alternativa4 = $valor;
                break;
            case 'alternativacorreta':
                $this->alternativacorreta = $valor;
                break;
            case 'ra':
                $this->ra = $valor;
                break;
        }
    }

}
