<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>
     <form method="post">
        Digite um número: 
        <input type="number" name="valor" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["valor"];     // recebe o valor digitado
            $antecessor = $valor - 1;     // calcula o antecessor

            echo "<p>O número digitado foi: <strong>$valor</strong></p>";
            echo "<p>O antecessor é: <strong>$antecessor</strong></p>";
        }
    ?>
    
    <!-- implementação da solução -->
     
    </main>
</body>
    

</html>