<?php
include "functions_db.php";
$contragents=getAllContragents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Контрагенты</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead><th>Код</th><th>Название</th><th>Адрес</th><th>ИНН</th><th>КПП</th><th>Город</th><th>Редактировать</th><th>Удалить</th></thead>
            <?php
            for($i=0;$i<count($contragents);$i++)
            {
                $id=$contragents[$i]["КодКонтрагента"];
                $name=$contragents[$i]["Название"];
                $address=$contragents[$i]["ЮрАдрес"];
                $inn=$contragents[$i]["ИНН"];
                $kpp=$contragents[$i]["КПП"];
                $city=$contragents[$i]["Город"];
                $href="<a href='edit_contragent.php?id=$id'>...</a>";
                echo "<tr><td>$id</td><td>$name</td><td>$address</td><td>$inn</td><td>$kpp</td><td>$city</td><td>$href</td>
                <td class='text-center'><a href='delContragentController.php?id=".$id."'>
                <img src='open-iconic/svg/x.svg'></a></td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>