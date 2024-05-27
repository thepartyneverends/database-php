<?php
$link=false;

function openDB()
{
    global $link;

    $link=mysqli_connect("localhost", "root", "", "shop");
    mysqli_query($link, "SET NAMES UTF8");
}

function closeDB()
{
    global $link;
    mysqli_close($link);
}

function getAllContragents()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM Контрагенты");

    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function delContragentById($id)
{
    global $link;
    openDB();

    $res=mysqli_query($link, "DELETE FROM Контрагенты WHERE КодКонтрагента=$id");

    closeDB();
    return $res;
}

function add_user($name, $address, $inn, $kpp, $city)
{
    global $link;
    openDB();
    $res = mysqli_query($link, "INSERT INTO Контрагенты (Название, ЮрАдрес, ИНН, КПП, Город) VALUES ('$name', '$address', '$inn', '$kpp', '$city')");

    closeDB();
    return $res;
}

function get_all_cities()
{
    global $link;
    openDB();
    $res = mysqli_query($link, "SELECT * FROM Города");

    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function edit_contragent_by_id($id, $name, $address, $inn, $kpp, $city)
{
	global $link;

	openDB();

	$res = mysqli_query($link,"UPDATE контрагенты SET Название='$name', ЮрАдрес='$address', ИНН='$inn', КПП='$kpp', Город='$city' WHERE КодКонтрагента=$id");

	closeDB();
    return $res;
}

function get_contragent_by_id($id)
{
	global $link;

	openDB();

	$res = mysqli_query($link, "SELECT * FROM Контрагенты WHERE КодКонтрагента=$id");

	closeDB();
    return $res;
}

