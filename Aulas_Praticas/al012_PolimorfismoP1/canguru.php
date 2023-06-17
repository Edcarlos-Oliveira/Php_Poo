<?php 
    // Criando os métodos personalizados
    require_once 'mamifero.php';
    class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "<p> Estou usando a bolsa para proteger o canguruzinho!!!</p><br>";
        }
        public function locomover() {
            echo "<p> Saltando...</p><br>";
        }
    }
?>