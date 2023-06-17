<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Classes POO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criando Classes:</h1>
    <?php 
        require_once 'ex002_Class_Caneta.php';
        $c1 = new Caneta();
        $c1 ->cor = "Azul";
        $c1 ->ponta = 0.5;
        $c1 ->tampada = false;

        // Chamando o método 'tampar'
        $c1 ->tampar();

        // Chamando o método 'destampar'
        $c1 ->destampar();

        // Chamando o método 'rabiscar'
        $c1 ->rabiscar();

       // Mostrando o 'objeto'
        print_r($c1);
        echo "<p></p><br>";

       // Criando outro Objeto
       $c2 = new Caneta;
       $c2 ->cor = "Verde";
       $c2 ->carga = 50;
       $c2 ->tampar();
       print_r($c2);

    ?>
    
</body>
</html>