<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from item";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["item_id"] ."</td><td>". $row["owner_id"]. "</td><td>". $row["window_select"]. "</td><td>".
            $row["posit"]. "</td><td>". $row["count"]. "</td><td>". $row["vnum"]. "</td><td>".
            (is_null($row["socket1"])?"Brak":$row["socket1"]). "</td><td>". (is_null($row["socket2"])?"Brak":$row["socket2"]). "</td><td>".
            (is_null($row["socket3"])?"Brak":$row["socket3"]). "</td><td>". (is_null($row["socket4"])?"Brak":$row["socket4"]). "</td><td>".

            (is_null($row["attrtype1"])?"Brak":$row["attrtype1"]). "</td><td>". (is_null($row["attrvalue1"])?"Brak":$row["attrvalue1"]). "</td><td>".
            (is_null($row["attrtype2"])?"Brak":$row["attrtype2"]). "</td><td>". (is_null($row["attrvalue2"])?"Brak":$row["attrvalue2"]). "</td><td>".
            (is_null($row["attrtype3"])?"Brak":$row["attrtype3"]). "</td><td>". (is_null($row["attrvalue3"])?"Brak":$row["attrvalue3"]). "</td><td>".
            (is_null($row["attrtype4"])?"Brak":$row["attrtype4"]). "</td><td>". (is_null($row["attrvalue4"])?"Brak":$row["attrvalue4"]). "</td><td>".
            (is_null($row["attrtype5"])?"Brak":$row["attrtype5"]). "</td><td>". (is_null($row["attrvalue5"])?"Brak":$row["attrvalue5"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "brak wyników";
}

