<?php
include "../functions_db.php";

add_user($_POST['name'], $_POST['address'], $_POST['inn'], $_POST['kpp'], $_POST['city']);

header ("Location: ../index.php");
?>