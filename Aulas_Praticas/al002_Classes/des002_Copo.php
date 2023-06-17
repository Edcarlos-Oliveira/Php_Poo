<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Classes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Desafio criação de uma classe</h1>
    <?php 
        require_once 'des002_Class_Copo.php';
        $cp = new Copo();
        $cp ->modelo = "Plástico";
        $cp ->cor = "Amarelo";
        $cp ->personalizado = "Bob Esponja";
        $cp ->limpo = false;

        // Chamando o método 'usar'
        $cp ->usar();

        // Chamando o método 'nãoUsar'
        $cp ->naoUsar();

        // Chamando o método 'limpar'
        $cp ->limpar();

        // Mostrando o objeto:
        print_r($cp);
    ?>
    
</body>
</html>