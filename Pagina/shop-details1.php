 
<!DOCTYPE html>
<?php 

include('config.php');
$productName = "Producto Demostración";
$currency = "USD";
$productPrice = 200;
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
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header__top__left">
                                <ul>
                                    <li>
                                        <i class="fa fa-envelope"></i>atencion@comixcon.com
                                    </li>
                                    <li>Envio gratis en consumo mayor a $300</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
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
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
        <section class="hero hero-normal">
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
                                    <a href="#">Comics Marvel</a>
                                </li>
                                <li>
                                    <a href="#">Comics DCs</a>
                                </li>
                                <li>
                                    <a href="#">Mercancia Marvel</a>
                                </li>
                                <li>
                                    <a href="#">Fiuras de Coleccion</a>
                                </li>
                                <li>
                                    <a href="#">Posters</a>
                                </li>
                                <li>
                                    <a href="#">Nuevos</a>
                                </li>
                                <li>
                                    <a href="#">Descuento¡</a>
                                </li>
                                <li>
                                    <a href="#">A llegar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        Todas las Categorias
</div>
                                    <input type="text" placeholder="Que estas buscando?">
                                    <button type="submit" class="bg-danger site-btn">BUSCAR</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+52449-508-4504</h5>
                                    <span>Soporte 24/7 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Marvel&rsquo;s Package</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Inicio</a>
                                <a href="./index.html" target="_pg_blank">SHOP</a>
                                <span>Marvel&rsquo;s Package</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
        <!-- Product Details Section Begin -->
        <section class="border border-success product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="img/product/details/PD-1.jpg" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3>Marvels&rsquo;s ITEM Package</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <div class="product__details__price">$350.00</div>
                            <p>Marvel Classics &apos;Item Classics fue una serie de cómics estadounidenses publicada por Marvel Comics a mediados y finales de la década de 1960 que marcó la primera reimpresión de muchas de las primeras historias de Marvel..</p>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="bg-success primary-btn">ADD TO CARD</a>
                            <a href="#" class="heart-icon"><span class="bg-light icon_heart_alt"></span></a>
                            <ul>
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
                                <li>
                                    <b>Availability</b> 
                                    <span class="bg-warning">In Stock</span>
                                </li>
                                <li>
                                    <b>Shipping</b> 
                                    <span>01 day shipping. <samp>Free pickup today</samp></span>
                                </li>
                                <li>
                                    <b>Weight</b> 
                                    <span>0.5 kg</span>
                                </li>
                                <li>
                                    <b>Share on</b>
                                    <div class="share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-info col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-light nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-light nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="col-md-12">
                                        <div id="product-tab">
                                            <!-- product tab nav -->
                                            <ul class="tab-nav">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab1" target="_pg_blank"><a data-toggle="tab" href="file:///C:/xampp/htdocs/ogani-master%20-%20copia%20-comics/ogani-master/shop-details.html?pgedit=1&amp;pgpvid=8#tabs-1" role="textbox" aria-selected="false" spellcheck="false" data-medium-editor-element="true" aria-multiline="true" data-medium-editor-editor-index="5" medium-editor-index="004be010-f3d4-beca-0a6e-1ea4b7894410" data-placeholder="Type your text" data-medium-focused="true">Descrip</a>tion</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab2" class="lead text-muted text-nowrap text-reset text-truncate">Details</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab3" class="bg-white display-5 text-secondary text-uppercase">Reviews (3)</a>
                                                </li>
                                            </ul>
                                            <!-- /product tab nav -->
                                            <!-- product tab content -->
                                            <div class="tab-content">
                                                <!-- tab1  -->
                                                <div id="tab1" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="bg-light text-secondary">Descripción del producto
