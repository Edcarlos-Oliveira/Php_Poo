<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Herança</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com Herança</h1>
    <pre>
        <?php
            // Chamando as classes 
            require_once 'pessoa.php'; // Não necessário os 'extends' já tem 'pessoas'
            require_once 'aluno.php';
            require_once 'professor.php';
            require_once 'funcionario.php';

            // Programa Principal
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            // Alimentando com os dados
            $p1->setNome("Edcarlos");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");

            //Mostrando os objetos
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
    
</body>
</html>