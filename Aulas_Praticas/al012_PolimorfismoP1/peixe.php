<?php 
    // Criação dos atributos
    require_once 'animal.php';
    class Peixe extends Animal {
        protected $corEscama;

        // Criando os métodos especiais
        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($ce) {
            return $this->corEscama = $ce;
        }
        // Definindo o método personalizado
        public function soltarBolha() {
            echo "<p> Soltando Bolhas...</p><br>";
        }
        
        // Subescrevendo os métodos abstratos:
        public function locomover() {
            echo "<p> Nadando...</p><br>";
        }
        public function alimentar() {
            echo "<p> Petiscando algas...</p><br>";
        }
        public function emitirSom() {
            echo "<p> glu glu glu...</p><br>";
        }
    }
?>