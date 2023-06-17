<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios POO Aula 14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Projeto Final P1</h1>
    <pre>
        <?php
            // Chamando as classes
            require_once 'gafanhotos.php';
            require_once 'video.php';

            $g[0] = new Gafanhoto("Edcarlos", 47, "M", "hhh");
            $g[1] = new Gafanhoto("joana", 11, "F", "lll");

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 2 de Python");
            $v[2] = new Video("Aula 3 de JavaScript");

            // Mostrando os objetos
            print_r($g);
            print_r($v); 
        ?>
    </pre>
    
</body>
</html>