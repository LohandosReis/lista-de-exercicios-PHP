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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

    
    <form method="post">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        Número 3: <input type="number" name="num3" required><br><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["num1"];
            $b = $_POST["num2"];
            $c = $_POST["num3"];

            // Variáveis auxiliares
            $maior = $a;
            $meio  = $b;
            $menor = $c;

            // Comparações para ordenar
            if ($a >= $b && $a >= $c) {
                $maior = $a;
                if ($b >= $c) {
                    $meio = $b;
                    $menor = $c;
                } else {
                    $meio = $c;
                    $menor = $b;
                }
            } elseif ($b >= $a && $b >= $c) {
                $maior = $b;
                if ($a >= $c) {
                    $meio = $a;
                    $menor = $c;
                } else {
                    $meio = $c;
                    $menor = $a;
                }
            } else {
                $maior = $c;
                if ($a >= $b) {
                    $meio = $a;
                    $menor = $b;
                } else {
                    $meio = $b;
                    $menor = $a;
                }
            }

            echo "<h3>Resultado:</h3>";
            echo "Números digitados: $a, $b, $c <br>";
            echo "Ordem decrescente: <strong>$maior, $meio, $menor</strong>";
        }
    ?>
     
    </main>
</body>


</html>