<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertion Sort - Arcade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Insertion Sort - Orden Alfabético</h2>

    <div class="result">
    <?php
    function insertionSort(&$arr) {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;

            while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
    }

    $nombres = ["Carlos", "ana", "Beatriz", "juan", "alberto"];
    echo "Antes de Insertion Sort:\n" . implode(", ", $nombres) . "\n\n";
    insertionSort($nombres);
    echo "Después de Insertion Sort (A-Z):\n" . implode(", ", $nombres) . "\n";
    ?>
    </div>

    <a href="index.php" class="btn">⬅ Volver al Menú</a>
</body>
</html>
