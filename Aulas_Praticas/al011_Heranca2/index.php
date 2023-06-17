<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com herança parte 2</h1>
    <pre>
        <?php
            // Chamando a classe visitante 
            require_once 'visitante.php';
            $v1 = new Visitante();
            $v1->setNome("Edcarlos");
            $v1->setIdade(47);
            $v1->setSexo("M");

            // Mostrando o objeto visitante
            print_r($v1);

            // Chamando a classe aluno
            require_once 'aluno.php';
            $a1 = new Aluno();
            $a1->setNome("Sol");
            $a1->setIdade(11);
            $a1->setSexo("F");
            $a1->setMatr(1234);
            $a1->setCurso("Informática");
            $a1->pMensalidade();

            // Mostrando o objeto
            print_r($a1);

            // Chamando a classe bolsista
            require_once 'bolsista.php';
            $b1 = new Bolsista();
            $b1->setNome("Maria");
            $b1->setIdade(52);
            $b1->setSexo("F");
            $b1->setMatr(4321);
            $b1->setCurso("Psicologa");
            $b1->setBolsa(12.5);
            $b1->rBolsa();
            $b1->pMensalidade();

            // Mostrando o objeto
            print_r($b1);

            // Chamando a classe professor
            require_once 'professor.php';
            $p1 = new Professor();
            $p1->setNome("Pedro");
            $p1->setIdade(50);
            $p1->setSexo("M");
            $p1->setEspec("Alfabetização");
            $p1->setSalario(3500);
            $p1->rAumento(500);
            
            // Mostrando o objeto
            print_r($p1);

            // Chamando a classe técnico
            require_once 'tecnico.php';
            $t1 = new Tecnico();
            $t1->setNome("Joana");
            $t1->setIdade(28);
            $t1->setSexo("F");
            $t1->setMatr(2255);
            $t1->setCurso("Mecatrônica");
            $t1->setRegProf(321);
            $t1->praticar();

            // Mostrando o objeto
            print_r($t1);
        ?>
    </pre>
    
</body>
</html>