<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    // потому, что b привелось к int, а int не может начинаться с нуля, поэтому b стало равным 5
    var_dump((int)'012345');     // Почему 12345?
    // то же самое
    var_dump((float)123.0 === (int)123.0); // Почему false?
    // типовое сравнение
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    // строки, не начинающиеся с чисел приводятся к нулю при их переводе в int
?>