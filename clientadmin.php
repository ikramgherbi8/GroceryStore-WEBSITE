<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin client</title>
    <link rel="stylesheet" href="clientadmin.css" />
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
        .button {
          background-color: #f7aeba;
          color: white;
          font-family: Arial, sans-serif;
          font-size: 16px;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          }

  .button:hover {
    background-color: #f36ca2;
  }
    </style>
  </head>
  <body>
  <a href="http://localhost:8080/tp%20final/vente%20admin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer ventes</button></a>
  <a href="http://localhost:8080/tp%20final/admin.php" target="_blank"> <button style="margin-left: 1400px; "> gerer produits</button></a>
    <div class="admin">
      <div class="pic">
        <img src="pics/Design team-amico.png" alt="photo">
      </div>

      <div class="text">
        <h1>Gestion des clients</h1>

        <h2>Ajouter un client</h2>
        <form action="ajouter_client.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <label for="username">nom d'utilisateur:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="phone">Téléphone:</label>
    <input type="tel" id="phone" name="phone" required>
    <br>
          
    <input type="submit" value="Ajouter client">
    </form>

        <h2>Modifier un client</h2>
        <form action="modifier_client.php" method="post">
          <label for="client_id">ID client:</label>
          <input type="number" id="client_id" name="client_id" required>
          <br>
          <label for="client_name">nouveaux Nom:</label>
          <input type="text" id="client_name" name="client_name" required>
          <br>
          <label for="prenom_cl">nouveaux prenom:</label>
          <input type="text" id="prenom_cl" name="prenom_cl" required>
          <br>
          <label for="username_cl">nouveaux nom d'utilisateur:</label>
          <input type="text" id="username_cl" name="username_cl" required>
          <br>
          <label for="email_cl">nouveaux Email:</label>
          <input type="email" id="email_cl" name="email_cl" required>
          <br>
          <label for="phone_cl">nouveaux Téléphone:</label>
          <input type="tel" id="phone_cl" name="phone_cl" required>
          <br>
          
          <input type="submit" value="Modifier client">
        </form>

        <h2>Supprimer un client</h2>
        <form action="supprimer_client.php" method="post">
          <label for="client_id">ID client:</label>
          <input type="number" id="client_id" name="client_id" required>
          <br>
          <input type="submit" value="Supprimer client">
        </form>
        <h2>chercher un client</h2>
      <form method="post" action="chercher_client.php">
          <input type="text" name="searchKeyword" >
          <button class="button" type="submit" name="search">chercher client</button>
     </form>


      </div>
    </div>
  </body>
</html>

