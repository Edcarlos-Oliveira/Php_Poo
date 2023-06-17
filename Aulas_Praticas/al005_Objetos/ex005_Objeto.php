<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Objeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criando Objeto</h1>
    
    <pre>
        <?php
            require_once 'ex005_Class_Objeto.php';
            $cbJ = new ContaBanco(); // Conta do Juvenal
            $cbC = new ContaBanco(); // Conta da Creuza

            // Abrindo a conta do Juvenal
            $cbJ ->aConta("CC");
            $cbJ ->setDono("Juvenal");
            $cbJ ->setnumConta(11111);

            // Abrindo a conta da Creuza
            $cbC ->aConta("CP");
            $cbC ->setDono("Creuza");
            $cbC ->setnumConta(22222);

            // Depositando valores
            $cbJ ->dep(300);
            $cbC ->dep(500);

            // Realizando os saques
            $cbC ->sacar(100);
            
            // Pagando Mensalidade
            $cbJ ->pMensal();
            $cbC ->pMensal();
            
            // Sacando todo saldo para fechar a conta
            $cbJ ->sacar(338);
            $cbC ->sacar(530);

            // Fechar conta (Só executa se não houver saldo ou não esteja negativa)
            $cbJ ->fConta();            
            $cbC ->fConta();

            // Mostrando os Objetos
            print_r($cbJ);
            print_r($cbC);


        ?>
    </pre>
    
</body>
</html>