<?php
require_once("config.php");

if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}
    if($DataBase){
        $str = sprintf("UPDATE `map` SET  `map_name` = '%s', `size_x` = '%d', `size_y` = '%d', `height` = '%d' WHERE `map_id` = %d",
            htmlspecialchars($_POST['nazwaMapy']),
            htmlspecialchars($_POST['rozmiarX']),
            htmlspecialchars($_POST['rozmiarY']),
            htmlspecialchars($_POST['wysokosc']),
            htmlspecialchars($_GET['id'])
        );
        $result = $DataBase->query($str);
        $DataBase->close();
    }

    header('Location: edycja.php?id='.$_GET['id']);
