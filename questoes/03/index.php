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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

     <!-- Formulário -->
    <form method="post">
        Valor ganho por hora (R$): 
        <input type="number" name="valorHora" step="0.01" required><br><br>

        Número de horas trabalhadas no mês: 
        <input type="number" name="horasMes" step="0.01" required><br><br>

        <input type="submit" value="Calcular Salário">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorHora = $_POST["valorHora"];
            $horasMes = $_POST["horasMes"];

            $salario = $valorHora * $horasMes;

            echo "<h3>Resultado:</h3>";
            echo "<p>Você ganha <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong> neste mês.</p>";
        }
    ?>
     
    </main>
</body>


</html>