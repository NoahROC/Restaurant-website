<?php
include("../conn.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if ($user['role'] == 'admin') {
        header("Location: ../../admin_menu.php");
    } else {
        header("Location: ../../index.php");
    }
} else {
    echo "Login mislukt.";
}
?>