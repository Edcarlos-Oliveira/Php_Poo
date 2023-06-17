<?php
    // Implementando a interface
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        // Criação dos atributos
        private $volume;
        private $ligado;
        private $tocando;

        // Criação dos métodos especiais
        public function __construct()
        {
            $this ->volume = 50;
            $this ->ligado = false;
            $this ->tocando = false;
        }
        private function getVolume() {
            return $this->volume;
        }
        private function setVolume($vl) {
            return $this ->volume = $vl;
        }
        private function getLigado() {
            return $this ->ligado;
        }
        private function setLigado($li) {
            return $this ->ligado = $li;
        }
        private function getTocando() {
            return $this ->tocando;
        }
        private function setTocando($tc) {
            return $this ->tocando = $tc;
        }

        // Sobrescrevendo os métodos abstratos:
        public function ligar() {
            $this ->setLigado(true);
        }
        public function desligar() {
            $this ->setLigado(false); 
        }
        public function aMenu() {
            echo "<br>Está Ligado?: " . ($this ->getLigado() ?"SIM":"NÃO");
            echo "<br><br>Está Tocando?: " . ($this ->getTocando() ?"SIM":"NÃO");
            echo "<br><br>Volume: " .$this ->getVolume();

            for ($i = 0; $i <= $this ->getVolume(); $i += 10) {
                echo " | ";
            }
            echo "<br><br>";
        }
        public function fMenu() {
            echo "<br><br>Fechando Menu...";            
        }
        public function maVolume() {
            if ($this -> getLigado()) {
                $this ->setVolume($this ->getVolume() + 5);
            }
            else {
                echo "<p>ERRO! Equipamento desligado ou no volume máximo!</p><br>";
            }
        }
        public function meVolume() {
            if ($this ->getLigado()) {
                $this ->setVolume($this ->getVolume() - 5);
            }
            else {
                echo "<p>ERRO! Equipamento desligado ou no volume 0!</p><br>";
            }
        }
        public function lMudo() {
            if ($this ->getLigado() && $this ->getVolume() > 0) {
                $this ->setVolume(0);
            }
        }
        public function dlMudo() {
            if ($this ->getLigado() && $this->getVolume() == 0) {
                $this ->setVolume(50);
            }
        }
        public function play() {
            if ($this ->getLigado() && !($this->getTocando())) {
                $this ->setTocando(true);
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }            
        }
    }
?>