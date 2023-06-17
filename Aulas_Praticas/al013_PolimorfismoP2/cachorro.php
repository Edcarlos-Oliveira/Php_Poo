<?php 
    // Criando os métodos
    require_once 'lobo.php';
    class Cachorro2 extends Lobo {
        // Sobrepondo o método
        public function emSom() {
            echo "<p> Au! Au! Au!...</p><br>";
        }
        // Criando os métodos de sobrecarga
        public function reagirF($frase) {
            if ($frase == "Toma Comida" || $frase == "Olá") {
                echo "<p> Abanar e Latir</p><br>";
            }
            else {
                echo "<p> Rosnar</p><br>";
            }

        }
        public function reagirHm($hora, $min) {
            if ($hora < 12) {
                echo "<p> Abanar</p><br>";
            }
            elseif ($hora >= 18) {
                echo "<p> Ignorar</p><br>";
            }
            else {
                echo "<p> Abanar e Latir</p><br>";
            }
        }
        public function reagirD($dono) {
            if ($dono) {
                echo "<p> Abanar</p><br>";
            }
            else {
                echo "<p> Rosnar e Latir</p><br>";
            }
        }
        public function reagirIp($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "<p> Abanar</p><br>";
                }
                else {
                    echo "<p> Latir</p><br>";
                }
            }
            else {
                if ($peso < 10) {
                    echo "<p> Rosnar</p><br>";
                }
                else {
                    echo "<p> Ignorar</p><br>";
                }
            }
        }
    }    
?>