<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Organic store</title>
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- main css -->
    <!--wow-->
    <link rel="stylesheet" type="text/css" href="assets/wow-slider/engine1/style.css" />
    <script src="assets/wow-slider/engine1/jquery.js"></script>
    <!--wow-->
</head>

<body>
    <!--subscribe-->
    {{-- <div id="myModalsubscribe" class="modal fade subscribe">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close2" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="col-md-6 p-0 position-relative">
                            <div class="newslettermodal-img"><img src="assets/images/page-img/popup-img.jpg" alt=""
                                    title="" class="img-fluid"></div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="newslettermodal-content">
                                <div class="text-center"><img src="assets/images/popup-logo.png" alt="" title=""></div>
                                <h4 class="modal-title">Sign up our newsletter</h4>
                                <p>Enter Your email address to sign up to receive our latest news and offers</p>
                                <form action="#" method="post" id="homeForm" onSubmit="return ajaxmailhome();"
                                    class="newslettermodal-content-form">
                                    <div class="form-group">
                                        <input type="email" name="homemail" id="homemail" class="form-control"
                                            placeholder="Enter Your e-mail address">
                                    </div>
                                    <button type="button" class="btn subscribe2"
                                        onClick="return ajaxmailhome();">Subscribe</button>
                                </form>
                                <ul>
                                    <li><a href="#" class="icoRss" title=""><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" class="icoFacebook" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" class="icoLinkedin" title=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--subscribe-->
    <!-- Navigation -->
    <div class="top-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 top-div top1">
                    <ul>
                        <li><a href="mailto:info.organicstore@gmail.com"><i class="fa fa-envelope"></i>
                                &nbsp;fatabash324@gmail.com</a></li>
                        <li>|</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +12 345 6789</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-6 col-md-12 position-relative">
                    <div class="right-div">
                        <ul>
                            <li>
                                <ul class="social-network">
                                    <li><a href="#" class="icoRss" title=""><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" class="icoFacebook" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" class="icoLinkedin" title=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="top-ul">
                                    <li>
                                        <div class="dropdown"> <a class="dropdown-toggle" href="#"
                                                data-toggle="dropdown"><img src="assets/images/flag.jpg" alt=""
                                                    title=""> English <i class="fa fa-angle-down"></i></a>
                                            <div class="dropdown-menu flag-css dropdown-menu-right"> <a
                                                    href="#">English</a> <a href="#"><span
                                                        class="flag-icon flag-icon-fr"> </span>French</a> <a
                                                    href="#"><span class="flag-icon flag-icon-it"> </span>Italian</a> <a
                                                    href="#"><span class="flag-icon flag-icon-ru"> </span>Russian</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown"> <a class="dropdown-toggle currency" href="#"
                                                data-toggle="dropdown"> <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu drop1 dropdown-menu-right">
                                                <li class="dropdown-item"><a href="#"> US Dollar</a></li>
                                                <li class="dropdown-item"><a href="#"> British Pound</a></li>
                                                <li class="dropdown-item"><a href="#"> BD Taka</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="rate-price rate-price2">
                                    <ul>
                                        <li class="dropdown"> <a class="dropdown-toggle" href="#"
                                                data-toggle="dropdown"> <i class="fa fa-user-circle-o"
                                                    aria-hidden="true"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn">
                                                <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                                <a class="dropdown-item" href="{{ url('my-account') }}">My Account</a>
                                                <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                                                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                            </div>
                                        </li>
                                        <li><a href="wishlist.html"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i><span class="circle-2">1</span></a></li>
                                        <li class="dropdown"> <a class="dropdown-toggle link" href="#"
                                                data-toggle="dropdown"><i class="fa fa-shopping-bag"
                                                    aria-hidden="true"></i><span class="circle-2">1</span></a>
                                            <div
                                                class="dropdown-menu dropdown-menu2 dropdown-menu-right  animate slideIn">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-3"><img src="assets/images/fruits/img-1.jpg"
                                                                alt="" title="" class="img-fluid"></div>
                                                        <div class="col-9">
                                                            <p>1 x Product Name... <span class="price">$ 14.70</span>
                                                            </p>
                                                            <a href="#" class="close">x</a>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-3"><img src="assets/images/fruits/img-2.jpg"
                                                                alt="" title="" class="img-fluid"></div>
                                                        <div class="col-9">
                                                            <p>1 x Product Name... <span class="price">$ 14.70</span>
                                                            </p>
                                                            <a href="#" class="close">x</a>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-3"><img src="assets/images/fruits/img-3.jpg"
                                                                alt="" title="" class="img-fluid"></div>
                                                        <div class="col-9">
                                                            <p>1 x Product Name... <span class="price">$ 14.70</span>
                                                            </p>
                                                            <a href="#" class="close">x</a>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-3"><img src="assets/images/fruits/img-4.jpg"
                                                                alt="" title="" class="img-fluid"></div>
                                                        <div class="col-9">
                                                            <p>1 x Product Name... <span class="price">$ 14.70</span>
                                                            </p>
                                                            <a href="#" class="close">x</a>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="font-15">Tax </p>
                                                        </div>
                                                        <div class="col-9 text-right"> <span class="font-15">$
                                                                2.80</span> </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="font-15"><strong>Total</strong></p>
                                                        </div>
                                                        <div class="col-9 text-right"> <span class="font-15"><strong>$
                                                                    10.80</strong></span> </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <input type="button" value="Check out"
                                                                class="btn check-out w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"> <img src="assets/images/logo.png" alt=""
                    title="" class="img-fluid"> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span
                    class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{{ url('/shop') }}"> SHOP </a>
                    </li>
                    <li class="nav-item dropdown megamenu-li"> <a class="nav-link dropdown-toggle" href="#"
                            id="Dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Category
                        </a>
                        <div class="dropdown-menu megamenu animate slideIn" aria-labelledby="navbarDropdownBlog">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <h5>Dried Fruits</h5>
                                    <a class="dropdown-item" href="shop.html">Almond</a> <a class="dropdown-item"
                                        href="shop.html">Apricot</a> <a class="dropdown-item"
                                        href="shop.html">Arrowroot</a> <a class="dropdown-item"
                                        href="shop.html">Cantaloupe </a> <a class="dropdown-item"
                                        href="shop.html">Cashew</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <h5>Fruits</h5>
                                    <a class="dropdown-item" href="shop.html">Apples</a> <a class="dropdown-item"
                                        href="shop.html">Apricots</a> <a class="dropdown-item"
                                        href="shop.html">Bananas</a> <a class="dropdown-item"
                                        href="shop.html">Cantaloupe</a> <a class="dropdown-item"
                                        href="shop.html">Cherry</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <h5>Juice</h5>
                                    <a class="dropdown-item" href="shop.html">Sugarcane </a> <a class="dropdown-item"
                                        href="shop.html">Wheatgrass</a> <a class="dropdown-item"
                                        href="shop.html">Arrowroot</a> <a class="dropdown-item"
                                        href="shop.html">Grapefruit</a> <a class="dropdown-item"
                                        href="shop.html">Otai</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <p><img src="assets/images/page-img/menu3-img.jpg" alt="" title=""
                                            class="img-fluid"></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/blog') }}"> Blog </a>
                    </li>
                </ul>
                <div class="rate-price nav-1">
                    <ul>
                        <li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown"> <i
                                    class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animate slideIn">
                                @guest
                                    <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ url('register') }}">Register</a>
                                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                @endguest
                                @auth
                                    <a class="dropdown-item" href="{{ url('my-account') }}">My Account</a>
                                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                @endauth
                            </div>
                        </li>
                        <li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i><span
                                    class="circle-2">1</span></a></li>
                        <li class="dropdown"> <a class="dropdown-toggle link" href="#" data-toggle="dropdown"><i
                                    class="fa fa-shopping-bag" aria-hidden="true"></i><span
                                    class="circle-2">1</span></a>
                            <div class="dropdown-menu dropdown-menu2 dropdown-menu-right animate slideIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3"><img src="assets/images/fruits/img-1.jpg" alt="" title=""
                                                class="img-fluid"></div>
                                        <div class="col-md-9">
                                            <p>1 x Product Name... <span class="price">$ 14.70</span></p>
                                            <a href="#" class="close">x</a>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-3"><img src="assets/images/fruits/img-2.jpg" alt="" title=""
                                                class="img-fluid"></div>
                                        <div class="col-md-9">
                                            <p>1 x Product Name... <span class="price">$ 14.70</span></p>
                                            <a href="#" class="close">x</a>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-3"><img src="assets/images/fruits/img-3.jpg" alt="" title=""
                                                class="img-fluid"></div>
                                        <div class="col-md-9">
                                            <p>1 x Product Name... <span class="price">$ 14.70</span></p>
                                            <a href="#" class="close">x</a>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-3"><img src="assets/images/fruits/img-4.jpg" alt="" title=""
                                                class="img-fluid"></div>
                                        <div class="col-md-9">
                                            <p>1 x Product Name... <span class="price">$ 14.70</span></p>
                                            <a href="#" class="close">x</a>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="font-15">Tax </p>
                                        </div>
                                        <div class="col-md-9 text-right"> <span class="font-15">$ 2.80</span> </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="font-15"><strong>Total</strong></p>
                                        </div>
                                        <div class="col-md-9 text-right"> <span class="font-15"><strong>$
                                                    10.80</strong></span> </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <input type="button" value="Check out" class="btn check-out w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </nav>
    <!-- Navigation -->

    @yield('content');

    <div id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>Join Our Newsletter Now</h4>
                    <p class="m-0">Get E-mail updates about our latest shop and special offers.</p>
                </div>
                <div class="col-md-5">
                    <form action="#" method="post" id="subsForm"
                        onSubmit="return ajaxmailsubscribe();">
                        <div class="input-group">
                            <input type="email" name="subsemail" id="subsemail" class="form-control newsletter"
                                placeholder="Enter your mail">
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="button"
                                    onClick="return ajaxmailsubscribe();">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 address wow fadeInLeft">
                <p><img src="assets/images/logo.png" alt="" title="" class="img-fluid"></p>
                <p>Address: 123-45 Road 11378 Manchester</p>
                <p>Phone: +12 3456 78901</p>
                <p>Email: <a href="mailto:info.organicstore@gmail.com">info.organicstore@gmail.com</a></p>
                <ul class="social-2">
                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="instagram +"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer-link  wow fadeInLeft">
                <h3>Information</h3>
                <ul>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="shop.html">Shop</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer-link  wow fadeInLeft">
                <h3>My Account</h3>
                <ul>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 footer-link  wow fadeInLeft">
                <h3>Quick Link</h3>
                <ul>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="comingsoon.html">Coming Soon</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-dark">
        <div class="container copy-right">
            <div class="row">
                <div class="col-md-6 text-white"> Copyright ?? 2020 <a href="#">Organic Store </a>- All Rights Reserved.
                </div>
                <div class="col-md-6 payment">
                    <div class="pull-right"> <a href="#"><img src="assets/images/skrill.png" alt="" title=""></a> <a
                            href="#"><img src="assets/images/ob.png" alt="" title=""></a> <a href="#"><img
                                src="assets/images/paypal.png" alt="" title=""></a> <a href="#"><img
                                src="assets/images/am.png" alt="" title=""></a> <a href="#"><img
                                src="assets/images/mr.png" alt="" title=""></a> <a href="#"><img
                                src="assets/images/visa.png" alt="" title=""></a> </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="popup-1" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/product-big-1.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-1" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-2" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/kiwi.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-2" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-3" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/orange.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-3" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-4" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"><img src="assets/images/product-img/acai-berry.jpg" alt="" title=""
                    class="img-fluid"></div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-4" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-5" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/maracuja.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-5" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-6" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"><img src="assets/images/product-img/cucumber.jpg" alt="" title=""
                    class="img-fluid"></div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-6" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="popup-7" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/mushroom.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-7" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-8" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/persimmon.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-8" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-9" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/nectarine.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-9" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-10" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/kiwi.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-2" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-11" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/orange.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-3" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-12" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/orange.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-3" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-13" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/maracuja.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-5" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-14" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"><img src="assets/images/product-img/cucumber.jpg" alt="" title=""
                    class="img-fluid"></div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-6" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-15" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/mushroom.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-7" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-16" class="popup-fcy">
        <div class="row">
            <div class="col-md-6"> <img src="assets/images/product-img/persimmon.jpg" alt="" title="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-8" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-17" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/maracuja.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-5" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-18" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"><img src="assets/images/product-img/cucumber.jpg" alt="" title=""
                    class="img-fluid"></div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-6" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-19" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/mushroom.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div class="wrap_compare">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-7" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-20" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/product-big-1.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-1" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-21" class="popup-fcy">
        <div class="row">
            <div class="col-md-6 text-center"> <img src="assets/images/product-img/kiwi.jpg" alt="" title=""
                    class="img-fluid"> </div>
            <div class="col-md-6">
                <div class="product_meta">
                    <p>Availability : <span>not in Stock</span> </p>
                    <p>Categories : <span>Vegetable Fruit</span></p>
                    <p>Tags : <span>fruit green health organic</span> </p>
                </div>
                <div class="product-dis">
                    <h3>Products Name</h3>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book when an unknown printer took a galley of
                        type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. </p>
                    <div class="row">
                        <div class="col-2 pr-0">
                            <input type="number" class="input-text qty text" step="1" min="1" max="50" name="quantity"
                                value="1" title="Qty" size="4">
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="add_to_cart"><a href="#" class="">ADD TO CART</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                        <div class="pb-3 pt-3">
                            <div class="left-icon"> <a class="add-to-compare round-icon-btn" data-fancybox="gallery"
                                    data-src="#popup-2" href="javascript:;"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a> <a href="#" class="mr-3"><i
                                        class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-12 mb-4 p-0">
                            <hr class="m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/formValidation.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/vendor/wow/wow.js"></script>
    <script src="assets/vendor/wow/page.js"></script>
    <script src="assets/vendor/jquery/custom-select.js"></script>
    <!--wow-->
    <script src="assets/wow-slider/engine1/wowslider.js"></script>
    <script src="assets/wow-slider/engine1/script.js"></script>
    <!--wow-->
    <!--home-->
    <script src="assets/vendor/jquery/home-3.js"></script>
    <!--home-->
    <!--fancybox files -->
    <link rel="stylesheet" href="assets/css/product-hover.css">
    <link rel="stylesheet" href="assets/vendor/fancy-box/fancybox.min.css" />
    <script src="assets/vendor/fancy-box/jquery.fancybox.min.js"></script>
    <!--scrolltop-->
    <script src="assets/vendor/jquery/scrolltopcontrol.js"></script>
    <!--scrolltop-->
    <!--bootstrap-->
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--bootstrap-->
    <p data-toggle="modal" class="no-margin" data-target="#myModal" id="model2"></p>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog2">
            <div class="modal-content text-center">
                <div class="modal-body modal-body2">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <p><img src="assets/images/success.svg" width="50"></p>
                    <h3 class="modal-title">Thank you</h3>
                    <h4 class="thanks mt-2">Your submission is recevied and we will contact you soon.</h4>
                    <a href="#" target="_blank" class="btn add-to-cart2 d-inline-block font-15 rounded">BUY THIS
                        TEMPLATE NOW</a> <a href="index.html" class="back-to-home d-block small mt-2"><i
                            class="fa fa-long-arrow-left"></i> BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
