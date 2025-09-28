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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>

     <form method="post">
        Digite o valor em metros: 
        <input type="number" name="metros" step="0.01" required>
        <input type="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros = $_POST["metros"];              // valor digitado
            $centimetros = $metros * 100;            // conversão

            echo "<p>$metros metro(s) equivalem a <strong>$centimetros centímetros</strong>.</p>";
        }
    ?>
     
    </main>
</body>


</html>