<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="client.css" />
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
    <sextion class="textoo" >
           <h1>Help us make you apart of our family</h1> <br>
           <h2> enter your information below</h2>
          <a href="http://localhost:8080/tp%20final/home.php"> <button style="margin-left: 1400px; "> Acceuil</button></a>
           
    </sextion>
                        <section class="Reg">
                        <section class="img">
         <img src="pics/Mobile login-amico.png" >
                                     </section>
                  <section class="form">
    </sextion>
              
      <form action="signUp.php" method="post">
          <div class="nomcl">
            <label >Nom</label>
            <input type="text"
                    id="nom"
                    name="nom"
                    placeholder="Entrer votre nom"/>
          </div>
          <div class="prenomcl">
            <label >prénom</label>
            <input type="text"
                    id="prenom"
                    name="prenom"
                    placeholder="Enter votre prénom"/>
          </div>
        
        <div class="utiliscl">
          <label >nom d'utilisateur</label>
          <input type="text"
                  id="username"
                  name="username"
                  placeholder="Entrer votre nom d'utilisateur"/>
        </div>
          <div class="emailcl">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="@gmail.com"/>
          
          <div class="passcl">
            <label >mot de passe</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Entrer votre mot de passe"/>
          </div>
          <div class="confcl">
            <label >numéro de téléphone</label>
            <input type="tel"
                    id="tel"
                    name="tel"
                    placeholder="Entrez votre numéro de telephone"/>
          </div>
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Sign Up">
        </div>
      </form>
                                    </section>
                                    
                                      </section>



  </body>
</html>