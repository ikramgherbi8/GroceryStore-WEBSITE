<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superette";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$stmt = $connect->prepare("DELETE FROM client WHERE id_cl = ?");
$stmt->bind_param("i", $_POST["client_id"]);

if ($stmt->execute()) {
    
    header("Location: clientadmin.php");
    exit();
} else {
    $error = "Database error: " . $connect->error;
    header("Location: supprimer_client.php?error=" . urlencode($error));
    exit();
}

$stmt->close();
$connect->close();

?>
