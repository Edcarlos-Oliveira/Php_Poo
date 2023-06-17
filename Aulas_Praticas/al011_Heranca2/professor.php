<?php 
    // Criando os atributos
    require_once 'pessoa.php';
    class Professor extends Pessoa {
        private $espec;
        private $salario;

        // Criando os métodos personalizados
        public function rAumento($aum) {
            $this->salario += $aum;
        }
        // Criando os métodos especiais
        public function getEspec() {
            return $this->espec;
        }
        public function setEspec($e) {
            return $this->espec = $e;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($sa) {
            return $this->salario = $sa;
        }
    }
?>