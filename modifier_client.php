<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superette";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$stmt = $connect->prepare("UPDATE client SET nom_cl=?, prenom_cl=?, username_cl=?, email_cl=?, phone_cl=? WHERE id_cl=?");
$stmt->bind_param("sssssi", $_POST["client_name"], $_POST["prenom_cl"], $_POST["username_cl"], $_POST["email_cl"], $_POST["phone_cl"], $_POST["client_id"]);
if ($stmt->execute()) {
    
    header("Location: clientadmin.php");
    exit();
} else {
    $error = "Database error: " . $connect->error;
    header("Location: modifier_client.php?error=" . urlencode($error));
    exit();
}
$stmt->close();
$connect->close();
?>
