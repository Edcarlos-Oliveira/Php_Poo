<?php
    require_once 'ex008_Class_Lutador.php';
    class Luta {
        // Definindo os atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Definindo os métodos personalizados
        public function mLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }
            else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar() {
            if ($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor) {
                    case 0: // Empate
                        echo "<br><p> Empate!</p><br>";
                        $this->desafiado->eLuta();
                        $this->desafiante->eLuta();
                        break;
                    case 1: // Desafiado vence
                        echo "<br><p><strong> " . $this->desafiado->getNome() . "</strong> venceu!</p><br>";
                        $this->desafiado->gLuta();
                        $this->desafiante->pLuta();
                        break;
                    case 2: // Desafiante vence
                        echo "<br><p><strong> " . $this->desafiante->getNome() . "</strong> venceu!</p><br>";
                        $this->desafiante->gLuta();
                        $this->desafiado->pLuta();
                        break;
                }
            }
            else {
                echo "<p> Luta não pode acontecer!!!</p><br>";
            }   
        }

        // Definindo os métodos especiais
        public function getDesaf() {
            return $this->desafiado;
        }
        public function setDesaf($dd) {
            return $this->desafiado = $dd;
        }
        public function getDesaft() {
            return $this->desafiante;
        }
        public function setDesaft($dft) {
            return $this->desafiante = $dft;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function setRounds($r) {
            return $this->rounds = $r;
        }
        public function getApro() {
            return $this->aprovada;
        }
        public function setApro($ap) {
            return $this->aprovada = $ap;
        }
    }
?>