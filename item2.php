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
        echo "<tr><td>".
            $row["enchtvalue0"]. "</td><td>". $row["enchtype0"]. "</td><td>".
            $row["enchtvalue1"]. "</td><td>". $row["enchtype1"]. "</td><td>".
            $row["enchtvalue2"]. "</td><td>". $row["enchtype2"]. "</td><td>".
            $row["enchtvalue3"]. "</td><td>". $row["enchtype3"]. "</td><td>".
            $row["enchtvalue4"]. "</td><td>". $row["enchtype4"]. "</td><td>".
            $row["enchtvalue5"]. "</td><td>". $row["enchtype5"]. "</td><td>".
            $row["enchtvalue6"]. "</td><td>". $row["enchtype6"]. "</td><td>".
            $row["enchtvalue7"]. "</td><td>". $row["enchtype7"]. "</td><td>".
            $row["enchtvalue8"]. "</td><td>". $row["enchtype8"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "brak wyników";
}
