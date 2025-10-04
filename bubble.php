<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bubble Sort - Arcade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2> Bubble Sort - Orden Descendente</h2>

    <div class="result">
    <?php
    function bubbleSortDesc(&$arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] < $arr[$j + 1]) { 
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }

    $numeros = [5, -2, 9, 1, 5, -3, 8];
    echo "Antes de Bubble Sort:\n" . implode(", ", $numeros) . "\n\n";
    bubbleSortDesc($numeros);
    echo "Después de Bubble Sort (desc):\n" . implode(", ", $numeros) . "\n";
    ?>
    </div>

    <a href="index.php" class="btn">⬅ Volver al Menú</a>
</body>
</html>
