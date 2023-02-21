<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from mobs";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["summon_cooldown"] ."</td><td>". $row["map_id"]. "</td><td>".
            $row["location_x"]. "</td><td>". $row["location_y"].
            "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}

