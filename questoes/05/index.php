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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <form method="post">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        Número 3: <input type="number" name="num3" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            $n3 = $_POST["num3"];

            // Vamos assumir que o primeiro é o maior
            $maior = $n1;

            // Compara com o segundo
            if ($n2 > $maior) {
                $maior = $n2;
            }

            // Compara com o terceiro
            if ($n3 > $maior) {
                $maior = $n3;
            }

            echo "<h3>Resultado:</h3>";
            echo "Os números digitados foram: $n1, $n2 e $n3 <br>";
            echo "O maior número é: <strong>$maior</strong>";
        }
    ?>
     
    </main>
</body>


</html>