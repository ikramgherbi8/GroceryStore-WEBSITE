<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sales Page</title>
    <link rel="stylesheet" href="ventes.css" >
    <style>
      button {
    background-color: rgb(252, 143, 185);
     border: 2px solid transparent;
     border-radius: 4px;
     color: rgb(9, 5, 5);
     padding: 10px 20px;
     font-size: 16px; 
     }

   button:hover {
     background-color: rgb(159, 227, 250);
     }
    </style>
  </head>
  <body>
  <a href="http://localhost:8080/tp%20final/home.php"> <button > Acceuil</button></a>
    <div class="product-card">
      <img src="pics/cheese.jpg" alt="Product 1">
      <h2>Fromage</h2>
      <p>fromage doux, crémeux et riche qui est fabriqué à partir de lait de haute qualité.</p>
      <button class="buy-button">Acheter <span class="price">900 DA</span></button>
    </div>
    <div class="product-card">
      <img src="pics/161951-crunchy-chips-lays-hd-image-free.png" alt="photo">
      <h2>Chips</h2>
      <p>chips croustillantes et savoureuses .</p>
      <button class="buy-button">Acheter <span class="price">10 DA</span></button>
    </div>
    <div class="product-card">
      <img src="pics/Lettuce-iceberg-.png" alt="photo">
      <h2>la laitue</h2>
      <p>croquante et fraîche.</p>
      <button class="buy-button">Acheter <span class="price">50 DA</span></button>
    </div>
    <div class="product-card">
        <img src="pics/download.jfif" alt="photo">
        <h2>Canette Fanta</h2>
        <p> boisson gazeuse rafraîchissante et sucrée qui est disponible dans une variété de saveurs fruitées.</p>
        <button class="buy-button">Acheter <span class="price">70 DA</span></button>
      </div>
  </body>
</html>