<?php
require_once("config.php");

if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}
if($DataBase) {
    $result = $DataBase->query("SELECT * FROM map");
    $map= [];

        $PostyBaza = $DataBase->query("SELECT * FROM map WHERE map_id = ".$_GET['id']);
        while($row = $PostyBaza->fetch_assoc()){
            $map = $row;
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
    <title>Eydytowanie mapy</title>
    <link rel="stylesheet" href="dodawanie.css"/>
</head>

<body>
<div class="login-box">
    <h1>Edytuj pytanie</h1>
    <form method="POST" action="edytowanieDB.php<?php echo "?id"?>=<?php echo $map['map_id'] ?>">
        <div class="textbox">
            <input type="text" placeholder="Nazwa mapy" name="nazwaMapy" value="<?php echo $map['map_name'] ?>" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Rozmiar X" name="rozmiarX" value="<?php echo $map['size_x'] ?>" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Rozmiar Y" name="rozmiarY"  value="<?php echo $map['size_y'] ?>" required>
        </div>

        <div class="textbox">
            <input type="number" placeholder="Wysokość" name="wysokosc" min="1" max="90" value="<?php echo $map['height'] ?>" required>
        </div>

        <input class="btn" type="submit" name="submit" value="Edytuj">
    </form>
    <form action="edycja.php">
        <input class="btn" type="submit" name="submit" value="Powrót">
    </form>
</div>
</body>
</html>
