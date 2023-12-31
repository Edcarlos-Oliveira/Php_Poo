<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Lutador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criando Objeto Lutador</h1>
    <pre>
        <?php 
            require_once 'ex007_Class_Lutador.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
            // Chamando a apresentação
            $l[3]->apresentar();
            
            // Chamando o status          
            $l[3]->status();

            // Mostrando o Objeto
            print_r($l)
        ?>
    </pre>
</body>
</html>