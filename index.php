<?php 

require_once("config/db.php");

function logIPAddress($ip) {
    $db = new DB();
    $conn = $db->createInstance();

    $insert_query = "INSERT INTO logs (ip, create_time) VALUES (:ip, NOW())";

    $stmt = $conn->prepare($insert_query);
    $stmt->bindParam(":ip", $ip);
    $stmt->execute();

    $results = $stmt->rowCount();

    return $results;
}

logIPAddress($_SERVER["REMOTE_ADDR"]);
header("Location: https://www.veljkoloncarevic.in.rs");

?>