Críticas
"This fully updated edition, the first in more than five years, profiles over 1,200 Marvel characters and includes entries on the many teams, superheroes, and storylines." - Wired.com's blog, Geekdad
"[A] must for comic book nerds" - The Denver Post
"[An] awesome addition to your Marvel library" - Agents of Geek
"[This book contains] every entry imaginable with just enough detail to enlighten but not overwhelm." - Wired.com's Geek Dad blog
"[T]his coffee table volume is incredibly beautiful and presented in ways that online searching can't quite match." - PopMatters.com
Biografía del autor
Matt Forbeck has been writing and designing games, novels, comics, and more for more than 20 years. His recent work includes Blood Bowl: Killer Contract, Mutant Chronicles, More Forbidden Knowledge, The Complete Idiot's Guide to Drawing Superheroes & Villains, the Harvey Birdman: Attorney at Law video game, and Marvel Heroes Battle Dice.Daniel Wallace is the New York Times bestselling author of Star Wars: The New Essential Guide to Characters, as well as more than a dozen other science-fiction guidebooks. He updated DK's Star Wars: The Ultimate Visual Guide and was an author on both The DC Comics Encyclopedia and The Marvel Encyclopedia. He is also a regular contributor to Star Wars Insider magazine. Daniel is an avid comic book reader and genre fan.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /tab1  -->
                                                <!-- tab2  -->
                                                <div id="tab2" class="tab-pane fade in">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /tab2  -->
                                                <!-- tab3  -->
                                                <div id="tab3" class="tab-pane fade in">
                                                    <div class="row">
                                                        <!-- Rating -->
                                                        <div class="col-md-3">
                                                            <div id="rating">
                                                                <div class="rating-avg">
                                                                    <span>4.5</span>
                                                                    <div class="rating-stars text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li>
                                                                        <div class="rating-stars text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-progress">
                                                                            <div style="width: 80%;"></div>
                                                                        </div>
                                                                        <span class="sum">3</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="rating-stars text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o text-warning"></i>
                                                                        </div>
                                                                        <div class="rating-progress">
                                                                            <div style="width: 60%;"></div>
                                                                        </div>
                                                                        <span class="sum">2</span>
                                                                    </li>
                                                                    <li class="text-warning">
                                                                        <div class="rating-stars">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                        <div class="rating-progress">
                                                                            <div></div>
                                                                        </div>
                                                                        <span class="sum text-body">0</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="rating-stars text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                        <div class="rating-progress">
                                                                            <div></div>
                                                                        </div>
                                                                        <span class="sum">0</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="rating-stars text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                        <div class="rating-progress">
                                                                            <div></div>
                                                                        </div>
                                                                        <br>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- /Rating -->
                                                        <!-- Reviews -->
                                                        <div class="col-md-6 text-primary">
                                                            <div id="reviews">
                                                                <ul class="reviews">
                                                                    <li>
                                                                        <div class="review-heading">
                                                                            <h5 class="name text-primary">John</h5>
                                                                            <p class="date">27 DEC 2018, 8:0 PM</p>
                                                                            <div class="review-rating text-warning">
                                                                                <i class="fa fa-star text-warning"></i>
                                                                                <i class="fa fa-star text-warning"></i>
                                                                                <i class="fa fa-star text-warning"></i>
                                                                                <i class="fa fa-star text-warning"></i>
                                                                                <i class="fa fa-star-o empty"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="review-body">
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="review-heading">
                                                                            <h5 class="name text-primary">Juan</h5>
                                                                            <p class="date">27 DEC 2018, 8:0 PM</p>
                                                                            <div class="review-rating text-warning">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-o empty"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="review-body">
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="review-heading">
                                                                            <h5 class="name text-primary">Luis</h5>
                                                                            <p class="date">27 DEC 2018, 8:0 PM</p>
                                                                            <div class="review-rating text-warning">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-o empty"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="review-body">
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="reviews-pagination">
                                                                    <li class="active">1</li>
                                                                    <li>
                                                                        <a href="#">2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- /Reviews -->
                                                        <!-- Review Form -->
                                                        <div class="col-md-3">
                                                            <div id="review-form">
                                                                <form class="review-form">
                                                                    <input class="input" type="text" placeholder="Your Name">
                                                                    <input class="input" type="email" placeholder="Your Email">
                                                                    <textarea class="input" placeholder="Your Review"></textarea>
                                                                    <div class="input-rating">
                                                                        <span>Your Rating: </span>
                                                                        <div class="stars text-warning">
                                                                            <input id="star5" name="rating" value="5" type="radio">
                                                                            <label for="star5"></label>
                                                                            <input id="star4" name="rating" value="4" type="radio">
                                                                            <label for="star4"></label>
                                                                            <input id="star3" name="rating" value="3" type="radio">
                                                                            <label for="star3"></label>
                                                                            <input id="star2" name="rating" value="2" type="radio">
                                                                            <label for="star2"></label>
                                                                            <input id="star1" name="rating" value="1" type="radio">
                                                                            <label for="star1"></label>
                                                                        </div>
                                                                    </div>
                                                                    <button class="bg-danger primary-btn">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /Review Form -->
                                                    </div>
                                                </div>
                                                <!-- /tab3  -->
                                            </div>
                                            <!-- /product tab content  -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Informacion  Marvels’s ITEM Package</h6>
                                        <p class="text-body">Descripción del producto
