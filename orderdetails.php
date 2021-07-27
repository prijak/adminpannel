<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Orders Details</title>
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
  require "connection.php";

  $oid = $_POST['order_id'];

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
        <li class="active"><a href="orders.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Orders</span></a>
        </li>
        <li class=" nav-item"><a href="banners.php"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Home Banners</span></a>
        </li>
        <li class=" nav-item"><a href="addproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Add Products</span></a>
        </li>
        <li class=" nav-item"><a href="editproduct.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Edit Products</span></a>
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
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Orders</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="adminindex.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Tables
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic Tables start -->


        <!-- Order table start -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Orders Details</h4>
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
                <div class="card-body">
                  <p class="card-text"> Showing Details for Order Number # <?php echo $oid; ?> </p>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>


                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $res = mysqli_query($conn, "Select * from Orders where OrderId = '$oid' ");




                      $count = mysqli_num_rows($res);
                      $tot = array();


                      if ($count == 0) {
                        echo "<h1><center> No Orders Pending </center></h1>";
                      } else {










                        while ($row = mysqli_fetch_array($res)) {

                      ?>
<form action="orderstatus.php" method="post">

                          <tr>
                          <input type = "hidden" name="oid" value ="<?php echo($oid);?>">
                            <td><?php echo $row['Product_ID']; ?></td>
                            <td><?php echo $row['Product_Name']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Price']; ?></td>



                          </tr>



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
        <div class="form-group">
          <button type="submit" class="btn btn-warning btn-primary btn-lg btn-block" name="whattodo" value="Packed">Order Packed</button>
          <button type="submit" class="btn btn-warning btn-primary btn-lg btn-block" name="whattodo" value="Out for delivery">Order Dispached</button>
          <button type="submit" class="btn btn-success btn-primary btn-lg btn-block" name="whattodo" value="Completed" >Order Delivered</button>
          <button type="submit" class="btn btn-danger btn-primary btn-lg btn-block" name="whattodo" value="Delete">Delete Order</button>
        </div>
        </form>


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