<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin Dashboard</title>
    <link rel="logo" href="theme-assets/images/ico/logo1.jpeg">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/logo1.jpeg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>

                    </ul>


                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="adminindex.php"><img class="brand-logo" alt="Vestasa admin logo" src="theme-assets/images/logo/logo.jpeg" />
                        <h3 class="brand-text">Vestasa Admin</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="adminindex.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="orders.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Orders Pending</span></a>
                </li>
                <li class=" nav-item"><a href="orderCompleted.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Orders Completed</span></a>
                </li>
                <li class=" nav-item"><a href="banners.php"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Home Banners</span></a>
                </li>
                <li class=" nav-item"><a href="addproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Add Products</span></a>
                </li>
                <li class=" nav-item"><a href="editproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Edit Products</span></a>
                </li>
                <li class=" nav-item"><a href="removeproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Remove Products</span></a>
                </li>
                <li class=" nav-item"><a href="editcoupons.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Edit Coupon</span></a>
                </li>
                <li class=" nav-item"><a href="editdelivery.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Delivery Charges</span></a>
                </li>
                <li class=" nav-item"><a href="wishlist.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Products in Wishlist</span></a>
                </li>

            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Chart -->

                <!-- Chart -->
                <?php
                session_start();
                require "connection.php";

                $res = mysqli_query($conn, "Select * from orders where CAST(Date AS DATE) = CAST( curdate() AS DATE) ");

                $i = 0;
                while ($row = mysqli_fetch_array($res)) {

                    $total = $row['Price'] * intval($row['Quantity']);
                    $tot[$i] = $total;
                    $i = $i + 1;
                }


                $res2 = mysqli_query($conn, "SELECT * FROM orders WHERE CAST(Date AS DATE) BETWEEN DATE_SUB(CAST( curdate() AS DATE), INTERVAL 7 DAY) AND CAST( curdate() AS DATE) ");

                $j = 0;
                while ($row = mysqli_fetch_array($res2)) {
                    $total2 = $row['Price'] * intval($row['Quantity']);
                    $weekely[$j] = $total2;
                    $j = $j + 1;
                }

                $res3 = mysqli_query($conn, "SELECT * FROM orders WHERE CAST(Date AS DATE) BETWEEN DATE_SUB(CAST( curdate() AS DATE), INTERVAL 30 DAY) AND CAST( curdate() AS DATE)  ");

                $k = 0;
                while ($row = mysqli_fetch_array($res3)) {
                    $total3 = $row['Price'] * intval($row['Quantity']);
                    $monthly[$k] = $total3;
                    $k = $k + 1;
                }



                ?>

                <!-- eCommerce statistic -->
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted danger position-absolute p-1">Sales Today</h5>
                                <div>
                                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                                </div>

                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                    <br>
                                    <br>
                                    <center>
                                        <H1> <?php echo '₹ ';

                                                echo array_sum($tot);
                                                ?> </H1< /center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted info position-absolute p-1">Sales This Week</h5>
                                <div>
                                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                                </div>
                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                    <br>
                                    <br>
                                    <center>
                                        <H1><?php echo ('₹ ');
                                            echo array_sum($weekely); ?></H1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted warning position-absolute p-1">Sales This Month</h5>
                                <div>
                                    <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                                </div>
                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                    <br>
                                    <br>
                                    <center>
                                        <H1><?php echo ('₹ ');
                                            echo array_sum($monthly); ?></H1>
                                    </center>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/ eCommerce statistic -->
















                <div class="row match-height">
                    <div class="col-xl-4 col-lg-12">
                        <section id="chartjs-bar-charts">
                            <!-- Column Chart -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Items To Display On Front Page</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <div class="media-body w-100">
                                                    <span class="list-group-item-heading"> New Arrival

                                                    </span>
                                                    <ul class="list-unstyled users-list m-0 float-right">
                                                        <span class="list-group-item-heading"> <button class="btn btn-success btn-min-width mr-1 mb-1" onClick="document.location.href='frontitemsedit.php?wtd=NewArrival'">Edit</button>
                                                        </span>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body w-100">
                                                    <span class="list-group-item-heading"> Best Seller

                                                    </span>
                                                    <ul class="list-unstyled users-list m-0 float-right">
                                                        <span class="list-group-item-heading"> <button class="btn btn-success btn-min-width mr-1 mb-1" onClick="document.location.href='frontitemsedit.php?wtd=BestSeller'">Edit</button>
                                                        </span>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body w-100">
                                                    <span class="list-group-item-heading"> Featured

                                                    </span>
                                                    <ul class="list-unstyled users-list m-0 float-right">
                                                        <span class="list-group-item-heading"> <button class="btn btn-success btn-min-width mr-1 mb-1" onClick="document.location.href='frontitemsedit.php?wtd=Featured'">Edit</button>
                                                        </span>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body w-100">
                                                    <span class="list-group-item-heading"> Special offer

                                                    </span>
                                                    <ul class="list-unstyled users-list m-0 float-right">
                                                        <span class="list-group-item-heading"> <button class="btn btn-success btn-min-width mr-1 mb-1" onClick="document.location.href='frontitemsedit.php?wtd=Specialoffer'">Edit</button>
                                                        </span>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </section>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Top 10 Most Viewed products</h4>

                                </div>
                                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-area" data-slide-to="0"> </li>
                                        <li data-target="#carousel-area" data-slide-to="1"></li>
                                        <li data-target="#carousel-area" data-slide-to="2"></li>
                                        <li data-target="#carousel-area" data-slide-to="3"></li>
                                        <li data-target="#carousel-area" data-slide-to="4"></li>
                                        <li data-target="#carousel-area" data-slide-to="5"></li>
                                        <li data-target="#carousel-area" data-slide-to="6"></li>
                                        <li data-target="#carousel-area" data-slide-to="7"></li>
                                        <li data-target="#carousel-area" data-slide-to="8"></li>
                                        <li data-target="#carousel-area" data-slide-to="9"></li>
                                        <li data-target="#carousel-area" data-slide-to="10"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">


                                        <div class="carousel-item active">
                                            <img src="theme-assets/images/carousel/08.png" class="d-block w-100" alt="First slide">
                                        </div>
                                        <?php
                                        $res = mysqli_query($conn, "SELECT * FROM products ORDER BY TimesViewed DESC LIMIT 10");




                                        $count = mysqli_num_rows($res);
                                        $tot = array();

                                        if ($count == 0) {
                                            echo "<center> No Orders Available </center>";
                                        } else {

                                            while ($row = mysqli_fetch_array($res)) {

                                        ?>

                                                <div class="carousel-item">
                                                    <img height='400' src="theme-assets/images/<?php echo $row['Image1']; ?>" class="d-block w-100" alt="<?php echo $row['Image1']; ?>">
                                                    <span class="float-left"><?php echo $row['Product_name']; ?></span>
                                                </div>





                                        <?php


                                            }
                                        }
                                        ?>

                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                        <span class="la la-angle-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                        <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Buyers</h4>
                                <a class="heading-elements-toggle">
                                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                                </a>

                            </div>
                            <div class="card-content">
                                <div id="recent-buyers" class="media-list">


                                    <?php
                                    $res = mysqli_query($conn, "SELECT * FROM orderdetails ORDER BY OrderId DESC LIMIT 10");




                                    $count = mysqli_num_rows($res);
                                    $tot = array();

                                    if ($count == 0) {
                                        echo "<center> No Orders Available </center>";
                                    } else {

                                        while ($row = mysqli_fetch_array($res)) {

                                    ?>
                                            <a href="#" class="media border-0">

                                                <div class="media-body w-100">
                                                    <span class="list-group-item-heading"><?php echo $row['First_Name'];
                                                                                            echo ('&nbsp');
                                                                                            echo $row['Last_name']; ?>

                                                    </span>
                                                    <ul class="list-unstyled users-list m-0 float-right">
                                                        <span class="list-group-item-heading"> Total:
                                                            <?php echo $row['Total']; ?> </span>
                                                    </ul>
                                                    <p class="list-group-item-text mb-0">
                                                        <span class="blue-grey lighten-2 font-small-3">
                                                            #OrderID-<?php echo $row['OrderId']; ?> </span>
                                                    </p>
                                                </div>
                                            </a>
                                    <?php


                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->



        <!-- BEGIN VENDOR JS-->
        <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN CHAMELEON  JS-->
        <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
        <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
        <!-- END CHAMELEON  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
</body>

</html>