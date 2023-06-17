<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro Usuário e Livro</h1>
    <pre>
        <?php
            // Chamando as classes
            require_once 'pessoa.php';
            require_once 'livro.php';
            
            // Criando os objetos 
            $l[0] = new Pessoa("Edcarlos", 47, "M");
            $l[1] = new Pessoa("Joana", 41, "F");
            $lv[0] = new Livro("Batman", "Gotam", 300, $l[0]);
            $lv[1] = new Livro("Homem Aranha", "Aranha", 200, $l[1]);

            $lv[0]->abrir();
            $lv[0]->status();
            //$lv[1]->detalhes();

            print_r($l[0]);
            print_r($lv);
        ?>
    </pre>
</body>
</html>