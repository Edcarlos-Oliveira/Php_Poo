<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança Parte 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Trabalhando com herança Parte 2</h1>
    <ul>
        <li>Toda subclasse pode ser Mãe</li>
        <li>A classe principal também conhecida como 'raiz'</li>
        <li>As classes que não tem 'filhas' são consideradas como 'folhas'</li>
        <li>Descendentes => os filhos das filhas (Ex: A tem filha AB sendo que AB tem filha ABA(descendente de A)) </li>
        <li>Ancestral => dos netos para baixo, (Ex: A não é ancestral de AB e sim de ABA(A é ancestral de ABA))</li>
        <li>Árvore de baixo para cima => Generalização</li>
        <li>Árvore de cima para baixo => Especialização</li>
        
        <li>Tipos de herança:</li>
        <ul>
            <li>Herança de Implementação => Implementa uma classe abstrata (Herança Pobre)</li>
            <li>Herança para Diferença => Mais completa</li>
        </ul>
        <li>Classe Abstrata => Não pode ser instanciada apenas serve como Mãe</li>
        <li>Método Abstrato => Declarado, mas não implementando na classe mãe;</li>
        <li>Classe Final => Não pode ser herdada, apenas folha</li>
        <li>Método Final => Não pode ser subescrito pelas suas subclasses, obrigatoriamente herdado.</li>
    </ul>  
</body>
</html>