<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from skill_attr";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".
            $row["skill_id"] ."</td><td>".
            $row["class_name"]. "</td><td>".
            $row["skill_name"]. "</td><td>".
            $row["skill_type"] ."</td><td>".
            $row["step"] ."</td><td>".
            $row["maxlvl"] ."</td><td>".
            $row["target_range"]. "</td><td>".
            $row["splash_range"]. "</td><td>".
            $row["splash_arround_damage"]. "</td><td>".
            $row["max_hit"]. "</td><td>".
            $row["min_hit"]. "</td><td>".
            $row["duration"]. "</td><td>".
            $row["cooldown"]. "</td><td>".
            $row["casting_time"]. "</td><td>".
            $row["mp_cost"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
