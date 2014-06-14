<html>
<head>
    <title>Кракозябры</title>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
</head>
<body><p>
</p><p>
    <?php
    // Этот файл ДОЛЖЕН быть сохранен в кодировке cp1251
    // или любой другой, но тогда обязательно поменять charset=cp1251 в строке 4
    // и в запросе ('set names cp1251') в строке 23
    $db_host = "localhost";
    $db_database = "mysql";
    $db_user = "root";
    $db_password = "616622asd"; // установить нужное значение

    $conn = new mysqli($db_host, $db_user, $db_password, $db_database);
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    if (! $conn->query('set names cp1251')) {
        die('<i>Не выполнен запрос установки кодовой страницы</i><br />');
    }

    // дальше ничего проверяем
    // следующие две строки необязательные, все равно создаем лишь временные таблицы
    $conn->query('drop database if exists mtst');
    $conn->query('create database mtst');
    $conn->query('use mtst');
    echo "Current character set is <b>" . $conn->character_set_name() . '</b><br />';

    $conn->query('create temporary table mtab (
     s_utf8   char(5) character set utf8
    ,s_cp1251 char(5) character set cp1251
    ,s_cp866  char(5) character set cp866
    ,s_koi8r  char(5) character set koi8r
  ) engine=myisam default character set=latin1');

    // Добавим запись в таблицу, в каждой ячейке - коды символов 'абвгд' из соответствующих кодировок.
    // см. http://ru.wikipedia.org/wiki/Windows-1251
    //                                     utf8                     cp1251        cp866         koi8r
    $conn->query('insert into mtab values (0xD0B0D0B1D0B2D0B3D0B4 , 0xE0E1E2E3E4, 0xA0A1A2A3A4, 0xC1C2D7C7C4)');
    if ($res = $conn->query('select * from mtab')) { // есть какой-то результат
        while($row = $res->fetch_row()) {
            echo '<p>'
                . ' <b>utf8  -></b> ' . $row[0]
                . ' <b>cp1251-></b> ' . $row[1]
                . ' <b>cp866 -></b> ' . $row[2]
                . ' <b>koi8r -></b> ' . $row[3] . ' <br /></p>';
        }
        $res->close();
    }
    // смотрим что реально храниться в базе
    if ($res = $conn->query('select hex(s_utf8), hex(s_cp1251), hex(s_cp866), hex(s_koi8r) from mtab')) {
        while($row = $res->fetch_row()) {
            echo '<p>'
                . ' <b>utf8  -></b> ' . $row[0]
                . ' <b>cp1251-></b> ' . $row[1]
                . ' <b>cp866 -></b> ' . $row[2]
                . ' <b>koi8r -></b> ' . $row[3] . ' <br /></p>';
        }
        $res->close();
    }

    /* close connection */
    $conn->close();
    ?>
</p></body>
</html>