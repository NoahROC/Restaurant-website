<?php

include("dbcalls/conn.php");

$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();