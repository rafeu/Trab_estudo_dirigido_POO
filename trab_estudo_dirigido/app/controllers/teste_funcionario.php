<?php

require __DIR__."/app/models/Funcionario.php";
require __DIR__."/app/models/Data.php";


$dataEmpregado1 = new Data(15,05,2001);

$empregado1 = new Funcionario();

$empregado1->departamento = "limpeza";
$empregado1->salario = 1.500;
$empregado1->dataEntrada = $dataEmpregado1;
$empregado1->CPF = "1234567-89";



$dataEmpregado2 = new Data(05,07,1999);

$empregado2 = new Funcionario();

$empregado2->departamento = "gerente";
$empregado2->salario = 3.000;
$empregado2->dataEntrada = $dataEmpregado2;
$empregado2->CPF = "9876543-21";

$empregado1->mostra();
$empregado2->mostra();
