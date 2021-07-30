<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Edit Banner</title>
    <link rel="logo" href="theme-assets/images/ico/logo1.jpeg">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/logo1.jpeg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">



    <?php
    session_start();
    require "connection.php";


    $whattodo = $_POST['banneredit'];

    if (empty($whattodo)) {

        $whattodo = $_GET['banneredit'];
    }
    ?>




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
                <li class=" nav-item"><a href="adminindex.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="orders.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Orders Pending</span></a>
                </li>
                <li class=" nav-item"><a href="orderCompleted.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Orders Completed</span></a>
                </li>
                <li class=" active"><a href="banners.php"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Home Banners</span></a>
                </li>
                <li class=" nav-item"><a href="addproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Add Products</span></a>
                </li>
                <li class="nav-item"><a href="editproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Edit Products</span></a>
                </li>
                <li class=" nav-item"><a href="removeproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Remove Products</span></a>
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
                <!-- Basic Tables start -->




                <!-- start of main table -->

                <?php
                if ($whattodo == "addhometopbanner") {

                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add New Home Banner</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <tbody>

                                                <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                                    <tr>
                                                        <input type="hidden" name="type" value="TopHomeBannerADD">
                                                        <th>Main Heading</th>
                                                        <td><input type="text" class="form-control" placeholder="Heading of banner" required="true" id="basicInput" name="Heading" name="Heading"></td>


                                                    </tr>
                                                    <tr>
                                                        <th> Sub Heading</th>
                                                        <td><input type="text" class="form-control" placeholder="Sub heading of Banner" required="true" id="basicInput" name="subHeading"></td>

                                                    </tr>

                                                    <th>Select Photo (one):</th>
                                                    <td><input type="file" name="files[]" multiple required="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" align="center">Note: Supported image format: .jpeg,
                                                            .jpg, .png, .webp Please have resoloution of image as 1920X500
                                                        </td>
                                                    </tr>


                                                    </tr>

                                                    <td colspan="2">
                                                        <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Submit</button>
                                                        </center>
                                                    </td>
                                                </form>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                }
                ///////////////////////////////delete home banner top/////////////////////
                else if ($whattodo == "removehometopbanner") {
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Remove Banner</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                                        </ul>
                                    </div>


                                </div>
                                <div class="card-content collapse show">

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Banner Heading</th>
                                                    <th>Remove Banner</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $res = mysqli_query($conn, "Select * from banner where Type='TopHomeBanner' ");




                                                $count = mysqli_num_rows($res);
                                                $tot = array();


                                                if ($count == 0) {
                                                    echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                                                } else {

                                                    while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                        <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                                            <tr>
                                                                <input type="hidden" name="type" value="TopHomeBannerDEL">
                                                                <th> <?php echo $row['MainHeading'] ?> </th>
                                                                <td><button type="Submit" class="btn btn-danger  btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Delete Banner</button>
                                                                </td>


                                                            </tr>


                                                    <?php
                                                    }
                                                }
                                                    ?>


                                                        </form>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php
                }

                /////////////////////////////////////// Edit Home Banner /////////////////
                else if ($whattodo == "edithometopbanner") {



                ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Home Banner</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>

                                            <?php

                                            $res = mysqli_query($conn, "Select * from banner where Type ='TopHomeBanner' ");




                                            $count = mysqli_num_rows($res);
                                            $tot = array();


                                            if ($count == 0) {
                                                echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                                            } else {

                                                while ($row = mysqli_fetch_array($res)) {
                                            ?>

                                                    <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                                        <tr>
                                                            <input type="hidden" name="type" value="TopHomeBannerEDT">
                                                            <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">

                                                            <th>Main Heading</th>
                                                            <td><input type="text" class="form-control" value="<?php echo $row['MainHeading'] ?>" required="true" id="basicInput" name="Heading"></td>


                                                        </tr>
                                                        <tr>
                                                            <th> Sub Heading</th>
                                                            <td><input type="text" class="form-control" value="<?php echo $row['SubHeading'] ?>" required="true" id="basicInput" name="subHeading"></td>

                                                        </tr>


                                                        <tr>
                                                            <th> Image </th>
                                                            <td><img height="130" width="330" class="" src="theme-assets/images/<?php echo $row['Image']; ?>" alt="<?php echo $row['file_name']; ?>"></td>

                                                        </tr>

                                                        <th>Select Photo (one):</th>
                                                        <td><input type="file" name="files[]" multiple /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="center">Note: Supported image format: .jpeg,
                                                                .jpg, .png, .webp Please have resoloution of image as 1920X500</td>
                                                        </tr>
                                                        <tr>

                                                            <td colspan="2">
                                                                <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Submit</button></center>
                                                            </td>

                                                        </tr>

                                                    </form>
                                            <?php
                                                }
                                            }
                                            ?>



                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        <?php

                }
                /////////////////////////// middle banner home ////////////////////////////////
                else if ($whattodo == "edithomemiddlebanner") {
        ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Middle Banner</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <tbody>

                                    <?php

                                    $res = mysqli_query($conn, "Select * from banner where Type='MiddleHomeBanner' ");




                                    $count = mysqli_num_rows($res);
                                    $tot = array();


                                    if ($count == 0) {
                                        echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                                    } else {

                                        while ($row = mysqli_fetch_array($res)) {
                                    ?>

                                            <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                                <tr>

                                                    <input type="hidden" name="type" value="MiddleHomeBannerEDT">
                                                    <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">
                                                    <th>Main Heading</th>
                                                    <td><input type="text" class="form-control" value="<?php echo $row['MainHeading'] ?>" required="true" id="basicInput" name="Heading"></td>


                                                </tr>
                                                <tr>
                                                    <th> Sub Heading</th>
                                                    <td><input type="text" class="form-control" value="<?php echo $row['SubHeading'] ?>" required="true" id="basicInput" name="subHeading"></td>

                                                </tr>


                                                <tr>
                                                    <th> Image </th>
                                                    <td><img height="130" width="330" class="" src="theme-assets/images/<?php echo $row['Image']; ?>" alt="<?php echo $row['file_name']; ?>"> </td>

                                                </tr>

                                                <th>Select Photo (one):</th>
                                                <td><input type="file" name="files[]" multiple /></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg,
                                                        .png, .webp Please have resoloution of image as 540X300</td>
                                                </tr>

                                                </tr>

                                                <td colspan="2">
                                                    <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Submit</button></center>
                                                </td>

                                            </form>
                                    <?php
                                        }
                                    }
                                    ?>



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
                }
                ///////////////////////////////////////////////// vloggers ///////////////////////// add
                else if ($whattodo == "addvloggerreview") {
    ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Vlog</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <tbody>

                                    <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                        <tr>
                                            <input type="hidden" name="type" value="VlogAdd">
                                            <th>Vlog Description</th>
                                            <td><input type="text" class="form-control" placeholder="Vlog Description" required="true" id="basicInput" name="Heading"></td>


                                        </tr>
                                        <tr>
                                            <th> Vlogger Name</th>
                                            <td><input type="text" class="form-control" placeholder="Vlogger Name" required="true" id="basicInput" name="subHeading"></td>

                                        </tr>
                                        <tr>
                                            <th> Vlog Link</th>
                                            <td><input type="text" class="form-control" placeholder="Vlog Link" required="true" id="basicInput" name="link"></td>

                                        </tr>
                                        <th>Select Photo (one):</th>
                                        <td><input type="file" name="files[]" multiple required="true" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg,
                                                .png, .webp </td>
                                        </tr>


                                        </tr>

                                        <td colspan="2">
                                            <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Submit</button>
                                            </center>
                                        </td>
                                    </form>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
                }

                ////////////////////////// remove Vlogs ////////////////////
                else if ($whattodo == "removevloggerReview") {
    ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Remove Vlogs</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                            </ul>
                        </div>


                    </div>
                    <div class="card-content collapse show">

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Banner Heading</th>
                                        <th>Remove Banner</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $res = mysqli_query($conn, "Select * from banner where Type='Vlog' ");




                                    $count = mysqli_num_rows($res);
                                    $tot = array();


                                    if ($count == 0) {
                                        echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                                    } else {

                                        while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                            <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                                <tr>
                                                    <input type="hidden" name="type" value="VlogDEL">
                                                    <th> <?php echo $row['SubHeading'] ?> </th>
                                                    <td><button type="Submit" class="btn btn-danger  btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Delete Banner</button>
                                                    </td>


                                                </tr>


                                        <?php
                                        }
                                    }
                                        ?>


                                            </form>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
                }

                ////////////////////////// edit vlogs/////////////////////
                else if ($whattodo == "editvloggerreview") {
    ?>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Vlogs</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>

                                <?php

                                $res = mysqli_query($conn, "Select * from banner where Type='Vlog' ");




                                $count = mysqli_num_rows($res);
                                $tot = array();


                                if ($count == 0) {
                                    echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                                } else {

                                    while ($row = mysqli_fetch_array($res)) {
                                ?>

                                        <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                            <tr>
                                                <input type="hidden" name="type" value="VlogEDT">
                                                <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">
                                                <th>Vlog Description</th>
                                                <td><input type="text" class="form-control" value="<?php echo $row['MainHeading'] ?>" required="true" id="basicInput" name="Heading"></td>


                                            </tr>
                                            <tr>
                                                <th> Vlogger Name</th>
                                                <td><input type="text" class="form-control" value="<?php echo $row['SubHeading'] ?>" required="true" id="basicInput" name="subHeading"></td>

                                            </tr>


                                            <tr>
                                                <th> Image </th>
                                                <td><img height="130" width="330" class="" src="theme-assets/images/<?php echo $row['Image']; ?>" alt="<?php echo $row['file_name']; ?>"> &nbsp &nbsp &nbsp &nbsp <button type="button" class="btn btn-danger  btn-min-width mr-1 mb-1" name="oof" value="<?php echo $row['Product_ID']; ?>" onClick="document.location.href='remimg.php?oof=<?php echo $row1['id']; ?>'">
                                                        Delete image </button> </td>

                                            </tr>

                                            <tr>
                                                <th> Vlog Link</th>
                                                <td><input type="text" class="form-control" value="<?php echo $row['VlogLink'] ?>" required="true" id="basicInput" name="link"></td>

                                            </tr>

                                            <th>Select Photo (one):</th>
                                            <td><input type="file" name="files[]" multiple /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png,
                                                    .webp </td>
                                            </tr>
                                            </tr>

                                            <td colspan="2">
                                                <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Submit</button></center>
                                            </td>

                                        </form>

                                <?php
                                    }
                                }
                                ?>




                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
                }
                //////////////////////////////////////////////////////////////// Product banner ///////////////////////////////////////
                else if ($whattodo == "editproductsearchbanner") {
?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Product Page Banner</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">

                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>

                            <?php

                            $res = mysqli_query($conn, "Select * from banner where Type='ProductPage' ");




                            $count = mysqli_num_rows($res);
                            $tot = array();


                            if ($count == 0) {
                                echo "<h1><center> Error loading Banner : No banner available  </center></h1>";
                            } else {

                                while ($row = mysqli_fetch_array($res)) {
                            ?>

                                    <form action="bannermodify.php" method="post" enctype="multipart/form-data">

                                        <tr>
                                            <input type="hidden" name="type" value="ProductEdit">
                                            <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">
                                            <th>Main Heading</th>
                                            <td><input type="text" class="form-control" value="<?php echo $row['MainHeading'] ?>" required="true" id="basicInput" name="Heading"></td>


                                        </tr>
                                        <tr>
                                            <th> Sub Heading </th>
                                            <td><input type="text" class="form-control" value="<?php echo $row['SubHeading'] ?>" required="true" id="basicInput" name="subHeading"></td>

                                        </tr>


                                        <tr>
                                            <th> Image </th>
                                            <td><img height="130" width="330" class="" src="theme-assets/images/<?php echo $row['Image']; ?>" alt="<?php echo $row['file_name']; ?>"></td>

                                        </tr>


                                        <th>Select Photo (one):</th>
                                        <td><input type="file" name="files[]" multiple /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png,
                                                .webp </td>
                                        </tr>
                                        </tr>

                                        <td colspan="2">
                                            <center><button type="submit" class="btn btn-success btn-min-width mr-1 mb-1" name="pid" value="<?php echo $row['ID']; ?>">Submit</button></center>
                                        </td>


                                <?php
                                }
                            }
                                ?>



                                    </form>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
                } else {
                }
?>


<!-- Bordered table end -->
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->




<!-- BEGIN VENDOR JS-->
<script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
<script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>

</html>