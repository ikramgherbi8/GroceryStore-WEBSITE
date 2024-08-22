<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "superette";
$connect = mysqli_connect($host, $user, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_cl = $_POST["id_cl"];
$id_prod = $_POST["id_prod"];
$Qte_v = $_POST["Qte_v"];


$sql = "INSERT INTO ventes (id_client, id_prod, qte_v) VALUES ('$id_cl', '$id_prod', '$Qte_v')";
if (mysqli_query($connect, $sql)) {
    echo "Vente ajoutée avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>
