<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submitted, perform validation
    if (empty($_POST["nom"])) {
        $error = "Username is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();

    }if (empty($_POST["prenom"])) {
        $error = "Username is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
    // Check if username is provided
    if (empty($_POST["username"])) {
        $error = "Username is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
    // Check if email is provided
    if (empty($_POST["email"])) {
        $error = "Email is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
    // Check if password is provided
    if (empty($_POST["password"])) {
        $error = "Password is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
    // Check if phone number is provided
    if (empty($_POST["tel"])) {
        $error = "Phone number is required";
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superette";

    // Create a database connection
    $connect = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $connect->prepare("INSERT INTO client (nom_cl,prenom_cl,username_cl,email_cl, password, phone_cl) VALUES (?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssssss",$_POST["nom"],$_POST["prenom"], $_POST["username"],$_POST["email"], $_POST["password"], $_POST["tel"]);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to success page or perform any necessary actions
        header("Location: success.php");
        exit();
    } else {
        // Handle the database error
        $error = "Database error: " . $connect->error;
        header("Location: signUp.php?error=" . urlencode($error));
        exit();
    }

    // Close the statement and database connection
    $stmt->close();
    $connect->close();
}
?>