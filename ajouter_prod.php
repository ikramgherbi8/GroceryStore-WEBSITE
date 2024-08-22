<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["nom_prod"])) {
    $error = "Username is required";
    header("Location: ajouter_prod.php?error=" . urlencode($error));
    exit();
}
if (empty($_POST["description"])) {
    $error = "description is required";
    header("Location: ajouter_prod.php?error=" . urlencode($error));
    exit();
}
if (empty($_POST["quantite_prod"])) {
    $error = "quantity is required";
    header("Location: ajouter_prod.php?error=" . urlencode($error));
    exit();
}
if (empty($_POST["prix_prod"])) {
    $error = "price is required";
    header("Location: ajouter_prod.php?error=" . urlencode($error));
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
$stmt = $connect->prepare("INSERT INTO produit (nom_prod,description_prod,Qte_prod,prix_prod) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $_POST["nom_prod"], $_POST["description"], $_POST["quantite_prod"], $_POST["prix_prod"]);
//vente__.php
if ($stmt->execute()) {
    $produits = array();
    $sql = "SELECT * FROM produit";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $produits[] = $row;
        }
    }
    $html = '';
    foreach ($produits as $produit) {
        $html .= '<div class="product-card">';
        $html .= '<img src="' . $produit["image_url"] . '" alt="' . $produit["nom_prod"] . '">';
        $html .= '<h2>' . $produit["nom_prod"] . '</h2>';
        $html .= '<p>' . $produit["description_prod"] . '</p>';
        $html .= '<button class="buy-button">Acheter <span class="price">' . $produit["prix_prod"] . ' DA</span></button>';
        $html .= '</div>';
    }
    file_put_contents("ventes__.php", $html);

    header("Location: admin.php");
    exit();
} else {
    $error = "Database error: " . $connect->error;
    header("Location: ajouter_prod.php?error=" . urlencode($error));
    exit();
}
$stmt->close();
$connect->close();
}
?>