<?php 
    // Criando os atributos
    require_once 'aluno.php';
    class Bolsista extends Aluno {
        protected $bolsa;

        // Definindo os métodos personalizados
        public function rBolsa() {
            echo "<p> Bolsa da<strong> $this->nome </strong>renovada!!</p><br>";
        }
        // Sobrepondo a declaração da classe aluno
        public function pMensalidade() {
            echo "<p> O aluno(a)<strong> $this->nome </strong>é bolsista, então paga com desconto de $this->bolsa% off.</p><br>";
        }
        // Definindo os métodos especiais
        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($b) {
            return $this->bolsa = $b;   
        }
    }
?>