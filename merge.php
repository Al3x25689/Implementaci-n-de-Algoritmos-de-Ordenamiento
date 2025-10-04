<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Merge Sort - Arcade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>⚡ Merge Sort - Orden Alfabético</h2>

    <div class="result">
    <?php
    function mergeSort($arr) {
        if (count($arr) <= 1) {
            return $arr;
        }

        $middle = intdiv(count($arr), 2);
        $left = array_slice($arr, 0, $middle);
        $right = array_slice($arr, $middle);

        $left = mergeSort($left);
        $right = mergeSort($right);

        return merge($left, $right);
    }

    function merge($left, $right) {
        $result = [];
        $i = $j = 0;

        while ($i < count($left) && $j < count($right)) {
            if (strcasecmp($left[$i], $right[$j]) <= 0) {
                $result[] = $left[$i];
                $i++;
            } else {
                $result[] = $right[$j];
                $j++;
            }
        }

        return array_merge($result, array_slice($left, $i), array_slice($right, $j));
    }

    $palabras = ["Zorro", "manzana", "Banana", "kiwi", "pera"];
    echo "Antes de Merge Sort:\n" . implode(", ", $palabras) . "\n\n";
    $palabras = mergeSort($palabras);
    echo "Después de Merge Sort (A-Z):\n" . implode(", ", $palabras) . "\n";
    ?>
    </div>

    <a href="index.php" class="btn">⬅ Volver al Menú</a>
</body>
</html>
