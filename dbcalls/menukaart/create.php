<?php

include("../conn.php");

$menu_title = $_POST["menu_title"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];


// variabel met een SQL query
$sql = "INSERT INTO menu ( menu_title, description, price, image) VALUES (:menu_title, :description, :price, :image)";

//preparestatement
$stmt = $conn->prepare($sql);

//binden van variabel
$stmt->bindParam(":menu_title", $menu_title );
$stmt->bindParam(":description", $description );
$stmt->bindParam(":price", $price );
$stmt->bindParam(":image", $image );

// execute on db
$stmt->execute();

header('location: ../../admin_menu.php');
exit();