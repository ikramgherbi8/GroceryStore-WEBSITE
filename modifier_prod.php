<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["id_prod"])) {
        $error = "Product ID is required";
        header("Location: modifier_prod.php?error=" . urlencode($error));
        exit();
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superette";
    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    $stmt = $connect->prepare("UPDATE produit SET nom_prod=?, description_prod=?, Qte_prod=?, prix_prod=? WHERE id_prod=?");
    $stmt->bind_param("ssssi", $_POST["nom_prod"], $_POST["nvdescription"], $_POST["nvquantite_prod"], $_POST["nvprix_prod"], $_POST["id_prod"]);
    if ($stmt->execute()) {
        
        $message = "Product information updated successfully";
        header("Location: admin.php?message=" . urlencode($message));
        exit();
    } else {
        
        $error = "Database error: " . $connect->error;
        header("Location: modifier_prod.php?error=" . urlencode($error));
        exit();
    }
    $stmt->close();
    $connect->close();
}
?>
