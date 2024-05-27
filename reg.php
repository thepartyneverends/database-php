<?php
include "functions_db.php";
$cities = get_all_cities();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div>
        <form action="controllers/add_user_controller.php" method="POST" role='form'>
            <div>
                <div><label for="name">Название</label>
                <div>
                    <input id="name" type="text" name="name"/>
                </div>
            </div>

            <div>
                <div><label for="address">ЮрАдрес</label>
                <div>
                    <input id="address" type="text" name="address"/>
                </div>
            </div>

            <div>
                <div><label for="inn">ИНН</label>
                <div>
                    <input id="inn" type="text" name="inn"/>
                </div>
            </div>

            <div>
                <div><label for="kpp">КПП</label>
                <div>
                    <input id="kpp" type="text" name="kpp"/>
                </div>
            </div>

            

            <div class="pole"> <label for="city">Город</label>
            <div>
                <select name="city" id="city">
                    <?php
                    for($i=0;$i<count($cities);$i++){
                        $id=$cities[$i]['КодГорода'];
                        $city=$cities[$i]['Город'];
                        echo ' <option value="'.$id.'">'.$city.'</option>';
                    }
                    ?>
                </select>
            </div>

            <button type="submit" name="add">Добавить</button>
            </div>
            </div>
        </form>
    </div>
    
</body>
</html>