<!DOCTYPE html>
<?php 

include('config.php');
$productName = "Producto Demostración";
$currency = "USD";
$productPrice = 250;
$productId = 123456;
$orderNumber = 546;
?> 
<?php ?>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ogani | Template</title>
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
                                <div class="header__top__right__auth">
                                    <a href="Login.html"><i class="fa fa-user"></i> Iniciar Sesión</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="Login.html"><i class="fa fa-user"></i> Registrarse</a>
                                </div>
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
                                <li>
                                    <a href="./index.html">Inicio</a>
                                </li>
                                <li>
                                    <a href="./shop-grid.html">Tienda</a>
                                </li>
                                <li class="active">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/portadilla.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Pago</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>Pago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
        <!-- Checkout Section Begin -->
        <section class="border-dark checkout spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6><span class="icon_tag_alt"></span> Tienes algun cupón? <a href="#">Click aquí</a> para ingresar cupon </h6>
                    </div>
                </div>
                <div class="checkout__form">
                    <h4>Detalles de Facturación</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkout__input">
                                            <p>Nombres<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Apellidos P<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Apellido M<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Ciudad<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Dirección<span>*</span></p>
                                    <input type="text" placeholder="Calle" class="checkout__input__add">
                                    <input type="text" placeholder="Apartmento, suite, etc (opcional)">
                                </div>
                                <div class="checkout__input">
                                    <p>Ciudad<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Municipio<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Codigo Postal<span>*</span></p>
                                    <input type="number">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Numero de Telefono<span>*</span></p>
                                            <input type="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc">
                                        Crear cuenta?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Cree una cuenta ingresando la información a continuación. 
                                    Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
                                <div class="checkout__input">
                                    <p>Contraseña<span>*</span></p>
                                    <input type="password">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border border-danger checkout__order">
                                    <h4>Tu pedido</h4>
                                    <div class="checkout__order__products">Productos 
                                        <span>Total</span>
                                    </div>
                                    <ul>
                                        <li>Marvel`s Package 
                                            <span>$355.99</span>
                                        </li>
                                        <li>Batman Comic
                                            <span>$151.99<br><span><span style="font-weight: 400;"><span style="float: none;">$53.99</span><br></span></span></span>
                                        </li>
                                        <li>Superman2020</li>
                                    </ul>
                                    <div class="checkout__order__subtotal">Subtotal 
                                        <span>$750.99</span>
                                    </div>
                                    <div class="checkout__order__total">Total 
                                        <span>$750.99</span>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <!--<label for="acc-or">
                                            Create an account?
                                            <input type="checkbox" id="acc-or">
                                            <span class="checkmark"></span>
                                        </label>-->
                                    </div>
                                    <p>Seleccione su forma de pago .</p>
                                    <div class="checkout__input__checkbox">
</div>
                                    <div class="checkout__input__checkbox">
                                        <div class="container">
                                            <table class="table"> 
                                                <tr> 
                                                    <td style="width:150px">$<?php echo $productPrice; ?></td> 
                                                    <td style="width:150px"> <?php include 'paypalCheckout.php'; ?> </td> 
                                                </tr>                                                 
                                            </table>                                             
                                            <div style="margin:50px 0px 0px 0px;"> 
</div>                                             
                                        </div>
                                        <label for="paypal">
                                            Paypal
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="Creditcard">
                                            Creditcard
                                            <input type="checkbox" id="Creditcard">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="bg-danger site-btn">Realizar Pedido</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->
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
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>