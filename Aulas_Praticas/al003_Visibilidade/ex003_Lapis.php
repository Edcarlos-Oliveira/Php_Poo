<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Visibilidade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com Visibilidade</h1>

    <pre>
        <?php
            require_once 'ex003_Class_Lapis.php';
            $lp = new Lapis();
            $lp ->modelo = "Faber-Castell";
            $lp ->cor = "Preto";
            //$lp ->ponta = "Quebrada";
            //$lp ->carga = "2B";
            //$lp ->quebrada = true;
            
            $lp ->desenhar();
            $lp ->semPonta();
            $lp ->comPonta();

            print_r($lp);
        ?>
    </pre>
    
</body>
</html>