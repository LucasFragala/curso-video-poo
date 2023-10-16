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
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p> Conta ainda tem dinheiro, não posso fecha-lá!</p>";
        }
    }
    public function depositar(){
        
    }
    public function sacar(){
        
    }
    public function pagarMensal(){
        
    }
//Métodos especiais
    public function __construct(){

    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($n){
        $this->numConta =$n;
    }
}



?>