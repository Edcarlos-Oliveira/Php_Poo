<?php 
    // Criando os atributos
    require_once 'animal.php';
    class Mamifero extends Animal2 {
        protected $corPelo;

        // Sobrepondo os métodos de animal
        public function emSom() {
            echo "<p> Emitindo som de Mamífero...</p><br>";            
        }
        // Criando os métodos especiais
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($cPelo) {
            return $this->corPelo = $cPelo;
        }
    }
?>