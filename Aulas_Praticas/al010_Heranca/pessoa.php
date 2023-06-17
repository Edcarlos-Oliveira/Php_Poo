<?php 
    // Criando a classe Mãe
    class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    // Definindo os métodos personalizados
    public function fazAniver() {
        $this->idade ++;
    }
    // Definindo os métodos especiais
    public function __construct() {
        $this->nome;
        $this->idade;
        $this->sexo;
        // Não retorna nenhum valor (corrige os apontamentos do programa principal)
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