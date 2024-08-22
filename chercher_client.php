<?php
require_once('server.php');

if (isset($_POST['search'])) {
    $searchKeyword = $_POST['searchKeyword'];
    $query = "SELECT * FROM client WHERE username_cl LIKE '%$searchKeyword%' OR email_cl LIKE '%$searchKeyword%' OR phone_cl LIKE '%$searchKeyword%'";
    $result = mysqli_query($connect, $query);
}
if (isset($_POST['search'])) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>We found it</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['username_cl']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['email_cl']."</td>";
            echo "<td>".$row['phone_cl']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }
}
mysqli_close($connect);
?>