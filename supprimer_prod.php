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

    $stmt = $connect->prepare("DELETE FROM produit WHERE id_prod = ?");
    $stmt->bind_param("i",$_POST["id_prod"]);

 
    if ($stmt->execute()) {
       
        $success = "Product deleted successfully";
        header("Location: admin.php?success=" . urlencode($success));
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
