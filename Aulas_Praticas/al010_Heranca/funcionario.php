<?php 
    // Definindo os atributos
    require_once 'pessoa.php';
    class Funcionario extends Pessoa {
        private $setor;
        private $trab;

        // Definindo os métodos personalizados
        public function mTrab() {
            $this->trab = ! $this->trab;; // Usando o '!(não)' inversor
        }
        // Definindo os métodos especiais
        public function getSetor() {
            return $this->setor;
        }
        public function setSetor($st) {
            return $this->setor = $st;
        }
        public function getTrab() {
            return $this->trab;
        }
        public function setTrab($t) {
            return $this->trab = $t;
        }
    }
?>