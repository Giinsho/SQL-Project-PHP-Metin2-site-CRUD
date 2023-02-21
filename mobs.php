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
        echo "<tr><td>".
            $row["vnum"] ."</td><td>". $row["mob_name"]. "</td><td>".
            $row["m_rank"]. "</td><td>". $row["m_type"]. "</td><td>". $row["lvl"]. "</td><td>". $row["size"]. "</td><td>".
            $row["race"]. "</td><td>".
            $row["hp"]. "</td><td>". $row["wit"]. "</td><td>". $row["inte"]. "</td><td>". $row["str"]. "</td><td>".$row["dex"]. "</td><td>".
            $row["def"]. "</td><td>". $row["exp"]. "</td><td>". $row["gold_min"]. "</td><td>". $row["gold_max"]. "</td><td>".
            $row["att_speed"]. "</td><td>". $row["move_speed"]. "</td><td>". $row["damage_min"]. "</td><td>". $row["damage_max"].
            "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
