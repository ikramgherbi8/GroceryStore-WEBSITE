<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin ventes</title>
    <link rel="stylesheet" href="venteadmin.css" />
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

  <a href="http://localhost:8080/tp%20final/clientadmin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer clients</button></a>
  <a href="http://localhost:8080/tp%20final/admin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer produits</button></a>
    <div class="admin">

      <div class="pic">
        <img src="pics/Design team-amico.png" alt="photo">
      </div>

      <div class="text">
      <h1>Gestion des Ventes</h1>
        <h2>Ajouter vente</h2>
        <form action="ajouter_vente.php" method="post">
          <label for="id_cl">Id client:</label>
          <input type="text" id="id_cl" name="id_cl" required>
          <br>
          <label for="id_prod">ID produit:</label>
          <textarea id="id_prod" name="id_prod" required></textarea>
          <br>
          <label for="Qte_v">Qte:</label>
          <input type="number" id="Qte_v" name="Qte_v" required>
          <br>
          <input type="submit" value="Ajouter vente">
        </form>

        <h2>Modifier vente</h2>
        <form action="modifier_vente.php" method="post">
          <label for="vente_id">ID vente:</label>
          <input type="number" id="vente_id" name="vente_id" required>
          <br>
          <label for="id_cl">nouveaux Id client:</label>
          <input type="text" id="id_cl" name="id_cl" required>
          <br>
          <label for="id_prod">nouveaux ID produit:</label>
          <textarea id="id_prod" name="id_prod" required></textarea>
          <br>
          <label for="Qte_v">nouvelle Qte:</label>
          <input type="number" id="Qte_v" name="Qte_v" required>
          <br>
          <input type="submit" value="Modifier vente">
        </form>

        <h2>supprimer vente</h2>
        <form action="supprimer_vente.php" method="post">
          <label for="id-v">ID vente:</label>
          <input type="number" id="id_v" name="id_v" required>
          <br>
          <input type="submit" value="Supprimer vente">
        </form>
      </div>
      
    </div> 
  </body>
</html>
