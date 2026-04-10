<?php

include("../conn.php");

$id = $_POST["id"];


// variabel met een SQL query
$sql = "DELETE FROM menu WHERE id = :id;";

//preparestatement
$stmt = $conn->prepare($sql);

//binden van variabel
$stmt->bindParam(":id", $id);

// execute on db
$stmt->execute();

header("location: ../../admin_menu.php");