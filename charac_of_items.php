<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from charac_of_item";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["vnum"] ."</td><td>". $row["name_item"]. "</td><td>". $row["type_item"]. "</td><td>".
            $row["size"]. "</td><td>". $row["gold"]. "</td><td>". $row["shop_buy_price"]. "</td><td>".
            $row["value0"]. "</td><td>". $row["value1"]. "</td><td>". $row["value2"]. "</td><td>". (is_null($row["value3"])?"Brak":$row["value3"]). "</td><td>". (is_null($row["value4"])?"Brak":$row["value4"]). "</td><td>".
            (is_null($row["socket1"])?"Brak":$row["socket1"]). "</td><td>". (is_null($row["socket2"])?"Brak":$row["socket2"]). "</td><td>".
            (is_null($row["socket3"])?"Brak":$row["socket3"]). "</td><td>". (is_null($row["socket4"])?"Brak":$row["socket4"]). "</td><td>".
            $row["max_enchant"]. "</td><td>". $row["addon_type"]. "</td><td>".
            $row["refined_vnum"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "brak wyników";
}