Críticas: 
&quot;This fully updated edition, the first in more than five years, profiles over 1,200 Marvel characters and includes entries on the many teams, superheroes, and storylines.&quot; - Wired.com&apos;s blog, Geekdad
--&quot;[A] must for comic book nerds&quot; - The Denver Post
--&quot;[An] awesome addition to your Marvel library&quot;<br>&nbsp;- Agents of Geek
--&quot;[This book contains] every entry imaginable with just enough detail to enlighten but not overwhelm.&quot; <br>- Wired.com&apos;s Geek Dad blog<br>--&quot;[T]his coffee table volume is incredibly beautiful and presented in ways that online searching can&apos;t quite match.&quot; <br>- PopMatters.com
Biografía del autor
Matt Forbeck has been writing and designing games, novels, comics, and more for more than 20 years. <br>&nbsp;--His recent work includes Blood Bowl: Killer Contract, Mutant Chronicles, More Forbidden Knowledge, The Complete Idiot&apos;s Guide to Drawing Superheroes &amp; Villains, the Harvey Birdman: Attorney at Law video game, and Marvel Heroes Battle Dice.Daniel Wallace is the New York Times bestselling author of Star Wars: The New Essential Guide to Characters, as well as more than a dozen other science-fiction guidebooks. He updated DK&apos;s Star Wars: <br>The Ultimate Visual Guide and was an author on both The DC Comics Encyclopedia and The Marvel Encyclopedia. He is also a regular contributor to Star Wars Insider magazine. Daniel is an avid comic book reader and genre fan.<br><br>&nbsp;Detalles del producto
Editorial ‏ : <br>‎ DK Publishing (Dorling Kindersley); Edición Updated, Expanded ed. (17 marzo 2014)<br>&nbsp;Idioma ‏ : ‎ Inglés<br>&nbsp;Pasta dura ‏ : ‎ 439 páginas<br>&nbsp;ISBN-10 ‏ : ‎ 1465415939
ISBN-13 ‏ : ‎ 978-1465415936<br>&nbsp;Dimensiones ‏ : ‎ 26.04 x 3.63 x 30.81 cm<br>&nbsp;Clasificación en los más vendidos de Amazon: nº15,702 en Libros (Ver el Top 100 en Libros)
nº137 en Superhero Comics y Novelas Gráficas (Libros)<br></p>
                                        <p>a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p><!-- product tab nav --> <ul>
                                                <li>
                                                    <br>
                                                </li>
                                            </ul> <!-- /tab2  --> <!-- tab3  --> <!-- Rating --> 
                                4.5  <i></i> <i></i> <i></i> <i></i> <i></i> <ul>
                                                <li>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    3
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    2
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    0
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    0
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    0
                                                </li>
                                            </ul> <!-- /Rating --> <!-- Reviews --> <ul>
                                                <li>
                                                    <h5>John</h5>
                                                    <p>27 DEC 2018, 8:0 PM</p>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </li>
                                                <li>
                                                    <h5>John</h5>
                                                    <p>27 DEC 2018, 8:0 PM</p>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </li>
                                                <li>
                                                    <h5>John</h5>
                                                    <p>27 DEC 2018, 8:0 PM</p>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </li>
                                            </ul> <ul>
                                                <li>1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">4</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i></i></a>
                                                </li>
                                            </ul> <!-- /Reviews --> <!-- Review Form --> <form>
                                                <input type="text" placeholder="Your Name">
                                                <input type="email" placeholder="Your Email">
                                                <textarea placeholder="Your Review"></textarea>
                                                Your Rating: 
                                                <input id="star5" name="rating" value="5" type="radio">
                                                <label for="star5"></label>
                                                <input id="star4" name="rating" value="4" type="radio">
                                                <label for="star4"></label>
                                                <input id="star3" name="rating" value="3" type="radio">
                                                <label for="star3"></label>
                                                <input id="star2" name="rating" value="2" type="radio">
                                                <label for="star2"></label>
                                                <input id="star1" name="rating" value="1" type="radio">
                                                <label for="star1"></label>
                                                <button>Submit</button>
                                            </form> <!-- /Review Form --> <!-- /tab3  --> <!-- /product tab content  --></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->
        <!-- Related Product Section Begin -->
        <section class="border border-warning related-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related__product__title">
                            <h2>Related Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                                <ul class="product__item__pic__hover">
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
                            <div class="product__item__text">
                                <h6><a href="#">SpidermanSecurity</a></h6>
                                <h5 class="rating-stars text-danger">$30.00<br><br></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                <ul class="product__item__pic__hover">
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
                            <div class="product__item__text">
                                <h6><a href="#" target="_pg_blank">Batman Relase</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                <ul class="product__item__pic__hover">
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
                            <div class="product__item__text">
                                <h6><a href="#" target="_pg_blank">SupermanSecurity</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div data-setbg="img/product/product-7.jpg" class="product__item__pic set-bg">
                                <ul class="product__item__pic__hover">
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
                            <div class="product__item__text">
                                <h6><a href="#" target="_pg_blank">Marvel Fantastic</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related Product Section End -->
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