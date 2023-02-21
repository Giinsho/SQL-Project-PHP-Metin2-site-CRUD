<?php
require_once("config.php");

if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}
if($DataBase) {
    $result = $DataBase->query("SELECT * FROM map");
    while($row = $result->fetch_assoc()) {
        $idMapy[] = $row["map_id"];
        $nazwaMapy[] = $row["map_name"];
        $rozmiarX[] = $row["size_x"];
        $rozmiarY[] = $row["size_y"];
        $wysokosc[] = $row["height"];
    }
    $DataBase->close();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie mapy</title>
    <link rel="stylesheet" href="dodawanie.css"/>
</head>

<body>
<div class="login-box">
    <h1>Dodaj pytanie</h1>
    <form method="POST" action="dodawanieDB.php">
        <div class="textbox">
            <input type="text" placeholder="Nazwa mapy" name="nazwaMapy" value="" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Rozmiar X" name="rozmiarX" value="" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Rozmiar Y" name="rozmiarY" value="" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Wysokość" min="1" max="90" name="wysokosc" value="" required>
        </div>

        <input class="btn" type="submit" name="submit" value="Dodaj">
    </form>
    <form action="admin.php">
        <input class="btn" type="submit" name="submit" value="Powrót">
    </form>
</div>
</body>
</html>
