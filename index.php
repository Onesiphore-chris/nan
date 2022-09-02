<?php 
    session_start();
    include_once 'config.php';    

 $check = $dbb->prepare('SELECT nom, numero, email, texte  FROM information-contact WHERE email=?');
 $data =$check->fetch();
 $row = $check->rowCount();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

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

    <!-- section header titre start  -->

        <div class="sub-header">
            <div class="header-title">
                <h2>We follow a  holistic approach  to health care.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Architecto, nobis.</p>
                <a href="" class="btn">regarder les videos <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="header-image">
                <img src="images/1.jpg" alt="">
            </div>
            </div>

    <!-- section header titre end -->

    <!-- section icone start  -->

    <?php 
            session_start();
            include_once 'config.php';
            
            $sql = "SELECT * FROM user WHERE role = 'doctor'";
            $select = $dbb->prepare($sql);
            $select->execute();
            if($row = $select->fetchAll()){

            $doctor = count($row);
?>

<?php

            $sql = "SELECT * FROM user WHERE role = 'user'";
            $select = $dbb->prepare($sql);
            $select->execute();
            if($row = $select->fetchAll()){

                $user = count($row);

?>

           


        <section class="icone-container">
            <div class="icone">
            <i class="fa-solid fa-user-doctor"></i>
                <h3><?php  echo $doctor?></h3>
                <p>doctors at work</p>
            </div>
            <div class="icone">
                <i class="fas fa-users"></i>
                <h3><?php  echo $user?></h3>
                <p>statifed utilisateur</p>
            </div>
            <div class="icone">
                <i class="fas fa-procedures"></i>
                <h3>+1000</h3>
                <p>patient hospitaliser</p>
            </div>
            <div class="icone">
                <i class="fas fa-hospital"></i>
                <h3>+12</h3>
                <p>availabe hospitals</p>
            </div>
        </section <?php }} ?>>

<!-- section icone end  -->

<!-- section services start  -->


<section class="home-packages">
        <h1 class="heading-title">our services</h1>

        <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/national-cancer-institute-oCLuFi9GYNA-unsplash.jpg" alt="">
            </div>
            <div class="content">
                <h3>aventure & tour</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/piron-guillaume-U4FyCp3-KzY-unsplash.jpg" alt="">
            </div>
            <div class="content">
                <h3>aventure & tour</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/sharon-mccutcheon-7PZ8Gb-pmaA-unsplash.jpg" alt="">
            </div>
            <div class="content">
                <h3>aventure & tour</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        </div>

        </div>


<!-- section services end  -->

<!-- secction client start  -->

    <section class="review" id="review">

        <h1 class="heading">client's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/client-2.jpg" alt="">
                <h3>konan joel</h3>
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-alt"></i>
                </div>
                <p style="color: var(--light-black); line-height: 1.8; font-size: 1.6rem;padding-top: 4rem;">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Iusto natus, itaque 
                     quae error, maxime nam culpa impedit
                      amet id nemo eius labore ducimus nesciunt
                     eos nulla cumque qui expedita harum!</p>
            </div>

            <div class="box">
                <img src="images/client-2.jpg" alt="">
                <h3>konan joel</h3>
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-alt"></i>
                </div>
                <p style="color: var(--light-black); line-height: 1.8; font-size: 1.6rem;padding-top: 4rem;">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Iusto natus, itaque 
                     quae error, maxime nam culpa impedit
                      amet id nemo eius labore ducimus nesciunt
                     eos nulla cumque qui expedita harum!</p>
            </div>

            <div class="box">
                <img src="images/client-2.jpg" alt="">
                <h3>konan joel</h3>
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-alt"></i>
                </div>
                <p style="color: var(--light-black); line-height: 1.8; font-size: 1.6rem;padding-top: 4rem;">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Iusto natus, itaque 
                     quae error, maxime nam culpa impedit
                      amet id nemo eius labore ducimus nesciunt
                     eos nulla cumque qui expedita harum!</p>
            </div>
        </div>

    </section>

<!-- secction client end -->

<!-- section footer start  -->

<div class="footer">
    <div class="box-container">

    <div class="box">
        <h3>Uink links</h3>
        <a href="index.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="compagnie.php"><i class="fas fa-angle-right"></i>compagnie us</a>
        <a href="services.php"><i class="fas fa-angle-right"></i>services </a>
        <a href="contact.php"><i class="fas fa-angle-right"></i>contact</a>
        
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


<!-- section footer end -->

    <!-- <div class="section-feature">
        <div class="container-large">
            <div class="w-layout-grid grid-feature" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <div class="feature-block">
                <div class="service-icon-block">
                    <img src="https://assets.website-files.com/62444c22812cca0a6e05b335/62444c22812cca4a3a05b37c_Timer.svg" loading="lazy" alt=""></div>
                    <div>
                        <div class="feature-title">24 hour service</div>
                        <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="feature-block">
                    <div class="service-icon-block">
                        <img src="https://assets.website-files.com/62444c22812cca0a6e05b335/62444c22812cca4a3a05b37c_Timer.svg" loading="lazy" alt="">
                    </div>
                    <div>
                        <div class="feature-title">8 years of experience</div>
                        <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>
                <div  class="feature-block">
                    <div class="service-icon-block"><img src="https://assets.website-files.com/62444c22812cca0a6e05b335/62444c22812cca4a3a05b37c_Timer.svg" loading="lazy" alt="">
                </div>
                <div>
                    <div class="feature-title">High quality care</div>
                    <p class="feature-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
            </div>
        </div>
    </div> -->
</div>

		<!-- section feacture end  -->
		<script src="js/script.js">
		</script>
	</body>
</html>
