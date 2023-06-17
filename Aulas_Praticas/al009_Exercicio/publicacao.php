<?php 
    // Criando os métodos da Interface
    interface Publicacao {
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function aPag();
        public function vPag();
        public function status();
    }
?>