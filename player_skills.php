<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from player_skills";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".
            $row["player_id"] ."</td><td>".
            $row["skill_attr_id"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
