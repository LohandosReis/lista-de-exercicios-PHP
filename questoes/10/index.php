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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <form method="post">
        Tempo em segundos: <input type="number" name="segundos" min="0" required><br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalSegundos = intval($_POST["segundos"]);

            $horas = intdiv($totalSegundos, 3600);
            $resto = $totalSegundos % 3600;
            $minutos = intdiv($resto, 60);
            $segundos = $resto % 60;

            echo "<p>Tempo equivalente: <strong>$horas</strong> hora(s), <strong>$minutos</strong> minuto(s) e <strong>$segundos</strong> segundo(s).</p>";
        }
    ?>
     
    </main>
</body>


</html>