<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "superette";
$connect = mysqli_connect($host, $user, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_v = $_POST["id_v"];

$sql = "DELETE FROM ventes WHERE id_v='$id_v'";
if (mysqli_query($connect, $sql)) {
    echo "Vente supprimée avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>
