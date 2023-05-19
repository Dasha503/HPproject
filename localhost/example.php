<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страничка</title>
</head>
<body>
<?php
    $con = mysqli_connect("localhost", "root", "", "DB");
    mysqli_set_charset($con, "utf8");

    if ($con == false) {
        echo ("Ошибка подключения: " . mysqli_connect_error());
    }
    else {
        $sql = "SELECT id, name FROM data";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            echo (
                    "<h1> Название строки: </h1>
                    <h3>{$row['name']}</h3>"
            );
        }
    }
?>
</body>
</html>
