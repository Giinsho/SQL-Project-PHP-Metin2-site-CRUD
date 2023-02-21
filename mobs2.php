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
        echo "<tr><td>". $row["enchant_slow"] ."</td><td>". $row["enchant_poison"]. "</td><td>".
            $row["enchant_fire"]. "</td><td>". $row["enchant_electro"]. "</td><td>".
            $row["enchant_penetrate"]. "</td><td>". $row["enchant_critical_hit"].
            "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}

