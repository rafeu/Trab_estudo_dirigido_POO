<?php


class Funcionario{

    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;


    public function __construct() {
        // $this->conexao = new Connection();
        // $this->conexao = $this->conexao->getConnection();
    }


    public function recebeAumento(){
        $acrescimo = $this->salario * 0.1;
        $this->salario = $this->salario + $acrescimo;
    }

    public function calculaGanhoAnual(){
        $ganho = $this->salario * 12;
        return $ganho;
    }

    public function mostra(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->getData()} possui salário de {$this->salario}. \n";

    }

    public function __toString(){
       return $this->mostra();
    }
}