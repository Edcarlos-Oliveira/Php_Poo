<?php 
    // Definindo os atributos
    require_once 'pessoa.php';
    class Professor extends Pessoa {
        private $espc;
        private $salario;

        // Definindo os métodos personalizados
        public function rAum($aum) {
            $this->salario += $aum;
        }
        // Definindo os métodos especiais
        public function getEspc() {
            return $this->espc;
        }
        public function setEspc($e) {
            return $this->espc = $e;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($sa) {
            return $this->salario = $sa;
        }
    }
?>