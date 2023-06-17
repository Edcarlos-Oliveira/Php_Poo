<?php 
    class Copo {
        // Definindo os atributos
        var $modelo;
        var $tamanho;
        var $cor;
        var $personalizado;
        var $limpo;

        // Definindo os métodos
        function limpar() {
            if ($this->limpo == true) {
                echo "<p>Pronto para uso...</p><br>";
            }
            else {
                echo "<p>Melhor limpar...</p><br>";
            }
        }
        function usar() {
            $this ->limpo = true;
        }
        function naoUsar() {
            $this ->limpo = false;
        } 
    }

?>