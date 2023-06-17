<?php 
    // Criando os atributos
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        // Criando os métodos personalizados
        public function fazAniver() {
            $this->idade ++;
        }

        // Criando os métodos especiais
        public function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }
        public function getNome() {
            return $this->nome;
        }
        public function setNome($n) {
            return $this->nome = $n;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($i) {
            return $this->idade = $i;
        }
        public function getSexo() {
            return $this->sexo;
        } 
        public function setSexo($s) {
            return $this->sexo = $s;
        }
    }
?>