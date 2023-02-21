<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from player";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".
            $row["ip"] ."</td><td>".
            $row["last_play"]. "</td><td>".
            $row["stat_reset_count"] ."</td><td>".
            (is_null($row["horse_lvl"])?"Brak":$row["horse_lvl"]) ."</td><td>".
            $row["horse_hp"] ."</td><td>".
            $row["horse_stamina"]. "</td><td>".
            $row["horse_skill_points"]. "</td><td>".
            $row["horse_death_count"] ."</td></tr>";

    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
