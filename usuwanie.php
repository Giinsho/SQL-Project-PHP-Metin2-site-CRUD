<?php
require_once("config.php");

if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

if($DataBase) {
    $result = $DataBase->query("SELECT * FROM map");
    while($row =  $result->fetch_assoc()) {
        $id[] = $row["map_id"];
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

    <title>Usuwanie map</title>
    <link rel="stylesheet" href="usuwanie.css"/>
</head>

<body>
    <div class="login-box">
        <h1>Wszystkie mapy</h1>
        <div class="edycja">
            <?php
            for($i = 0 ; $i<count($id);$i++){

                echo "<div class='pytanie'>","Nazwa:", $nazwaMapy[$i], "</div>";
                echo "<ul>";
                echo "<li>", "Rozmiar X: ",$rozmiarX[$i] , "</li>";
                echo "<li>", "Rozmiar Y: ",$rozmiarY[$i] , "</li>";
                echo "<li>", "Wysokość: ",$wysokosc[$i] , "</li>";
                echo "</ul>";
                echo "<a class='edit' href='usuwanieDB.php?id=", $id[$i], "'>Usuń</a>";
            }
            ?>
        </div>
        <form action="admin.php">
            <input class="btn" type="submit" name="submit" value="Powrót">
        </form>
    </div>

</body>
</html>