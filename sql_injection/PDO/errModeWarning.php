<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // намеренно внесем ошибку в тело запроса - опечатку в названии поля
    $query = "INSERT INTO `students` (`IDd`, `lastname`, `firstname`, `grid`, `age`) VALUES (NULL, 'Тест22', 'ТестИ22', '3', 21);";
    // выполняем запрос
    $res = $dbh->exec($query); // вернет false, но при этом сгенерит WARNING
    // запись не добавлена, запрос не выполнен, но мы это никак не обрабатываем
    echo "Запись добавлена!".PHP_EOL; // это неправда

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}