<?php

include "server.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("location: index.php?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM client WHERE username_cl='$username' AND password='$password'"; 
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result)) {
            $_SESSION['username_cl'] = $username;
            header("Location: ventes__.php");
            exit();
        } else {
          
            if ($username === 'saylem' && $password === '555') {
                // Set session variable for admin
                $_SESSION['is_admin'] = true;
                header("Location: admin.php");
                exit();
            } else {
                header("location: index.php?error=User Name or password");
                exit();
            }
        }
    }
}
?>