<?php 
    // Criando os atributos
    require_once 'video2.php';
    require_once 'gafanhotos2.php';
    class Visualizacao {
        private $espectador;
        private $filme;

        // Criando os métodos personalizados
        public function avaliar() {
            $this->filme->setAval(5);
        }
        public function avaliarN($nota) {
            $this->filme->setAval($nota);
        }
        public function avaliarP($porc) {
            $nova = 0;
            if ($porc <= 20) {
                $nova = 3;
            }
            elseif ($porc <= 50) {
                $nova = 5;
            }
            elseif ($porc <= 90) {
                $nova = 8;
            }
            else {
                $nova = 10;
            }
            $this->filme->setAval($nova);
        }
        // Criando os métodos especiais
        public function __construct($espectador, $filme) {
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTasst($this->espectador->getTasst() + 1);
        }
        public function getEspect() {
            return $this->espectador;
        }
        public function setEspect($espct) {
            return $this->espectador = $espct;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setFilme($fil) {
            return $this->filme = $fil;
        }
    }
?>