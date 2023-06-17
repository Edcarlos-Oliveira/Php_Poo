<?php 
    // Criando os atributos
    require_once 'animal.php';
    class Reptil extends Animal {
        protected $corEscama;

        // Definindo os métodos especiais
        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($ce) {
            $this->corEscama = $ce;
        }
        // Subescrevendo os métodos abstratos:
        public function locomover() {
            echo "<p> Rastejando...</p><br>";
        }
        public function alimentar() {
            echo "<p> Comendo Vegetais...</p><br>";
        }
        public function emitirSom() {
            echo "<p> Sol de Réptil...</p><br>";
        }
    }
?>