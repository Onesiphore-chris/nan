<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style-pharmacie.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>
<body>

    <!-- section header start  -->

    <section class="header">
            <a href="index.php" class="logo"><span>H</span>opital</a>
            <nav>
                <div class="navbar">
                    <a href="index.php">acceuil</a>
                    <a href="compagnie.php">compagnie</a>
                    <a href="service.php">services</a>
                    <a href="contact.php">contact</a>
                </div>
            </nav>
            <div class="fas fa-user" id="btn-profil">conexion</div>

<!-- Div contenant les deux formulaires -->
<div class="login-form">
    <!-- formulaire de connexion -->
    <form
        action="conexion-user.php"
        id="login-form"
        method="POST"
        enctype="multipart/form-data"
    >
        <div class="inputBox">
            <span>email</span>
            <input
                type="email"
                name="email"
                id=""
               required placeholder="Entrer votre email"
            />
        </div>

        <div class="inputBox">
            <span>password</span>
            <input
                type="password"
                name="password"
                id=""
               required placeholder="Entrer votre password"
            />
        </div>

        <div class="remember">
            <input type="checkbox" name="submit" class="login-remember" />
            <label for="login-remember">remember me</label>
        </div>

        <!-- <input type="submit" value="login" class="btn"> -->
        <button type="submit" name="submit" class="btn">Login</button>
        <button type="button" class="btn" id="register-btn">
            Créer un compte
        </button>
        <!-- <a href="inscription.php" class="btn">cree un compte</a> -->
    </form>

    <!-- formulaire d'inscription -->
    <form
        id="register-form"
        action="inscription-traitement-user.php"
        
        method="POST"
        enctype="multipart/form-data"
    >
       

        <div class="inputBox">
            <span>username</span>
            <input type="text" name="username" id="" placeholder="Entrer votre nom" required>
        </div>

        <div class="inputBox">
            <span>email</span>
            <input type="email" name="email" id="" placeholder="Entrer votre email" required>
        </div>
        <div class="inputBox">
            <span>numero</span>
            <input type="tel" name="numero" id="" placeholder="Entrer votre numero" required>
        </div>

        <div class="inputBox">
            <span>password</span>
            <input type="password" name="password" id="" placeholder="Entrer votre mot de passe" required>

            <span>confirm-password</span>
            <input type="password" name="cpassword" id="" placeholder="confirmer votre mot de passe" required>
            
            <span>choisir un fichier</span>
            <input type="file" name="image" accept="image/jep, image/jpeg, image/png" name="cpassword" id="" placeholder="confirmer votre mot de passe" required>
            
        </div>

        <div class="remember">
            <input type="checkbox" name="" class="login-remember">
            <label for="login-remember">remember me  </label>
        </div>

        <input type="submit" name="submit" value="s'incrire" class="btn" />
        <!-- <button type="submit" class="btn">S'incrire</button> -->
        <button type="button" class="btn" id="login-btn">
            Se connecter
        </button>
    </form>
</div>
<!-- formulaire d'inscription end -->


            <div id="menu-btn"class="fas fa-bars"></div>
        </section>

    <!-- section header end  -->

    <!-- section pharmacie start  -->
    
    <section class="dishes" id="dishes">
            <h3 class="sub-heading">Achat de Produit</h3>
            <h1 class="heading">pharmacie</h1>
            
            <a href="pharmacieA.php" class="link" >pannier <span><?=!empty($_SESSION['pannier']) ?count($_SESSION['pannier']):0?></span></a>

            <?php

            // $req = $db->prepare('SELECT * FROM pharmacie');
            // $req->execute();
            // var_dump($req->fetch());


            //include la base de donne 
            // selectionner les produits puis afficher 
            include_once 'config.php';
            $req = $dbb->prepare('SELECT * FROM pharmacie');
            $req->execute();
            while($row = $req->fetch()){
                
               
            ?>

            <div class="box-container">
                <form action="" >
                <div class="box">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-eye"></a>
                    <img src="images/<?=$row['img']?>">
                    <h3><?=$row['name']?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, debitis?</p>

                    <span><?=$row['prix']?>$</span>
                <a href="ajoutP.php?id=<?=$row['id']?>"class="btn">Add to cart</a>
                </div>
                </form>
                <?php }?>
            </div>
        </section>  

    <!-- section pharmacie end -->

<!-- section footer start  -->


</div>
<script src="js/script.js">
		</script>

</body>
</html>