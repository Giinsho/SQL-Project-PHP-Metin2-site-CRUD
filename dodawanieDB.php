<?php
require_once("config.php");

if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}
if(isset($_POST['nazwaMapy']) && isset($_POST['rozmiarX']) && isset($_POST['rozmiarY']) && isset($_POST['wysokosc'])){
    if($DataBase){
        $dodawanie = sprintf("INSERT INTO `map` (`map_name`, `size_x`, `size_y`, `height`) VALUES ('%s', '%d', '%d', '%d')",
            htmlspecialchars($_POST['nazwaMapy']),
            htmlspecialchars($_POST['rozmiarX']),
            htmlspecialchars($_POST['rozmiarY']),
            htmlspecialchars($_POST['wysokosc'])
        );
        $result = $DataBase->query($dodawanie);
        $DataBase->close();
    }
}
header('Location: dodawanie.php');
