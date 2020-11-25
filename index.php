<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>Sabor de nos Terra - admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <style>
            .cook-content {
                height: 300px; 
            }

            .contact-content {
                width: 300px;
                height: 155px;
                margin-top: 45px;
            }

            #serviceItem {
                margin-top: 80px;
                margin-bottom: -80px;
            }
        </style>
    </head>

<body>
    <div class="header">
        <div class="container" align="margin-left">
            <a class="nav-brand" href="#"><img src="img/logo2.png" alt="" width="110"></a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="views/menu.php"> Menus</a></li>
                        <li><a href="views/register.php">Registar-se</a></li>
                        <li><a href="views/login.php">Entrar</a></li>
                        <li><a href="views/carrinho.php"><i class="fa fa-shopping-cart" style="font-size:24px"><span><?php echo $cart_count; ?></i></span></a></li>
                        </div>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Olá! O que queres comer hoje!</h2>
                    <h4>Aqui vais encontra varias comidas deliciosas!!</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <?php 
                    include("managers/basedados.php");
                    include("managers/man_menu.php");

                    $bd = new BD();
    				$link = $bd->abreLigacao();
    				$menu = new Menu();
                    $categorias = $menu->getCategorias($link);
    										
                    foreach ($categorias as $categoria) {
                ?>
                <div class="col-md-3" id="serviceItem">
                    <div class="service-item">
                        <a href="views/menu.php?categoria=<?php echo $categoria; ?>">
                        <img src="img/comida.png" alt="">
                        <h4><?php echo $categoria; ?></h4>
                        </a>
                    </div>
                </div>
                <?php 
                    } 
                    $bd->fechaLigacao($link); 
                ?> 
            </div>
        </div>
    </section>

    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        
                        <div class="contact-content">
                            <h4>Contacto</h4>
                            <span>Tefefona-nos:</span>
                            <h6>+ 2303030</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <p>Contato &copy; 23030330 </p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a  href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                 <p>Sabor de nos Terra <em>Cozinha Cabo-verdiana</em></p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>