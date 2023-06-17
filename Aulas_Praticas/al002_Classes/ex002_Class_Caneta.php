<?php 
    class Caneta {
        // Definindo os atributos
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        // Definindo os métodos
        function rabiscar() {
            // Criando uma condição:
            if ($this->tampada == true) {
                echo "<p>ERRO! Não posso rabiscar!</p><br>";
            }
            else {
                echo "<p>Estou rabiscando...</p><br>";
            } 
        }
        function tampar() {
            $this->tampada = true;

        } 
        function destampar() {
            $this->tampada = false;
        }
    }
?>