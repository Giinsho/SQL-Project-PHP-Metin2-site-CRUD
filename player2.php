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
            $row["hp"] ."</td><td>".
            $row["mp"]. "</td><td>".
            $row["stamina"] ."</td><td>".
            $row["playtime"] ."</td><td>".
            $row["lvl"] ."</td><td>".
            $row["level_step"]. "</td><td>".
            $row["wit"]. "</td><td>".
            $row["inte"]. "</td><td>".
            $row["str"]. "</td><td>".
            $row["dex"]. "</td><td>".
            $row["exp"]. "</td><td>".
            $row["gold"]. "</td><td>".
            $row["stat_points"]. "</td><td>".
            $row["skill_points"] ."</td></tr>";

    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
