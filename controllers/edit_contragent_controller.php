<?php
include "functions_db.php";

edit_contragent_by_id($_POST['idcontragent'], $_POST['name'], $_POST['address'], $_POST['inn'], $_POST['kpp'], $_POST['city']);

header('Location: ../contragents.php');
?>