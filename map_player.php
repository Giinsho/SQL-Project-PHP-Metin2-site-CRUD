<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}




$sql = "SELECT m.map_name, p.account_id, p.nickname, p.x, p.y, p.z, p.ip FROM player p INNER JOIN map m USING(map_id) WHERE m.map_id=p.map_id ORDER BY m.map_name";
$result = $DataBase -> query($sql);
$current_map = null;
if($result-> num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        if ($row["map_name"] != $current_map) {
            $current_map = $row["map_name"];
            echo "<tr><th ><h1 style='width: 95%'>".$row["map_name"]."</h1></th></tr>";
        }
        echo
            "<tr><td>".
            $row["account_id"] ."</td><td>".
            $row["nickname"] ."</td><td>".
            $row["x"]. "</td><td>".
            $row["y"]. "</td><td>".
            $row["z"]. "</td><td>".
            $row["ip"]
            ."</td></tr>";
        echo "<br>";
    }
    echo "</table>";
}

