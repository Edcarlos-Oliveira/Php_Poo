<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático com Objetos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exemplos com Objetos</h1>
    <pre>
        <?php 
            require_once 'exPratico_Class_Objetos.php';

            $cb = new ContaBanco;
            $cb -> setnumConta(123456);
            $cb -> setTipo("CC");
            $cb -> setDono("Juvenal");
            

            print_r($cb);
        ?>
    </pre>
    
</body>
</html>