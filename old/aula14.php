<?php



class Banco {
    private $saldo = 2000;
    public $extrato;
    public $saldoInsuficiente= "Valor inserido inválido! Tente novamente.";
    public $valorinvalido= "O valor inserido esta invalido.";
    public $extratoInvalido= 0;

    public function saque ($valor){
        $padrao = "/[^0-9]/is";
        $valor = preg_replace($padrao, "", $valor);

        if (empty($valor)){
            $this->extrato = $this->saldoInsuficiente;
        }elseif ($this->saldo<$valor){
            $this->extrato = $this->saldoInsuficiente;
        } else {
            $this->extrato = $this->saldo - $valor;
        }
    }

    public function deposito ($valor){
        $padrao = "/[^0-9]/is";
        $valor = preg_replace($padrao, "", $valor);

        if (empty($valor)){
            $this->extrato = $this->valorinvalido;
        } elseif ($valor<0){
            $this->extrato = $this->valorinvalido;
        } else {
            $this->extrato = $this->saldo + $valor;
        }
    }

    public function extrato (){
        $this->extrato = $this->saldo;
    }

    public function pix ($valor, $destino){
        $padrao = "/[^0-9]/is";
        $valor = preg_replace($padrao, "", $valor);

        if (empty($valor)){
            $this->extrato = $this->valorinvalido;
        } elseif ($valor<0){
            $this->extrato = $this->valorinvalido;
        } elseif ($valor > $this->saldo){
            $this->extrato = $this->saldoInsuficiente;
        } else {
            $resultado = $this->saldo-$valor;
            $this->extrato = "O valor de $valor foi transferido para $destino com sucesso, seu saldo atual é de $resultado";
        }
    }


}

$banco = new Banco();
$banco->pix(200,  "Murillo Steigleder Carraro");
echo $banco->extrato;

