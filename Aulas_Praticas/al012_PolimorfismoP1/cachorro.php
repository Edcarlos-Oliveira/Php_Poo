<?php 
    // Definindo os métodos personalizados
    require_once 'mamifero.php';
    class Cachorro extends Mamifero {
        public function entOsso() {
            echo "<p> Estou guardando meu ossinho para mais tarde...</p><br>";
        }
        public function abnRabo() {
            echo "Abanando o rabo pelo carinho recebido...</p><br>";
        }
        public function emitirSom() {
            echo "<p> au! au! au!...</p><br>";
        }
    }
?>