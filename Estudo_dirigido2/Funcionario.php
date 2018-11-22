<?php
//questao 7
class Funcionario
{
    public $nome;
    public $departamento;
    public $salario;
    public $cpf;
        public function recebeAumento()
    {

        $aumento = $this->salario * 0.1;
        $this->salario = $this->salario + $aumento;

    }

    public function calculaganhoAnual()
    {
        $soma = $this->salario*13;
        $this-> $Soma = $this->salario*13;
        #$media = $saudozo->nome + $castelhano->nome/2;

    }

}

$saudozo = new Funcionario();
$saudozo->nome = "Saudozo de Oliveira Saldanha";
$saudozo->salario = 1000;
$saudozo->departamento = "Financeiro";
$saudozo->recebeAumento();
$saudozo->calculaGanhoAnual();
print_r($saudozo);

$castelhano = new Funcionario();
$castelhano->nome = "Castel Housen";
$castelhano->salario = 3000;
$castelhano->recebeAumento();
$castelhano->calculaGanhoAnual();
print_r($castelhano);
print_r ( $soma);

//questao 9

public function mostra(){
    return "O Funcionario do departamento {$this->departamento}, Funcionario desde {$this->dataEntrada->mostra()} possui um salario de {$this->salario},";
}

public function _toString(){
    return $this->mostra();
}

//questao 12

public function informarDataEntrada(Data $data){

    if ($data->dia > 31 || $data->mes > 12){
        echo "data errada";
    }else {
        $this->dataEntrada = $data;
    }
}