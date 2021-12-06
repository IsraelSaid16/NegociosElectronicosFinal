 
<!DOCTYPE html>
<html lang="zxx">
    <?php
	session_start();

	
$modulo=$_REQUEST['modulo']??'';




$host="localhost";
$user="root";
$pass="";
$db="db_ecommerceee";

$conexion = mysqli_connect('localhost', 'root', '', 'db_ecommerceee');

  
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;


if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="cerrar"){
    session_destroy();
	header("location: indexxx.php");
	mysqli_close($conexion);
	}
	
    
$modulo=$_REQUEST['modulo']??'';

    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Comixcon | Comics</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet"/>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-heart"></i> <span>3</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                    </li>
                </ul>
                <div class="header__cart__price">items: 
                    <span>$150.00</span>
                </div>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__language">
                    <img src="img/language.png" alt="">
                    <div>English</div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>
                            <a href="#">Spanis</a>
                        </li>
                        <li>
                            <a href="#">English</a>
                        </li>
                    </ul>
                </div>
                <div class="header__top__right__auth">
                    <a href="#"><i class="fa fa-user"></i> Login</a>
                </div>
                <div class="header__top__right__auth">
                    <a href="#"><i class="fa fa-user"></i> Registrarse</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active">
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="./shop-grid.html">Shop</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li>
                                <a href="./shop-details.html">Shop Details</a>
                            </li>
                            <li>
                                <a href="./shoping-cart.html">Shoping Cart</a>
                            </li>
                            <li>
                                <a href="./checkout.html">Check Out</a>
                            </li>
                            <li>
                                <a href="./blog-details.html">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="./contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li>
                        <i class="fa fa-envelope"></i> atencion@comixcon.com
                    </li>
                    <li>Envio gratis en consumo mayor a $300</li>
                </ul>
            </div>
        </div>
        <!-- Humberger End -->
        <!-- Header Section Begin -->
        <header class="bg-light header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li>
                                        <i class="fa fa-envelope"></i>atencion@comixcon.com
                                    </li>
                                    <li>Envio gratis en consumo mayor a $300</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <div class="header__top__right__language">
                                    <img src="img/language.png" alt="">
                                    <div>Español</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>
                                            <a href="#">Español</a>
                                        </li>
                                        <li>
                                            <a href="#">Ingles</a>
                                        </li>
                                    </ul>
                                </div>
                                        <li>
                                    <?php


                                if(isset($_SESSION['idCliente'])==true){

                                        ?>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown-menu" aria-haspopup="true" aria-expanded="false">
    Mi Cuenta </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropright
</button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                            </div>
                                        </div>
                                        <!-- Split dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary">
                                                Split dropright
</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropright</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                            </div>
                                        </div>
                                        <div class="user-area dropdown float-right">
                                            <span class="arrow_carrot-down"></span>
                                            <i class="fa fa-user-o" style="color: #309286;"></i>
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #c3d2c6;">Mi cuenta</a>
                                            <ul class="user-menu dropdown-menu">
                                                <a class="nav-link" href="indexxx.php?modulo=editarPerfil&id=<?php echo $_SESSION['idCliente']; ?>"><i class="fa fa- user"></i>Mi perfil</a>
                                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
                                                <a class="nav-link" href="indexxx.php?modulo=&sesion=cerrar" title="Cerrar sesion">Logout</a> 
                                            </ul>
                                        </div>
                                        <?php
                                          }else{
                                            if(isset($_SESSION['idEmpleado'])==true){

                                                $id=mysqli_real_escape_string($conexion, $_REQUEST['id']??'');
                                                $query="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                                $res=mysqli_query($conexion,$query);
                                                $row=mysqli_fetch_assoc($res);

                                                ?>
                                            <!-- Default dropright button -->
                                            <div class="btn-group dropright">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropright
</button>
                                                <div class="dropdown-menu">
                                                    <!-- Dropdown menu links -->
                                                </div>
                                            </div>
                                            <!-- Split dropright button -->
                                            <div class="btn-group dropright">
                                                <button type="button" class="btn btn-secondary">
                                                    Split dropright
</button>
                                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropright</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Dropdown menu links -->
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Mi Cuenta </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="user-area dropdown float-right">
                                                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i>Mi cuenta</a>
                                                <div class="user-menu dropdown-menu">
                                                    <i class="fa fa- user"></i>
                                                    <?php echo $row['acceso']; ?>
                                                    <a class="nav-link" href="dashboard/elaadmin-master/dashboard.php?modulo=editarEmpleado&id=<?php echo $_SESSION['idEmpleado']; ?>"><i class="fa fa- user"></i>Mi perfil</a>
                                                    <li>
                                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
                                                    </li>
                                                    <a class="nav-link" href="dashboard/elaadmin-master/dashboardd.php?modulo=graficos"><i class="fa fa- user"></i>Dashboard</a>
                                                    <li>
                                                        <a class="nav-link" href="indexxx.php?modulo=&sesion=cerrar" title="Cerrar sesion">Logout</a>
                                                    </li>
                                                </div>
                                            </div>
                                            <?php
                                            }else{
                                                 ?>
                                            <div class="header__top__right__auth">
                                                <a href="Panel.php"><i class="fa fa-user"></i> Iniciar Sesión</a>
                                            </div>
                                        <div class="header__top__right__auth">
                                                <a href="Login.html"><i class="fa fa-user"></i> Registrarse</a>
                                            <?php
                                            }
                                    }
                            ?>
                                            </div>
                                </li>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="https://th.bing.com/th/id/OIP.5cMny62VSlXmb4JFKC7B_AHaHa?pid=ImgDet&rs=1" height="150px" width="150px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active">
                                    <a href="./index.html">Inicio</a>
                                </li>
                                <li>
                                    <a href="./shop-grid.html">Tienda</a>
                                </li>
                                <li>
                                    <a href="#">Páginas</a>
                                    <ul class="header__menu__dropdown">
                                        <li>
                                            <a href="shop-details1.html">Detalles</a>
                                        </li>
                                        <li>
                                            <a href="./shoping-cart.html">Carrito</a>
                                        </li>
                                        <li>
                                            <a href="./checkout.html">Pago</a>
                                        </li>
                                        <li>
                                            <a href="./blog-details.html">Detalles de blog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="./blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="./contact.html">Contactanos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                                </li>
                            </ul>
                            <div class="header__cart__price">item: 
                                <span>$150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->
        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="bg-danger hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Todas las Categorias</span>
                            </div>
                            <ul>
                                <li>
                                    <a href="#" target="_pg_blank">Comics Marvel</a>
                                </li>
                                <li>
                                    <a href="#" target="_pg_blank">Comics DC</a>
                                </li>
                                <li>
                                    <a href="#" target="_pg_blank">Mercancia Marvel</a>
                                </li>
                                <li>
                                    <a href="#" target="_pg_blank">Mercancia DC</a>
                                </li>
                                <li>
                                    <a href="#" target="_pg_blank">Figuras de colección</a>
                                </li>
                                <li>
                                    <a href="#" target="_pg_blank">Posters</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">Todas las Categorias
