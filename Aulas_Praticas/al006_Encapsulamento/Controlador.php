<?php 
    interface Controlador {
        // Criando os métodos abstratos
        public function ligar();
        public function desligar();
        public function aMenu();
        public function fMenu();
        public function maVolume();
        public function meVolume();
        public function lMudo();
        public function dlMudo();
        public function play();
        public function pause();
    }
?>