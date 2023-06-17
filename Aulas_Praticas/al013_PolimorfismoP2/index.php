<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com Polimorfismo P2</h1>
    <pre>
        <?php 
            // Chamando as classes
            require_once 'mamifero.php';
            require_once 'lobo.php';
            require_once 'cachorro.php';

            $m = new Mamifero();
            $m->emSom();

            $lo = new Lobo();
            $lo->emSom();
            
            $c = new Cachorro2();
            $c->emSom();
            $c->reagirF("Olá");
            $c->reagirF("Vai apanhar");
            $c->reagirHm(11, 45);
            $c->reagirHm(21, 00);
            $c->reagirD(true);
            $c->reagirD(false);
            $c->reagirIp(2, 12.5);
            $c->reagirIp(17, 4.5);

            // Mostrando o objeto
            print_r($m);
            print_r($lo)
        ?>
    </pre>
    
</body>
</html>