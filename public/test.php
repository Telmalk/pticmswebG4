<?php
    /**
     * Genérer de 1 a 100
     * De remplacer tout les multiple 3 -> san
     * De remplacer tout les multiple 5 -> go
     * et le multiple de 3 et 5 -> sango
     */

    for ($i = 1; $i < 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0){
            echo "sango";
         } else if ($i % 3 === 0) {
            echo "san";
        } else if ($i % 5 === 0) {
            echo "go";
        } else {
            echo $i;
        }
    }

    $x1 = 48.9718842;
    $y1 = 2.2603381;
    $x2 = 48.970039;
    $y2 = 2.263557;
    $toto1 = acos(sin($y1) * sin($y2) + cos($x1) * cos($x2) * cos($x1 - $x2));
    echo "\n" . $toto1;