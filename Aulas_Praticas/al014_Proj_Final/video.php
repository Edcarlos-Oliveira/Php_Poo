<?php 
    // Criando os atributos
    require_once 'interface.php';
    class Video implements AcoesVideo {
        private $titulos;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reprod;

        // Criando os métodos especiais
        public function __construct($titulos) {
            $this->titulos = $titulos;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reprod = false;
        }   
        
        public function getTitulos() {
            return $this->titulos;
        }
        public function setTitulos($titulos) {
            return $this->titulos = $titulos;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($avali) {
            return $this->avaliacao = $avali;
        }
        public function getViews() {
            return $this->views;
        }
        public function setViews($vw) {
            return $this->views = $vw;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($ct) {
            $this->curtidas = $ct;
        }
        public function getReprod() {
            return $this->reprod;
        }
        public function setReprod($rpd) {
            return $this->reprod = $rpd;
        }
        // Sobescrevendo os métodos da interface
        public function play() {
            $this->reprod = true;
        }
        public function pause() {
            $this->reprod = false;
        }
        public function like() {
            $this->curtidas ++;
        } 
    }
?>