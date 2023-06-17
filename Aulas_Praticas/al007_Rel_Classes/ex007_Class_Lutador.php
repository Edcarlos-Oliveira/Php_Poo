<?php 
    class Lutador {
        // Criando os atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Criando métodos personalizados
        public function apresentar() {
            echo "<p>----------------------------------------------------</p>";
            echo "<p><strong>CHEGOU A HORA!</strong> O lutador <strong>" . $this->getNome();
            echo "</strong> veio diretamente da<strong> " . $this->getNac();
            echo "</strong>, tem " ."<strong>" . $this->getIdade() . "</strong> anos e pesa " . "<strong>" . $this->getPeso() . " kg</strong>";
            echo "<br>Ele tem <strong>" . $this->getVitorias() . "</strong> vitória(s) ";
            echo "<strong" . $this->getDerrotas() . "</strong> derrota(s) e " . "<strong>" . $this->getEmpates() . "</strong> empate(s)!";
        }
        public function status() {
            echo "<p>-----------------------------------------------------</p>";
            echo "<p>" . "<strong>" . $this->getNome() . "</strong>" . " é um peso <strong>" . $this->getCategoria();
            echo "</strong> e já ganhou <strong>" . $this->getVitorias() . "</strong> vez(es)";
            echo " perdeu <strong>" . $this->getDerrotas() . "</strong> vez(es)";
            echo " empatou <strong>" . $this->getEmpates() . "</strong> vez(es)! <br><br>"; 

        }
        public function gLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function pLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function eLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Criando os métodos especiais
        public function __construct($n, $nc, $i, $a, $p, $v, $d, $e) // A categoria será definida pelo próprio sistema, quando for informado o peso.
        {
            $this->setNome($n); $this->setNac($nc); $this->setIdade($i); $this->setAltura($a); $this->setPeso($p); $this->setVitorias($v); $this->setDerrotas($d); $this->setEmpates($e);
        }
        private function getNome() {
            return $this->nome;
        }
        private function setNome($n) {
            return $this ->nome = $n;
        }
        private function getNac() {
            return $this->nacionalidade;
        }
        private function setNac($nc) {
            return $this->nacionalidade = $nc;
        }
        private function getIdade() {
            return $this->idade;
        }
        private function setIdade($i) {
            return $this->idade = $i;
        }
        private function getAltura() {
            return $this->altura;
        }
        private function setAltura($a) {
            return $this->altura = $a;
        }
        private function getPeso() {
            return $this->peso;
        }
        private function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }
        private function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            }
            elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            }
            elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            }
            elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            }
            else {
                $this->categoria = "Inválido";
            }
        }
        private function getVitorias() {
            return $this->vitorias;
        }
        private function setVitorias($v) {
            return $this->vitorias = $v;
        }
        private function getDerrotas() {
            return $this->derrotas;
        }
        private function setDerrotas($d) {
            return $this->derrotas = $d;
        }
        private function getEmpates() {
            return $this->empates;
        }
        private function setEmpates($e) {
            return $this->empates = $e;
        } 
    }
?>