<?php 
    // Criando os atributos
    require_once 'aluno.php';
    class Tecnico extends Aluno {
        private $regProf;

        // Definindo os métodos personalizados
        public function praticar() {
            echo "<p> Estágio prático em andamento!!</p><br>";
        }
        // Definido os métodos especiais
        public function getRegProf() {
            return $this->regProf;
        }
        public function setRegProf($rp) {
            return $this->regProf = $rp;
        }
    }
?>