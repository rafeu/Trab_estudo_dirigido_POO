<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/11/18
 * Time: 07:47
 */

////////QUESTÃO 10///////
/// A vantagem de utilizar o método de classes dentro de outras classes é útil para a melhor
/// manutenção dos dados, assim podendo utilizar essa classe não somente para data de entrada
/// mas também para outras funções como data de saída, etc.


class Data{

    public $dia;
    public $mes;
    public $ano;

    public function __construct(int $dia, int $mes, int $ano) {
        if ($dia < 1 || $dia > 31){
            die("Data inválida");
        } else {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }
    }

    public function getData(){
        return"{$this->dia} / {$this->mes} / {$this->ano}";
    }

    public function __toString(){
        return $this->getData();
    }

}