</div>
                                    <input type="text" placeholder="Que estas buscando?">
                                    <button type="submit" class="bg-danger site-btn">Buscar</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+52 449-508-4504</h5>
                                    <span>Soporte 24/7&nbsp;&nbsp;</span>
                                </div>
                            </div>
                        </div>
                        <div data-setbg="img/Logo.jpg" class="hero__item">
                            <div class="hero__text">
                                <span>Nuevos Productos</span>
                                <h2>Comics Marvel &amp;&nbsp;<br>DCs para Envio&nbsp;</h2>
                                <p>Envio totalmente gratis</p>
                                <a href="#" class="bg-danger primary-btn">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Categories Section Begin -->
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://1000marcas.net/wp-content/uploads/2021/07/Marvel-Comics-Logo-1990.png">
                                <h5><a href="#">Comics Marvel</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/DC_Comics_logo.png/600px-DC_Comics_logo.png">
                                <h5><a href="#">Comics DC</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://images-na.ssl-images-amazon.com/images/I/51K2UmZjc1L._AC_UX385_.jpg">
                                <h5><a href="#">Mercancia Marvel</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://www.merchandisingplaza.es/280627/2/Camisetas-Superheroes-DC-Comics-Camiseta-Superheroes-DC-Comics-de-hombre---Design--Superman-Logo-Spray-l.jpg">
                                <h5><a href="#">Mercancia DC</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://www.pngkit.com/png/detail/792-7921467_download-spiderman-png-full-png-images-hot-toys.png">
                                <h5><a href="#">Figuras de Colección</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="https://www.seekpng.com/png/detail/240-2401202_the-mighty-thor-poster-marvel-comics-retro-the.png">
                                <h5><a href="#">Posters</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->
        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Productos Destacados</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">Todo</li>
                                <li data-filter=".oranges">Comics Marvel</li>
                                <li data-filter=".fresh-meat">Comics DC</li>
                                <li data-filter=".vegetables">Figuras de colección</li>
                                <li data-filter=".fastfood">Posters</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://bauldelcomic.com/por/matmit022.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#" target="_pg_blank">Thor</a></h6>
                                <h5>$90.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://i.pinimg.com/474x/9f/73/de/9f73de177f3abebda81640582cc59640.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Spiderman</a></h6>
                                <h5>$130.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/OIP.GQ3PsJgI7pR5Pw61PmhsBgHaLQ?pid=ImgDet&rs=1">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Batman</a></h6>
                                <h5>$94.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 fastfood mix oranges">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/OIP.6ynEkD3-4KaSYYBu-x70FgHaLP?pid=ImgDet&rs=1">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">AntMan</a></h6>
                                <h5>$70.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/R.69821b78f34225a68ff863def4da7933?rik=jGZUCAlwlE%2fFPA&pid=ImgRaw&r=0">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">IronMan 2020</a></h6>
                                <h5>$180.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/OIP.i8JKDtRAqlxgpswxePB0OgHaLY?pid=ImgDet&rs=1">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Superman "Doomsday"</a></h6>
                                <h5>$200.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/OIP.rqC94BaU1AshWHAD0U2xkwHaLH?pid=ImgDet&rs=1">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">HotToy "Daredevil"</a></h6>
                                <h5>$4030.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="https://th.bing.com/th/id/R.ac1eff7ac40f0f2c2a6f07df159f2cea?rik=BuJG%2birq1OmEvw&riu=http%3a%2f%2fnews.toyark.com%2fwp-content%2fuploads%2fsites%2f4%2f2018%2f01%2fHot-Toys-Justice-League-Superman-005.jpg&ehk=JMdvbeFHu5s6FVNzjwcB39uwjnZiRapm3sKLHgXRxFE%3d&risl=&pid=ImgRaw&r=0">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-retweet"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">HotToy "Superman"</a></h6>
                                <h5>$7540.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Section End -->
        <!-- Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="img/banner/banner-22.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="" target="_pg_blank" class="bg-white border-light text-white">./index.html<img src="img/banner/banner-11.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
