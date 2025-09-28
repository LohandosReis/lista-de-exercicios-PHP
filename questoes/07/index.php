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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

     <form method="post">
        Digite um número inteiro: 
        <input type="number" name="numero" min="0" required>
        <input type="submit" value="Calcular Fatorial">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["numero"]); // pega o número e garante que seja inteiro
            $fatorial = 1;
            $sequencia = ""; // para mostrar a multiplicação

            if ($n == 0 || $n == 1) {
                $fatorial = 1;
                $sequencia = "1";
            } else {
                for ($i = $n; $i >= 1; $i--) {
                    $fatorial *= $i;
                    $sequencia .= $i;
                    if ($i > 1) {
                        $sequencia .= " × ";
                    }
                }
            }

            echo "<h3>Resultado:</h3>";
            echo "$n! = $sequencia = <strong>$fatorial</strong>";
        }
    ?>
     
    </main>
</body>


</html>