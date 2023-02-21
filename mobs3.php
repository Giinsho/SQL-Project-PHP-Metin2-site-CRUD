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
        echo "<tr><td>". $row["resist_sword"] ."</td><td>". $row["resist_bow"]. "</td><td>".
            $row["resist_dagger"]. "</td><td>". $row["resist_twohand"]. "</td><td>".
            $row["resist_bell"]. "</td><td>". $row["resist_fan"]. "</td><td>".
            $row["resist_fire"]. "</td><td>". $row["resist_poison"]. "</td><td>".
            $row["resist_wind"]. "</td><td>". $row["resist_magic"]. "</td><td>".
            $row["resist_electro"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}