</div> <div class="latest-product__item__text">
                                            <h6>Comics SUperman&nbsp; 2020&nbsp;</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-1.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Top Rated Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-1.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-1.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Review Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-1.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-1.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
</div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <img src="img/latest-product/lp-2.jpg" alt="">
                                            <span>$30.00</span>
                                        </div> </a>
                                    <a href="#" class="latest-product__item"> <div class="latest-product__item__pic">
                                            <img src="img/latest-product/lp-3.jpg" alt="">
                                        </div> <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->
        <!-- Blog Section Begin -->
        <section class="bg-white border border-success pb-5 pe-4 ps-4 pt-5 text-center text-white" data-toggle="popover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2 class="bg-info text-black-50">From The Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="border border-primary col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/Blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar-o"></i> May 4,2019
                                    </li>
                                    <li>
                                        <i class="fa fa-comment-o"></i> 5
                                    </li>
                                </ul>
                                <h5><a href="#" target="_pg_blank">Comics From 2020</a></h5>
                                <p class="text-body">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-success col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/Blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar-o"></i> May 4,2019
                                    </li>
                                    <li>
                                        <i class="fa fa-comment-o"></i> 5
                                    </li>
                                </ul>
                                <h5><a href="#" target="_pg_blank">6 ways of prepare New 30&nbsp; Comics&nbsp;&nbsp;</a></h5>
                                <p class="text-black-50">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-secondary col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/Blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar-o"></i> May 4,2019
                                    </li>
                                    <li>
                                        <i class="fa fa-comment-o"></i> 5
                                    </li>
                                </ul>
                                <h5><a href="#" target="_pg_blank">Visit the game Comics fromUS</a></h5>
                                <p class="text-black-50">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-primary pb-5 ps-4 pe-4 pt-5 text-center text-white">
            <div class="col-xl-10 mx-auto pb-4 pt-4 text-white">
                <h2 class="h5">Conteo de Estadisticas :</h2>
                <h3 class="fw-bold h2 mb-4">Rating y Calificacion en El pais (Mexico)</h3>
                <div class="justify-content-center row"> 
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="bg-danger pb-5 pe-3 ps-3 pt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3em" height="3em" class="mb-4">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm6 10.5l-2.939 1.545.561-3.272-2.377-2.318 3.286-.478L18 14l1.47 2.977 3.285.478-2.377 2.318.56 3.272L18 21.5z"/>
                                </g>
                            </svg>
                            <h4 class="fw-bold h2 mb-1">636</h4>
                            <p class="mb-0">Calificacion Leal</p>
                        </div>                         
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="bg-secondary pb-5 pe-3 ps-3 pt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3em" height="3em" class="mb-4">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M2 13h6v8H2v-8zm14-5h6v13h-6V8zM9 3h6v18H9V3zM4 15v4h2v-4H4zm7-10v14h2V5h-2zm7 5v9h2v-9h-2z"/>
                                </g>
                            </svg>
                            <h4 class="fw-bold h2 mb-1">1349</h4>
                            <p class="mb-0">Projectos Completados</p>
                        </div>                         
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="bg-info pb-5 pe-3 ps-3 pt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3em" height="3em" class="mb-4">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-5-8h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z"/>
                                </g>
                            </svg>
                            <h4 class="fw-bold h2 mb-1">2496</h4>
                            <p class="mb-0">Clientes Satisfechos</p>
                        </div>                         
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="bg-success pb-5 pe-3 ps-3 pt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3em" height="3em" class="mb-4">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05 5 4.604zM3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976zM12 13.5l-2.939 1.545.561-3.272-2.377-2.318 3.286-.478L12 6l1.47 2.977 3.285.478-2.377 2.318.56 3.272L12 13.5z"/>
                                </g>
                            </svg>
                            <h4 class="fw-bold h2 mb-1">4694</h4>
                            <p class="mb-0">Ganancias Anuales en productos&nbsp;</p>
                        </div>                         
                    </div>                     
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="./index.html"></a>
                            </div>
                            <ul>
                                <li>Dirección: Av LopezMateos &quot;552 11378 Aguascalientes, Ags&nbsp;</li>
                                <li>Telefono: +52 449-508-4504</li>
                                <li>Email:&nbsp;
                                    <i></i>atencion@comixcon.com&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Enlaces Útiles</h6>
                            <ul>
                                <li>
                                    <a href="#">Inicio</a>
                                </li>
                                <li>
                                    <a href="#">Tienda</a>
                                </li>
                                <li>
                                    <a href="#">Detalles</a>
                                </li>
                                <li>
                                    <a href="#">Carrito</a>
                                </li>
                                <li>
                                    <a href="#">Pago</a>
                                </li>
                                <li>
                                    <a href="#">Detalles de Blog</a>
                                </li>
                                <li>
                                    <a href="#">Contactanos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Unete a nuestra comunidad</h6>
                            <p>Obten en tu&nbsp; E-mail Actualizaciones Acerca de nuestras Tienda y Ofertas Especiales</p>
                            <form action="#">
                                <input type="text" placeholder="Ingresa tu Email">
                                <button type="submit" class="bg-danger site-btn">Suscribete</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="https://www.facebook.com/Comixcon-102829132194053"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/comixcon_stores/"><i class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/Comixcon_Store"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Página desarrollada con <i class="fa fa-heart" aria-hidden="true"></i> por estudiantes del TECNM</p>
                            </div>
                            <div class="footer__copyright__payment">
                                <img src="img/payment-item.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/ecommerce.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
    </body>
</html>