<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from object";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["object_id"] ."</td><td>". $row["map_id"]. "</td><td>".
            $row["vnum"]. "</td><td>". $row["x"]. "</td><td>" . $row["y"]. "</td><td>" .
            $row["x_rotation"]. "</td><td>" . $row["y_rotation"]. "</td><td>" .  $row["z_rotation"]. "</td><td>" .
            (is_null($row["life"])?"NPC/Obiekt":$row["life"] ) .  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
