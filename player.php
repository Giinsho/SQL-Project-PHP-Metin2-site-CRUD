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
            $row["player_id"] ."</td><td>".
            $row["prefix"]. "</td><td>".
            $row["account_id"] ."</td><td>".
            $row["nickname"] ."</td><td>".
            $row["proffesion"] ."</td><td>".
            $row["x"]. "</td><td>".
            $row["y"]. "</td><td>".
            $row["z"]. "</td><td>".
            $row["map_id"]. "</td><td>".
            $row["exit_x"]. "</td><td>".
            $row["exit_y"]. "</td><td>".
            $row["exit_map_index"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
