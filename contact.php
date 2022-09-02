<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style-contact.css">
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
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo "<div class='message'>.$message.</div>";
                }
            }
        ?>
    </form>
</div>
<!-- formulaire d'inscription end -->


            <div id="menu-btn"class="fas fa-bars"></div>
        </section>

    <!-- section header end  -->

    <!-- section contact start  -->

        <section class="contact" id="contact">
            <h1 class="heading-contact"><span>contact </span> us</h1>

            <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15888.664750758013!2d-3.95724735!3d5.3916279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1933d4b2186d5%3A0xf64a1036251b83a4!2sCHU%20d&#39;Angr%C3%A9!5e0!3m2!1sen!2sci!4v1661940136618!5m2!1sen!2sci" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <form action="traitement-contact.php" method="post">
                    <h3 class=""> get touch</h3>
                    <input type="text" name="nom" id="" class="box" placeholder="nom">
                    <input type="email" name="email" id="" class="box" placeholder="email">
                    <input type="number" name="numero" id="" class="box" placeholder="number">
                    <textarea placeholder="message" class="box" name="texte" id="" cols="30" rows="10"></textarea>
                    <input type="submit" name="submit" value="send message" class="btn">
                </form>
            </div>
        </section>

    <!-- section contact end -->

    <div class="footer">
    <div class="box-container">

    <div class="box">
        <h3>Quink links</h3>
        <a href="index.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="compagnie.php"><i class="fas fa-angle-right"></i>compagnie us</a>
        <a href="service.php"><i class="fas fa-angle-right"></i>service policy</a>
        <a href="contact.php"><i class="fas fa-angle-right"></i>conatcct of user</a>
        
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terns of user</a>
        
    </div> 

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +225-076-362-851</a>
        <a href="#"> <i class="fas fa-phone"></i> +225-076-362-851</a>
        <a href="#"> <i class="fas fa-envelope"></i>chris01@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Abidjan, Côte d'ivoire- 225</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
    </div>

    </div>

    <div class="credit"> created by <span>mr. Chris Lorng Onesiphore</span> | all right reserved</div>
</div>

    <!-- section footer start  -->

        

    <!-- section footer end -->


<script src="js/script.js"></script>

</body>
</html>