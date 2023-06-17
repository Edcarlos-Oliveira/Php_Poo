<?php
    // Chamando as classes
    require_once 'pessoa.php';
    require_once 'publicacao.php';
    
    //Criando os atributos
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $tPag;
        private $pAtual;
        private $aberto;
        private $leitor;

        // Criando os métodos personalizados
        public function detalhes() {
            echo " Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> Páginas: " . $this->tPag . " atual " . $this->pAtual;
            echo "<br> Sendo lido por " . $this->leitor->getNome() . "<br><br>";
        }
        // Criando os métodos especiais
        public function __construct($t, $a, $tp, $l)
        {
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTpag($tp);
            $this->setAberto(false);
            $this->setPatual(0);
            $this->setLeitor($l);
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            return $this->titulo = $t;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($a) {
            return $this->autor = $a;
        }
        public function getTpag() {
            return $this->tPag;
        }
        public function setTpag($tp) {
            return $this->tPag = $tp;
        }
        public function getPatual() {
            return $this->pAtual;
        }
        public function setPatual($pa) {
            return $this->pAtual = $pa;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($abt) {
            return $this->aberto = $abt;
        }
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($lt) {
            return $this->leitor = $lt;
        }
        // Subescrevendo os métodos abstratos
        public function abrir() {
            $this->setAberto(true);
        } 
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear($p) {
            if ($this->getAberto()) {
                if ($p > $this->tPag) {
                    $this->pAtual = 0;
                    echo "<p>ERRO! número de páginas maior que <strong>" . $this->getTpag() . "</strong> escolha um número menor!!</p><br>";
                }
                else {
                    $this->pAtual = $p;
                }
            }
            else {
                echo "<p>ERRO! o livro <strong>" . $this->getTitulo() . "</strong>, está fechado!!!</p><br>";
            }
        }
        public function aPag() {
            if ($this->getAberto()) {
                $this->setPatual($this->getPatual() + 1);
            }
            else {
                echo "<p>ERRO! o livro <strong>" . $this->getTitulo() . "</strong>, está fechado!!!</p><br>";
            }
        }
        public function vPag() {
            if ($this->getAberto()) {
                $this->setPatual($this->getPatual() - 1);
            }
            else {
                echo "<p>ERRO! o livro <strong>" . $this->getTitulo() . "</strong>, está fechado!!!</p><br>";
            }
        }
        public function status() {
            if ($this->getAberto() == true) {
                $this->aberto = "Livro ABERTO!!";
            }
            else {
                $this->aberto = "Livro FECHADO!!";
            }
        }
    }
?>
