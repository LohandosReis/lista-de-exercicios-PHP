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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Idade (anos completos): <input type="number" name="idade" min="0" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $idade = intval($_POST["idade"]);

            $dias = $idade * 365;

            echo "<p>Olá <strong>$nome</strong>! Você já viveu aproximadamente <strong>$dias</strong> dias.</p>";
        }
    ?>
     
    </main>
</body>


</html>