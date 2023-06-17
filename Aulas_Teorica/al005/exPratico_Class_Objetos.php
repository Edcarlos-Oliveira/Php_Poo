<?php 
    // Criando a class e atributos
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Criando o método construtor
        public function __construct()
        {
            $this ->saldo = 0;
            $this ->status = false; 
        }

        // Criando os Métodos
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