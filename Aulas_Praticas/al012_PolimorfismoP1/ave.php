<?php 
    // Criando os atributos
    require_once 'animal.php';
    class Ave extends Animal {
        protected $corPena;
        
        // Criando os métodos especiais
        public function getCorPena() {
            return $this->corPena;
        }
        public function setCorPena($cp) {
            return $this->corPena = $cp;
        }
        public function fazerNinho() {
            echo "<p> Fazendo ninho...</p><br>";
        }
        
        // Subescrevendo os métodos abstratos:
        public function locomover() {
            echo "<p> Voando...</p><br>";
        }
        public function alimentar() {
            echo "<p> Comendo frutas...</p><br>";
        }
        public function emitirSom() {
            echo "<p> Som das aves...</p><br>";
        }
    }
?>