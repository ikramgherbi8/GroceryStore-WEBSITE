<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "superette";


$connect = mysqli_connect($host, $user, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$vente_id = $_POST["vente_id"];
$id_cl = $_POST["id_cl"];
$id_prod = $_POST["id_prod"];
$Qte_v = $_POST["Qte_v"];

$sql = "UPDATE ventes SET id_client='$id_cl', id_prod='$id_prod', qte_v='$Qte_v' WHERE id_v='$vente_id'";
if (mysqli_query($connect, $sql)) {
    echo "Vente modifiée avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>
