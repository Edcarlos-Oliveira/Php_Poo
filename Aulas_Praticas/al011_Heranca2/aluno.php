<?php 
    // Criando os atributos
    require_once 'pessoa.php';
    class Aluno extends Pessoa {
        private $matr;
        private $curso;

        // Criando os métodos personalizados
        public function pMensalidade() {
            echo "<p> Pagando mensalidade do aluno(a)<strong> $this->nome. </strong></p><br>";
        }
        // Criando os métodos especiais
        public function getMatr() {
            return $this->matr;
        }
        public function setMatr($m) {
            return $this->matr = $m;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($c) {
            return $this->curso = $c;
        }
    }    
?>