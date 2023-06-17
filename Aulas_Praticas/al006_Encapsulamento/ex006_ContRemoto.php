<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criando um Controle Remoto</h1>
    <pre>
        <?php 
            require_once 'ex006_Class_ContRemoto.php';
            $c = new ControleRemoto();

            // Ligando
            $c ->ligar();

            // Aumentando o volume (definido de 5 em 5)
            $c ->maVolume();

            // Diminuindo o volume (definido de 5 em 5)
            $c ->meVolume();

            // Abrindo o menu
            $c ->aMenu();

            // Mostrando o objeto
            print_r($c);
        ?>
    </pre>
</body>
</html>