<?php
    // Criação da classe e atributos
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Criação dos métodos personalizados
        public function aConta($t) {
            $this ->setTipo($t);
            $this ->setStatus(true);
            if ($t == "CC") {
                $this ->setSaldo(50);
            }
            elseif ($t == "CP") {
                $this ->setSaldo(150);
            }
        }

        public function fConta() {
            if ($this -> getSaldo() > 0) {
                echo "<p>Conta ainda tem saldo, não posso encerrar!</p><br>";
            }
            elseif ($this ->getSaldo() < 0) {
                echo "<p>Conta está negativa, impossível encerrar!</p><br>";
            }
            else {
                $this -> setStatus(false);
                echo "Conta de " . $this->getDono() . " encerrada com sucesso! <br><br>";
            }

        }
        public function dep($v) {
            if ($this -> getStatus()) {
                $this ->setSaldo($this->getSaldo() + $v);
                //$this->saldo = $this->saldo + $v; (Poderia ser reescrito assim)
                echo "Depósito de R$". number_format($v, 2, ",", ".")." na conta da(o) ". $this->getDono() . "</br><br>";
            }
            else {
                echo "<p>Conta encerrada. Não consigo depositar.</p><br>";
            }

        }
        public function sacar($v) {
            if ($this ->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    //$this->saldo = $this->saldo - $v (Poderia ser reescrito assim)
                    echo "Saque de R$" . number_format($v, 2, ",", ".") ." autorizado na conta da(o) ". $this->getDono() . "</br><br>";
                }
                else {
                    echo "<p>Saldo insuficiente para saque.</p><br>";
                }
            }
            else {
                echo "<p>Não posso sacar de uma conta encerrada!</p><br>";
            }
        }
        public function pMensal() {
            if ($this ->getTipo() == "CC") {
                $v = 12;
            }
            elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Mensalidade de R$" . number_format($v, 2, ",", ".")." debitada na conta da(o) ". $this->getDono() . "</br><br>";
            }
            else {
                echo "<p>Saldo insuficiente!</p>";
            }

        }

        // Criação dos métodos especiais
        public function __construct()    
        {
            $this ->saldo = 0;
            $this ->status = false;
            echo "<p>Conta criada com sucesso!</p><br>"; // Não recomendado usar esse 'echo'
        }
        public function getnumConta() {
            return $this ->numConta;
        }
        public function setnumConta($nc) {
            return $this ->numConta = $nc;
        }
        public function getTipo() {
            return $this ->tipo; 
        }
        public function setTipo($t) {
            return $this ->tipo = $t; 
        }
        public function getDono() {
            return $this ->dono;
        }
        public function setDono($d) {
            return $this ->dono = $d;
        }
        public function getSaldo() {
            return $this ->saldo;
        }
        public function setSaldo($s) {
            return $this ->saldo = $s;
        }
        public function getStatus() {
            return $this ->status;
        }
        public function setStatus($st) {
            return $this ->status = $st;
        }
    }
?>