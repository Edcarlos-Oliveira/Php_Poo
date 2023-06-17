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
            require_once 'ex008_Class_Lutador.php';
            require_once 'ex008_Class_Luta.php';
            
            // Criando o objeto Lutador
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
            // Criando o objeto Luta
            $uec = new Luta();

            // Chamando os métodos
            $uec->mLuta($l[4], $l[5]);
            $uec->lutar();
        ?>
    </pre>
</body>
</html>