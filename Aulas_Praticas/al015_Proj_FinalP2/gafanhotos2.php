<?php 
    // Criando os atributos
    require_once 'pessoa2.php';
    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssist;

        // Criando o método pesonalizado
        public function viuMaisUm() {
            $this->totAssist ++;
        }  
        // Criando os métodos especiais
        public function __construct($nome, $sexo, $idade, $login) {
            parent::__construct($nome, $sexo, $idade);
            $this->login = $login;
            $this->totAssist = 0;
        }
        public function getLogin() {
            return $this->login;
        }
        public function setLogin($lg) {
            return $this->login = $lg;
        }
        public function getTasst() {
            return $this->totAssist;
        }
        public function setTasst($ta) {
            return $this->totAssist = $ta;
        } 
    }
?>