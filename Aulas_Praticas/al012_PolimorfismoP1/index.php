<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Polimorfismo Parte 1</h1>
    <pre>
        <?php 
            // Chamando as classes
            require_once 'mamifero.php';
            require_once 'reptil.php';
            require_once 'peixe.php';
            require_once 'ave.php';
            require_once 'canguru.php';
            require_once 'tartaruga.php';
            require_once 'goldfish.php';
            require_once 'arara.php';
            require_once 'cachorro.php';
            
            $m = new Mamifero();
            $m->setPeso(33.5);
            $m->locomover();

            $r = new Reptil();
            $r->setMembros(4);
            $r->locomover();
        
            $p = new Peixe();
            $p->setCorEscama("Azul");
            $p->locomover();

            $a = new Ave();
            $a->setMembros(2);
            $a->fazerNinho();

            $c = new Canguru();
            $c->locomover();
            $c->emitirSom();

            $t = new Tartaruga();
            $t->locomover();

            $gf = new GoldFish();
            $gf->locomover();
            
            $ar = new Arara();
            $ar->locomover();

            $ch = new Cachorro();
            $ch->locomover();
            $ch->emitirSom();
            $ch->entOsso();
            $ch->abnRabo();

            // Mostrando os objetos
            print_r($m);
            print_r($r);
            print_r($p);
            print_r($a);
            print_r($c);
            print_r($t);
            print_r($gf);
            print_r($ar);
            print_r($ch);
        ?>
    </pre>
    
</body>
</html>