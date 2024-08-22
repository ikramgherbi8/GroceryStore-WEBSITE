<!DOCTYPE html>
<html>
<head>
    <title>ventes</title>
<style>
.produit {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    width: 300px;
    display: inline-block;
    vertical-align: top;
}

.produit h2 {
    margin: 0;
    font-size: 24px;
}

.produit p {
    margin: 0;
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
}

.produit .acheter {
    display: block;
    background-color: #f6b2e8;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    margin-top: 10px;
}
.produit .acheter:hover{
    color:#f36ca2;
}
.produit .prix {
    font-weight: bold;
    margin-left: 5px;
}
.logo{
    width:55px;
    margin-left: 15px;
}
.nav{
    width:100%;
    margin:auto;
    padding:20px 0;
    display:flex;
    align-items:center;
    justify-content:space-between;/*list position*/
    background-color: rgb(183, 232, 235);
}
.nav h2{
    margin-right:650px;
}
input[type="text"], input[type="number"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    
}
    </style>
</head>
<body>
    <div class="nav">
        <img src="pics/orchid-market-high-resolution-logo-black-on-transparent-background.png" class="logo">
        <h2>tout ce que votre cœur désire</h2>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superette";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM produit";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="produit">';
            echo '<h2>' . $row["nom_prod"] . '</h2>';
            echo '<p>' . $row["description_prod"] . '</p>';
            echo '<form method="POST" action="ajouter_vente.php">';
            echo '<input type="hidden" name="id_prod" value="' . $row["id_prod"] . '">';

            // Add input fields to capture client ID and quantity
            echo '<label for="id_cl">ID client:</label>';
            echo '<input type="text" name="id_cl" required>';
            echo '<br>';
            echo '<label for="Qte_v">Quantité:</label>';
            echo '<input type="number" name="Qte_v" required>';
            echo '<br>';

            echo '<button type="submit" class="acheter">Acheter <span class="prix">' . $row["prix_prod"] . ' DA</span></button>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
    $connect->close();
    ?>
</body>

</html>
