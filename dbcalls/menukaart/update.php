<?php

include("../conn.php");

$id = $_POST["id"];
$menu_title = $_POST["menu_title"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];

$sql = "UPDATE menu SET menu_title = :menu_title, description = :description, price = :price, image = :image WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":id", $id);
$stmt->bindParam(":menu_title", $menu_title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":image", $image);

$stmt->execute();

header("location: ../../admin_menu.php");
