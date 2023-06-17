<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final p2</title>
</head>
<body>
    <h1>Projeto Final P2 continuação de P1</h1>
    <link rel="stylesheet" href="style.css">
    <pre>
        <?php 
            // Chamando as classes
            require_once 'video2.php';
            require_once 'gafanhotos2.php';
            require_once 'visualizacao.php';

            // Criando os objetos
            $v[0] = new Video("Aulas de php POO!!!");
            $v[1] = new Video("Aula de Pyhon");

            $g[0] = new Gafanhoto("João", "M", 35, "jjj");
            $g[1] = new Gafanhoto("Edcarlos", "M", 47, "aaa");

            // Criando as visualizações
            $vis[0] = new Visualizacao($g[0], $v[0]);
            $vis[1] = new Visualizacao($g[1], $v[1]);
            $vis[2] = new Visualizacao($g[0], $v[1]);
            $vis[3] = new Visualizacao($g[1], $v[0]);

            // Chamando as avaliações
            $vis[0]->avaliar();
            $vis[1]->avaliarP(85);

            // Mostrando o objeto
            print_r($v);
            print_r($g);
            print_r($vis);
        ?>
    </pre>
    
</body>
</html>