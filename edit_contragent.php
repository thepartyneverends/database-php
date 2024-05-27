<?php
include "functions_db.php";
$contr=get_contragent_by_id($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать данные контрагента</title>
</head>
<body>
    <div>
        <form action="controllers/edit_contragent_controller.php" method="POST" role='form'>
            <div>
                <h2>Редактирование данных контрагента</h2>
            <div class="pole"><label for="name">Название</label>
            <div>
                <input type="text" id="name" name="name" value="<?php echo $contr["Название"];?>"/>
            </div>
            </div>
            <div class="pole"><label for="address">ЮрАдрес</label>
            <div>
                <input type="text" id="address" name="address" value="<?php echo $contr['ЮрАдрес'];?>"/>
            </div>
            </div>
            <div class="pole"><label for="inn">ИНН</label>
            <div>
                <input type="text" id="inn" name="inn" value="<?php echo $contr['ИНН'];?>"/>
            </div>
            </div>
            <div class="pole"><label for="kpp">КПП</label>
            <div>
                <input type="text" id="kpp" name="kpp" value="<?php echo $contr['КПП'];?>"/>
            </div>
            </div>

            <select name="city" id="city">
                <?php
                $idcity=$contr['idcity'];

                for($i=0;$i<count($cities);$i++){
                    $id=$cities[$i]['КодГорода'];
                    $city=$cities[$i]['Город'];

                    $a="";
                    if($id==$idcity){
                        $a='selected';
                    }
                    echo '<option '.$a.' value="'.$id.'">'.$city.'</option>';
                }
                ?>
            </select>
        </form>
    </div>
</body>
</html>