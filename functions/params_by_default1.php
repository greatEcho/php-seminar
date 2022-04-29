<?php

/**
 * Функция может вызываться с параметром или без него
 * Если функция вызвана без параметров, будет подставлен параметр по умолчанию
 * @param string $type - тип кофе. параметр принимает значение по умолчанию "капучино"
 * @return string - возвращаемая строка
 */
function makecoffee($type = "капучино")
{
    return "Готовим чашку $type".PHP_EOL;
}

// вызов без параметров - подставится значение по умолчанию
echo makecoffee();
// вызов с параметром - значение по умолчанию не подставляется
echo makecoffee(null);
// вызов с параметром - значение по умолчанию не подставляется
echo makecoffee("эспрессо");