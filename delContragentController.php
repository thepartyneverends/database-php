<?php
include "functions_db.php";
delContragentById($_GET["id"]);

header("Location: contragents.php");
?>