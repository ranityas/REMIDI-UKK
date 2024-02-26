<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "dbspp";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
    die(mysqli_error ($koneksi));
}

?>