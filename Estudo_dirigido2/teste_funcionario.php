<?php
//questao 8

require _DIR_ . "/Estudo_dirigido2/Funcionario.php";
require _DIR_ . "/Estudo_dirigido2/Data.php";

$Rulian = new Funcionario();
$Rulian->salario = 1600;
$Rulian->departamento = "Recursos Humanos";

$data = new Data();
$data->dia = 4;
$data->mes = 4;
$data->ano = 2000;

//questao 11

$Rulian->informarDataEntrada($data);

$Rulian->cpf= "101.992.399-66";

echo $Rulian->mostra();

	echo "<br>-------------------------------------<br>";