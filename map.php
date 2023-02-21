<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from map";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".
            $row["map_id"] ."</td><td>".
            $row["map_name"]. "</td><td>".
            $row["size_x"]. "</td><td>".
            $row["size_y"]. "</td><td>".
            $row["height"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
