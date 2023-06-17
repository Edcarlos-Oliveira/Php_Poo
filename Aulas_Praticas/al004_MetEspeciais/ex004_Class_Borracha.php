<?php
    // Criando a classe sem function com parametro
    class Borracha {
        private $modelo;
        private $cor;
        private $estado;

        // Criação do método (construct sem parametros) passa os parâmetros automaticamente
        public function __construct() {
            $this ->cor = "colorida";
            $this ->estado = "Nova";
        }
                
        // Criação dos métodos (get e set)
        public function condicao() {
            $this ->estado = true;
        }
        public function getModelo() {
            return $this ->modelo;
        }
        public function setModelo($m) {
            return $this ->modelo = $m;
        }
        public function getCor() {
            return $this ->cor;
        }
        public function setCor($c) {
            return $this ->cor = $c;
        }
    }
?>

<?php
    // Criando a classe com function com parametro
    class Borracha2 {
        private $modelo;
        private $cor;
        private $estado;

        // Criação do método (construct com parametros) passa os parâmetros automaticamente
        public function __construct($m, $c, $est) {
            $this ->modelo = $m;
            $this ->cor = $c;
            $this ->estado = $est;
        }
                
        // Criação dos métodos (get e set)
        public function condicao() {
            $this ->estado = true;
        }
        public function getModelo() {
            return $this ->modelo;
        }
        public function setModelo($m) {
            return $this ->modelo = $m;
        }
        public function getCor() {
            return $this ->cor;
        }
        public function setCor($c) {
            return $this ->cor = $c;
        }
    }
?>