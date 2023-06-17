<?php 
    // Criando os atributos
    require_once 'interface2.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduz;

        // Criando os métodos especiais
        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduz = false;
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($tt) {
            return $this->titulo = $tt;
        }
        public function getAval() {
            return $this->avaliacao;
        }
        public function setAval($av) {
            $media = ($this->avaliacao + $av) / $this->views;
            return $this->avaliacao = $media;
        }
        public function getViews() {
            return $this->views;
        }
        public function setViews($vw) {
            return $this->views = $vw;
        }
        public function getCurt() {
            return $this->curtidas;
        }
        public function setCurt($ct) {
            return $this->curtidas = $ct;
        }
        public function getRepro() {
            return $this->reproduz;
        }
        public function setRepro($rpd) {
            return $this->reproduz = $rpd;
        }

        // Sobrescrevendo os métodos da interface
        public function play() {
            $this->reproduz = true;
        }
        public function pause() {
            $this->reproduz = false;
        }
        public function like() {
            $this->curtidas ++ ;
        }
    }
?>