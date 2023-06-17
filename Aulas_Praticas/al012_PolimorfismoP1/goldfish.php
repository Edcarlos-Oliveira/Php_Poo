<?php 
    // Criando os atributos
    require_once 'peixe.php';
    class GoldFish extends Peixe {
        public function locomover() {
            echo "<p> Nadando muito fundo...</p><br>";
        }
    }
?>