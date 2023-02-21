<?php
require_once("config.php");
$DataBase;
if($DataBase->connect_error){
    die("Connection failed: ". $DataBase->connect_error );
}

$sql = "SELECT * from item_attrybuts";
$result = $DataBase -> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["encht"] ."</td><td>". $row["lv1"]. "</td><td>". $row["lv2"]. "</td><td>".
            $row["lv3"]. "</td><td>". $row["lv4"]. "</td><td>".
            (is_null($row["weapon"])?"Brak":$row["weapon"]). "</td><td>".
            (is_null($row["body"])?"Brak":$row["body"]). "</td><td>".
            (is_null($row["neck"])?"Brak":$row["neck"]). "</td><td>".
            (is_null($row["foots"])?"Brak":$row["foots"]). "</td><td>".
            (is_null($row["head"])?"Brak":$row["head"]). "</td><td>".
            (is_null($row["shield"])?"Brak":$row["shield"]). "</td><td>".
            (is_null($row["earrings"])?"Brak":$row["earrings"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}

