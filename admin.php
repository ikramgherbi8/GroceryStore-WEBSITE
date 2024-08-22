<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin produit</title>
    <link rel="stylesheet" href="admin.css" />
    <style>
      button {
       background-color: rgb(252, 143, 185);
        border: 2px solid transparent;
        border-radius: 4px;
        color: rgb(9, 5, 5);
        padding: 10px 10px;
        font-size: 13px; 
        }

      button:hover {
        background-color: rgb(159, 227, 250);
        }
    </style>
  </head>
  <body>
    
  <a href="http://localhost:8080/tp%20final/vente%20admin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer ventes</button></a>
  <a href="http://localhost:8080/tp%20final/clientadmin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer clients</button></a>
<div class="admin">

<div class="pic">
        <img src="pics/Design team-amico.png" alt="photo">
  </div>


<div class="text">
    
<h1>Gestion des Produits</h1>
    <h2>Ajouter produit</h2>
    <form action="ajouter_prod.php" method="post">
      <label for="nom_prod">Nom:</label>
      <input type="text" id="nom_prod" name="nom_prod" required>
      <br>
      <label for="description">Description:</label>
      <textarea id="description" name="description"></textarea>
      <br>
      <label for="quantite_prod"> Qte:</label>
      <input type="text" id="quantite_prod" name="quantite_prod">
      <br>
      <label for="product_price">Prix:</label>
      <input type="number" id="prix_prod" name="prix_prod" required>
      <br>
      <input type="submit" value="Ajouter produit">
    </form>
    
    
    <h2>Modifier produit</h2>
    <form action="modifier_prod.php" method="post">
      <label for="id_prod">ID produit:</label>
      <input type="number" id="id_prod" name="id_prod" required>
      <br>
      <label for="nom_prod">Nouveaux nom:</label>
      <input type="text" id="nom_prod" name="nom_prod">
      <br>
      <label for="description">nouvelle description:</label>
      <textarea id="nvdescription" name="nvdescription"></textarea>
      <br>
      <label for="nvquantite_prod">nouvelle Qte:</label>
      <input type="text" id="nvquantite_prod" name="nvquantite_prod">
      <br>
      <label for="prix_prod">Nouveaux Prix:</label>
      <input type="number" id="nvprix_prod" name="nvprix_prod">
      <br>
      <input type="submit" value="Modifier produit">
    </form>


    <h2>supprimer produit</h2>
    <form action="supprimer_prod.php" method="post">
      <label for="id_prod">ID produit:</label>
      <input type="number" id="id_prod" name="id_prod" required>
      <br>
      <input type="submit" value="Supprimer produit">
    </form>


</div>



</div> 
  </body>
</html>