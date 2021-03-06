<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://www.creativethemes.co.in/buy-creativetheme-html-template/organicfood-store/image-html/html/ecommerce/assets/images/favicon.ico">
    <title>Organic Admin Panel</title>
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Editable CSS -->
    <link type="text/css" rel="stylesheet" href="../assets/vendors/jsgrid/dist/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../assets/vendors/jsgrid/dist/jsgrid-theme.min.css" />
    <!-- chartist CSS -->
    <link href="../assets/vendors/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/vendors/c3-master/c3.min.css" rel="stylesheet">
    <!-- flot css -->
    <link href="css/pages/float-chart.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../assets/vendors/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/master-stylesheet.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="lds-roller">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header"> <a class="navbar-brand" href="{{ url("/") }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a> </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark"
                                href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark"
                                href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-Mail"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5>
                                                    <span class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pepper Hensen</h5>
                                                    <span class="mail-desc">Neque porro quisquam est!</span> <span
                                                        class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Steve Carter</h5>
                                                    <span class="mail-desc">I am a singer!</span> <span
                                                        class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5>
                                                    <span class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li> <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark"
                                href="#" id="3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-Support"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="3">
                                <ul>
                                    <li>
                                        <div class="drop-title">Support</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5>
                                                    <span class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pepper Hensen</h5>
                                                    <span class="mail-desc">Neque porro quisquam est!</span> <span
                                                        class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Steve Carter</h5>
                                                    <span class="mail-desc">I am a singer!</span> <span
                                                        class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5>
                                                    <span class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li> <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> <a href="#"
                                class="nav-link dropdown-toggle waves-effect waves-dark font-weight-light"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-Information"></i> </a> </li>
                        <li>
                            <div class="time-date"><i class="fa fa-calendar-o"></i> &nbsp; Sat, 17 jan 2019 <img
                                    src="../assets/images/sep.png" alt=""> <i class="fa fa-clock-o"></i> &nbsp; 10 : 33
                                : 22 AM</div>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro"> <a
                                class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/images/users/1.jpg" alt="user" class="" /> <span
                                    class="hidden-md-down">Hi, Dave Wiesley &nbsp;<i
                                        class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">michelle@gmail.com</p>
                                                <a href="authentication-profile.html"
                                                    class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url("/authentication-account-settings") }}"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url("/logout") }}"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ url("/dashboard") }}" aria-expanded="false"><i
                                    class="mdi mdi-cart-outline mr-10"></i><span class="hide-menu">Ecommerce
                                    Admin</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ url("/dashboard") }}"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="ecommerce-orders.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu"> Order Status </span></a></li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-product-list.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Products Catalogue</span></a>
                        </li>
                        <li><a class="waves-effect waves-dark" href="{{ url('/categories') }}"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Product Categories</span></a>
                        </li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-pro-list.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Product List - List view
                                </span></a></li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-products-catalogue.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Product List - grid view
                                </span></a></li>
                        <li><a class="waves-effect waves-dark" href="#"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Product Details</span></a></li>
                        <li><a class="waves-effect waves-dark" href="{{ url('/edit-categories') }}"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Edit Categories</span></a>
                        </li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-add-edit-products.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Add/Edit Products</span></a>
                        </li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-view-customers.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">View Customers</span></a></li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-invoice.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Invoice</span></a></li>
                        <li><a class="waves-effect waves-dark" href="ecommerce-shipments.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Shipments</span></a></li>
                        <li><a class="waves-effect waves-dark " href="ecommerce-reviews.html"> <i
                                    class="ti-angle-right"></i> <span class="hide-menu">Reviews</span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="authentication-login.html"
                                aria-expanded="false"> <i class="mdi mdi-login-variant"></i> <span
                                    class="hide-menu">Authentication</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url("/authentication-account-settings") }}">Account Settings</a></li>
                                <li><a href="{{ url("/login") }}">Login</a></li>
                                <li><a href="authentication-register.html">Register</a> </li>
                                <li><a href="password-recovery.html">Password Recovery</a></li>
                                <li><a href="{{ url("/logout") }}">Logout</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @yield("admin_container")

    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script src="../assets/vendors/jquery/jquery.min.js"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="../assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="../assets/vendors/datatables-2/buttons/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables-2/buttons/buttons.flash.min.js"></script>
    <script src="../assets/vendors/datatables-2/pdfmake/jszip.min.js"></script>
    <script src="../assets/vendors/datatables-2/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/vendors/datatables-2/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/vendors/datatables-2/buttons/buttons.html5.min.js"></script>
    <script src="../assets/vendors/datatables-2/buttons/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script src="js/support-tickets.js"></script>
    <!--jquery knob -->
    <script src="../assets/vendors/knob/jquery.knob.js"></script>
    <script src="js/knob-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Morris JavaScript -->
    <script src="../assets/vendors/raphael/raphael-min.js"></script>
    <script src="../assets/vendors/morrisjs/morris.js"></script>
    <!-- maps -->
    <script src="../../../../../../../www.amcharts.com/lib/4/maps.js"></script>
    <!-- maps -->
    <!-- Editable -->
    <script src="../assets/vendors/jsgrid/db.js"></script>
    <script src="../assets/vendors/jsgrid/dist/jsgrid.min.js"></script>
    <script src="js/jsgrid-init.js"></script>
    <script src="../assets/vendors/jsgrid/jsgrid-data.js"></script>
    <!-- Resources -->
    <script src="../assets/vendors/amcharts/core2.js"></script>
    <script src="../assets/vendors/amcharts/maps2.js"></script>
    <script src="../assets/vendors/amcharts/worldLow.js"></script>
    <script src="../assets/vendors/amcharts/animated2.js"></script>
    <!--Sparkline JavaScript -->
    <script src="../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/map-ecommerce.js"></script>
    <script src="js/ecommerce-dashboard.js"></script>
    <!--Sparkline JavaScript -->
    <script src="../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
</body>


</html>
