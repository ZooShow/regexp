<?php

//region квантификация (повторение)
//echo preg_match('/colo?/', 'color') . PHP_EOL;
//echo preg_match('/colo?/', 'colour') . PHP_EOL;
//
//echo preg_match('/colo(uuu)?/', 'colouuuuuu') . PHP_EOL; // группировка
//echo preg_match('/colo(uuu)?/', 'colo') . PHP_EOL; // группировка
//echo preg_match('/colo[ur]?/', 'colou') . PHP_EOL; // группировка
//echo preg_match('/colo[ur]?/', 'colr') . PHP_EOL; // группировка
//
//echo preg_match('/colo+/', 'colo') . PHP_EOL;
//echo preg_match('/colo+/', 'colooooo') . PHP_EOL;
//echo preg_match('/colo+/', 'col') . PHP_EOL;
//
//echo preg_match('/colo*/', 'colo') . PHP_EOL;
//echo preg_match('/colo*/', 'colooooo') . PHP_EOL;
//echo preg_match('/colo*/', 'colasd') . PHP_EOL;
//
//echo preg_match('/colo{1,2}$/', 'colooor') . PHP_EOL;
//echo preg_match('/colo{2,}$/', 'colo') . PHP_EOL;
//endregion

//region жадность - сопоставление всей строке
//$mas = [];
//preg_match_all('/".+"/', 'a "witch" and her "broom" is one', $mas); // жадный квантификатор
//print_r($mas);
//preg_match_all('/".+?"/', 'a "witch" and her "broom" is one', $mas); // ленивый квантификатор
//print_r($mas);
//endregion

//region подмаска
//echo preg_match('/cat(ac|b)/', 'catac') . PHP_EOL;
//echo preg_match('/cat(ac|b)/', 'catb') . PHP_EOL;
//echo preg_match('/cat(ac|b)/', 'catc') . PHP_EOL;

//$mas = [];
//preg_match_all('/((red|white) (king|queen))/', 'the red king', $mas);
//print_r($mas);
//endregion

//region рекурсия
/*echo preg_match('/\(((?>[^()]+)|(?R))*\)/', '(((((((asd)))))))');*/
//endregion

//region обратная ссылка - найти то же самое, что и в N-ой скобочной группе
$mas = [];
//$regexp1 = `/(?<quote>[\'\"])(.*?)\k<quote>/`; // обращение по имени группы
//preg_match_all('/([\'\"])(.*?)\1/', "He said: \"She's the one!\"", $mas);
print_r($mas);
//endregion

//region условные подмаски
//echo preg_match('/(?=\d(sd|b))/', 'asd') . PHP_EOL; // если цифра, то sd, иначе b
//echo preg_match('/(?=\d(sd|b))/', '1sd') . PHP_EOL;
//echo preg_match('/(?=\d(sd|b))/', '1b') . PHP_EOL;
//endregion

//region утверждения (гений решил, что сначала условные подмаски с УТВЕРЖДЕНИЯМИ!!!, ток потом утверждения)
//Утверждения - это проверки касательно символов, идущих до или после текущей позиции сопоставления, ничего при этом не поглощая (никакие символы исходного текста не ставятся в соответствие утверждениям).
//endregion