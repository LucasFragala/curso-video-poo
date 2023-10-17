<?php 
class ContaBanco {
//Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
//Métodos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->saldo = 150;
        }

    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p> Conta ainda tem dinheiro, não posso fecha-lá!</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossível encerrar</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setStatus($this->getSaldo() + $v);
            //$this->saldo = $this->saldo + $v;
        }else {
            echo "<p>Conta fechada. Não consigo depositar </p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()){
            if ($this->getSaldo() > $v){
               //$this->saldo = $this->saldo - $v;
                $this->setSaldo ($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar. </p>";
        }
    }
//Métodos especiais
    function __construct() {
        $this->setSaldo(0);  
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }
    function getnumConta() {
        return $this->numConta;
    }
    function getTipo() {
        return $this->tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function getSaldo () {
        return $this->saldo;
    }
    function getStatus(){
        return $this->status;
    }
    function setnumConta($numConta) {
        $this->numConta = $numConta;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    function setDono($dono)  {
        $this->dono = $dono;
    }
    function setSaldo ($saldo) {
        $this->saldo = $saldo;
    }
    function setStatus($status){
        $this->status = $status;
    }

 
}



?>