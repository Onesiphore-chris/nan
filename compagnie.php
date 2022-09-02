<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/lib/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Compagnie</title>
</head>

<body>
    <div id="app">
        <!-- Start Header -->
        <section class="header">
            <a href="index.php" class="logo"><span>H</span>opital</a>
            <nav>
                <div class="navbar">
                    <a href="index.php">acceuil</a>
                    <a href="about.php">compagnie</a>
                    <a href="package.php">services</a>
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
        <!-- End haeder -->
        <section id="slider">
            <!-- Slider main container -->
            <div class="swiper-container slider_1">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide slide__img1">
                        <div class="slider__details">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus animi cupiditate.</p>
                        </div>
                    </div>
                    <div class="swiper-slide slide__img2">
                        <div class="slider__details">
                            <div class="slider__details">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus animi cupiditate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide__img3">
                        <div class="slider__details">
                            <div class="slider__details">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus animi cupiditate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section id="our_story">
            <div class="container">
                <div class="heading">
                    <h3>Lorem, ipsum.</h3>
                    <p>Delicious Wine, Friendly Staff, Cozy Atmosphere & Positive Emo</p>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="our_story--details">
                            <p>A rosé wine incorporates some of the color from the grape skins, but not enough to qualify it as a red wine. It may be the oldest known type of wine, as it is the most straightforward to make with the skin contact method.</p>
                            <p>Wine can also be made from other species of grape or from hybrids, created by the genetic crossing of two species. V. labrusca V. aestivalis, V. rupestris, V. rotundifolia and V. riparia are native North American grapes</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="our_story--image">
                            <img src="assets/images/rian-ramirez-rm7rZYdl3rY-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="our_story--image">
                            <img src="assets/images/daniel-schludi-mAGZNECMcUg-unsplash.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="special__product">
            <div class="container">
                <div class="heading">
                    <h3>Nos docteurs</h3>
                    <p>Nos specialiste santé</p>
                </div>

                <div class="special__product--contents">

                    <div class="owl-carousel owl-theme">
                        <!-- Slider start -->
                        <div class="item prod_item">
                            <a href="#" style="z-index: 99999;">
                                <div class="prod_images--card">
                                    <div class="prod_image img1">
                                        <div class="content_1">
                                            <img src="assets/images/doctor3.jpg" alt="slider">
                                        </div>
                                    </div>
                                    <div class="prod_image img2">
                                        <div class="content_2">
                                            <img src="assets/images/doctor2.jpg" alt="slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="prod_details">
                                    <ul>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star-o"></li>
                                        <li class="star fa fa-star-o"></li>
                                    </ul>
                                    <a href="#">
                                        <h4>Doctor chris</h4>
                                    </a>
                                    <div class="prod_price">
                                        <span class="old_price">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Slider end -->
                        <!-- Slider start -->
                        <div class="item prod_item">
                            <a href="#" style="z-index: 99999;">
                                <div class="prod_images--card">
                                    <div class="prod_image img1">
                                        <div class="content_1">
                                            <img src="assets/images/doctor4.jpg" alt="slider">
                                        </div>
                                    </div>
                                    <div class="prod_image img2">
                                        <div class="content_2">
                                            <img src="assets/images/doctor5.jpg" alt="slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="prod_details">
                                    <ul>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star-o"></li>
                                        <li class="star fa fa-star-o"></li>
                                    </ul>
                                    <a href="#">
                                        <h4>Doctor chris</h4>
                                    </a>
                                    <div class="prod_price">
                                        <span class="old_price">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Slider end -->
                        <!-- Slider start -->
                        <div class="item prod_item">
                            <a href="#" style="z-index: 99999;">
                                <div class="prod_images--card">
                                    <div class="prod_image img1">
                                        <div class="content_1">
                                            <img src="assets/images/doctor6.jpg" alt="slider">
                                        </div>
                                    </div>
                                    <div class="prod_image img2">
                                        <div class="content_2">
                                            <img src="assets/images/doctor7.jpg" alt="slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="prod_details">
                                    <ul>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star-o"></li>
                                        <li class="star fa fa-star-o"></li>
                                    </ul>
                                    <a href="#">
                                        <h4>Doctor chris</h4>
                                    </a>
                                    <div class="prod_price">
                                        <span class="old_price">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Slider end -->
                    </div>

                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="footer__items">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6>Contact</h6>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Boulevard du Canal - Zone 3 Treichville Abidjan - Côte d’Ivoire</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile¨                                <i class="fa fa-tty"></i>
                                        <span>07 69 36 28 51 </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <span>chrisleconquerant01@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>Produits</h6>
                            <div class="produits">
                                <ul>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                    <li>
                                        <a href="#">Nouveaux produits</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>Notre société</h6>
                            <div class="societe">
                                <ul>
                                    <li>
                                        <a href="#">informatioins</a>
                                    </li>
                                    <li>
                                        <a href="#">Nouveaux produits</a>
                                    </li>
                                    <li>
                                        <a href="#">hopital</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>Newsletter</h6>
                            <div class="newsletter">
                                <ul>
                                    <li>
                                        <span>Sign Up To Receive Our Latest News & Events</span>
                                    </li>
                                    <li>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="newsletter" placeholder="newsletter">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="form-control" id="button" value="S'abonner">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© chris le conquerant</p>
                </div>
            </div>
        </footer>
        </div>



        <script src="assets/lib/jquery-3.6.0.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/swiper/swiper-bundle.min.js"></script>
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>
</body>






<script src="js/script.js">
		</script>

</html>