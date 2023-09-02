<?php
$host = "localhost";
$dbname = "crud_app";
$username = "postgres";
$password = "password";

try {
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM users";
    $result = $db->query($query);

} catch (PDOException $e) {
    echo "Connect Error: " . $e->getMessage();
}
