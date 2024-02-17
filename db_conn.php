<?php

$server_name="localhost";
$user_name="id20840308_gisuser";
$password="Gisuser@123";

$db_name="id20840308_gisdb";

$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


