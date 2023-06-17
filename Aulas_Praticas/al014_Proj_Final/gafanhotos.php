<?php 
    // Criando os atributos
    require_once 'pessoas.php';
    class Gafanhoto extends Pessoas {
        private $login;
        private $totAssist;
        

        // Criando o método personalizado
        public function viuMaisUm() {
            $this->totAssist ++;
        }
        // Criando os métodos especiais
        public function __construct($nomes, $idades, $sexos, $login) {
            parent::__construct($nomes, $idades, $sexos);
            $this->login = $login;
            $this->totAssist = 0;
        }
        public function getLogin() {
            return $this->login;
        }
        public function setLogin($lg) {
            return $this->login = $lg;
        }
        public function getTotAssist() {
            return $this->totAssist;
        }
        public function setTotAssist($ta) {
            return $this->totAssist = $ta;
        }
    }
?>