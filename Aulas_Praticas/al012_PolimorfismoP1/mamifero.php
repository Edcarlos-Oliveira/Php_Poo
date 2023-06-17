<?php 
    // Criando os atributos
    require_once 'animal.php';
    class Mamifero extends Animal {
        protected $corPelo;
    
        // Criando os métodos especiais
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPele($cp) {
            return $this->corPelo = $cp;
        }
        // Subescrevendo os métodos abstratos:
        public function locomover() {
            echo "<p> Correndo...</p><br>";
        }
        public function alimentar() {
            echo "<p> Mamando</p><br>";
        }
        public function emitirSom() {
            echo "<p> Som de Mamífero...</p><br>";
        }
    }
?>