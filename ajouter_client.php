<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superette";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $stmt = $connect->prepare("INSERT INTO client (nom_cl, prenom_cl, username_cl, email_cl, phone_cl) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_POST["nom"], $_POST["prenom"], $_POST["username"], $_POST["email"], $_POST["phone"]);

        
        if ($stmt->execute()) {
            
            header("Location: clientadmin.php");
            exit();
        } else {
           
            $error = "Database error: " . $connect->error;
            header("Location: ajouter_client.php?error=" . urlencode($error));
            exit();
        }
        $stmt->close();
    }
    $connect->close();
?>



