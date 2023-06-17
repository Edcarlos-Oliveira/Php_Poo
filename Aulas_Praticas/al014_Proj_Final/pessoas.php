<?php 
    // Criando os atributos
    abstract class Pessoas {
        protected $nomes;
        protected $idades;
        protected $sexos;
        protected $exper;

        // Criando o método personalizado
        protected function ganExp($n) {
            $this->exper += $n;
        }

        // Criando os métodos especiais
        public function __construct($nomes, $idades, $sexos) {
            $this->nomes = $nomes;
            $this->idades = $idades;
            $this->sexos = $sexos;
            $this->exper = 0;
        }
        public function getNomes() {
            return $this->nomes;
        }
        public function setNomes($nomes) {
            return $this->nomes = $nomes;
        }
        public function getIdades() {
            return $this->idades;
        }
        public function setIdades($idade) {
            return $this->idades = $idade;
        }
        public function getSexos() {
            return $this->sexos;
        }
        public function setSexos($sexo) {
            return $this->sexos = $sexo;
        }
        public function getExper() {
            return $this->exper;
        }
        public function setExper($exp) {
            return $this->exper = $exp;
        }
    }
?>