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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Tintas</title>
</head>
<body>
    <h2>Calculadora de Tinta (Simples)</h2>

    <form method="post">
        Informe a área a ser pintada (em m²): 
        <input type="number" name="area" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $area = $_POST["area"];

            // 1 litro cobre 6 m²
            $litros = ceil($area / 6);

            // cada lata tem 18 litros
            $latas = ceil($litros / 18);

            echo "<h3>Resultado:</h3>";
            echo "Área: $area m² <br>";
            echo "Tinta necessária: $litros litro(s) <br>";
            echo "Quantidade de latas de 18L: $latas";
        }
    ?>
</body>
</html>

     
    </main>
</body>


</html>