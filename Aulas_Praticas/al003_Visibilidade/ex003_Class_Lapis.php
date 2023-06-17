<?php 
    class Lapis {

        // Criando os Atributos
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $quebrada;

        // Criando os Métodos(Nesse caso os 'public' autoriza mexer nos atributos protegidos)
        public function desenhar() {
            if ($this->quebrada == true) {
                echo "<p>ERRO! Não posso desenhar!</p><br>";
            }
            else {
                echo "<p>Estou desenhando...</p><br>";
            }
        }
        public function semPonta() {
            $this ->quebrada = true;
        }
        public function comPonta() {
            $this ->quebrada = false;
        }
        
    }
?>