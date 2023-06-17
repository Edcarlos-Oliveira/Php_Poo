<?php 
    // Criando os atributos
    require_once 'mamifero.php';
    class Lobo extends Mamifero {
        // Sobrepondo os métodos
        public function emSom() {
            echo "<p> Auuuuuuuuuuuuuuuu!...</p><br>";
        }
    }
?>