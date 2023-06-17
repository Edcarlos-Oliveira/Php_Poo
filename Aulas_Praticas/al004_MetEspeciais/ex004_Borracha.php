<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com Métodos Especiais</h1>
    <pre>
        <?php
            // Chamada sem parametros definido na classe 
            require_once 'ex004_Class_Borracha.php';
            $bor = new Borracha(); 
            $bor ->setModelo("Kaz");
            $bor ->setCor("Branca");

            // Usando o 'get'
            echo "Eu tenho uma borracha {$bor ->getModelo()} de cor {$bor ->getCor()}.<br><br>";
            print_r($bor)
        ?>
    </pre>
    
    <pre>
        <?php
            // Chamada com parametros definido na classe 
            require_once 'ex004_Class_Borracha.php';
            $bor = new Borracha2 ("Mercurio", "Verde", "Usada"); 
            
            print_r($bor)
        ?>
    </pre>
</body>
</html>