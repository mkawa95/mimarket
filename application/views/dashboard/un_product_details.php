<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 6/18/2018
 * Time: 11:25 AM
 */?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()?>nice/img/favicon.png">

    <title>marketing site</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>nice/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>nice/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>nice/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

    <!--    Data tables -->
    <link href="<?php echo base_url()?>/DataTables/css/dataTables.bootstrap.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.css"/>

    <!--custom style sheet-->
    <style>
        .icon_menu{
            color: black;
        }
        .image-box{
            border: 1px solid #D5D8DC;
            padding: 5px;
            margin: 10px;
            border-radius: 0;
            min-height: 150px;
        }
        .summary{
            border-radius: 0;
            padding: 10px;
            border: 1px solid #D5D8DC;
            background-color: whitesmoke;
            text-transform: capitalize;
            text-align: center;
        }
        .summary-box{
            padding: 8px;
            margin: 10px;
        }
        .description{
            font-size: small;
            line-height: 28px;
            color: #848484;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 10px;
            background-color: white;
        }
        .btn{
            border-radius: 0;
        }
        ul.sidebar-menu li ul.sub li a {

            padding: 0 0 0 32px;

            line-height: 30px;

            height: 30px;

            -webkit-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

            color: #d0d8df;

            font-size: small;

        }
        ul.sidebar-menu li a{

            color: #d0d8df;

            text-decoration: none;

            display: block;

            padding: 8px 0 8px 15px;

            font-size: small;

            line-height: 25px;

            font-weight: 300;

            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;

            outline: none;

            -webkit-transition: all 0.3s ease;

            -moz-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

        }
    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start-->
<div id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">MI<span class="lite">MARKET</span></a>
        <!--logo end-->

        <!--  search form start -->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">

                        <div class="col-sm-12">
                            <label class="front-head">online marketing system</label>
                        </div>
                    </form>
                </li>
                <li>
                    <form class="navbar-form">
                        <div class="col-sm-12 input-group">
                            <span class="input-group-addon">
                                <select class="" id="category"  name="category" style="font-size: small; padding: 3px">
                                <option value="" selected>All Categories</option>
                                <option value="electronics">Electronics</option>
                                <option value="construction">Construction</option>
                                <option value="hardware">Hardware</option>
                                <option value="plumbing">Plumbing</option>
                                <option value="furniture">Furniture</option>
                            </select>
                            </span>
                            <input class="form-control" type="text" name="searchProduct" placeholder="what are you looking for ?">
                            <span class="input-group-addon" style="background-color: cornflowerblue">
                                <a class="#"><i class="fa fa-search" style="color: white"></i></a></span>

                        </div>
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row" style="margin-top: 25px">
            <!--drop down start-->
            <ul class="nav pull-right top-menu">

                <li class="dropdown">
                    <a  href="<?php echo base_url()?>index.php/Direct/login">
                        <span class="username"><i class="fa fa-user" style="font-size: larger"></i> User login</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/IndexPage""><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-user"></i>
                        <span>Account</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Login</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Register</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-object-group"></i>
                        <span>Categories</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Electronics</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Construction</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Plumbing</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Furniture</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Hardware</a></li>

                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->

        </div>
    </aside>
    <!--    sidebar end-->


    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-8">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-sm-offset-1">
                    <h5 class="#"><i class="fa fa-dashboard"></i>
                        <a href="#">Dashboard</a>  <i class="fa fa-angle-double-right"></i><span><a href="#">Enterprises</a></span>
                        <i class="fa fa-angle-double-right"></i><span><a href="#">Enterprise Name</a></span></h5>
                    <section class="">
                        <div class="col-lg-11">

                            <?php $success_msg = $this->session->flashdata('success_msg');
                            if ($success_msg){?>
                                <div class="alert alert-success alert-dismissible"><?php echo $success_msg?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>

                            <?php $error_order = $this->session->flashdata('error_order');
                            if ($error_order){
                                $error_order = "Looks you have not logged in and this will make hard for supplier to know your address for delivery, Please"
                                ?>
                                <div class="alert alert-danger alert-dismissible"> <?php echo $error_order?> <span><a href="<?php echo base_url()?>index.php/Direct/login"><strong>Login</strong></a> or</span>
                                    <span><a href="<?php echo base_url()?>index.php/Direct/register"><strong>Click here to</strong> </a>create new account</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>

                            <div class="row items" style="margin-top: 1px">
                                <div class="col-sm-12" style="margin-top: 0px">
                                    <?php
                                    foreach($productDetails->result() as $row){
                                        ?>
                                        <div class="col-sm-4" style="font-size: small; border: 1px solid #D5D8DC; padding: 5px; margin: 0">
                                            <h5 style="color: cornflowerblue" class="summary"><strong><?php echo $row->ProductName?></strong></h5>
                                            <a href="#">
                                                <img src="<?php echo base_url()?>/Images/productImages/<?php echo $row->product_image?>" width="100%" height="200"></a>
                                            <h4><strong  style="color: red"><?php echo $row->product_price?></strong> tzs/piece</h4>
                                        </div>

                                        <div class="col-sm-7" style="font-size: small; border: 1px solid #D5D8DC; padding: 5px; margin: 0">
                                            <h5 style="color: #848484; text-transform: capitalize" class="summary"><strong>Important information about this product</strong></h5>

                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                <tr>
                                                    <td>Product Name</td>
                                                    <td><?php echo $row->ProductName?></td>
                                                </tr>
                                                <tr>
                                                    <td>Product Price</td>
                                                    <td><strong  style="color: red"><?php echo $row->product_price?></strong> tzs/piece</td>
                                                </tr>
                                                <tr>
                                                    <td><strong >Date added:</strong></td>
                                                    <td style="color: cornflowerblue"><?php echo $row->register_date?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Store Name:</strong></td>
                                                    <td><a href="#"><?php echo $row->name?></a></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Store location:</strong></td>
                                                    <td><?php echo $row->location?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Additional information:</strong></td>
                                                    <td>
                                                        <?php echo $row->product_details?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <h5><strong>Contact Information</strong> </h5>
                                            <label><strong style="color: cornflowerblue"> Owner's name:</strong> <span style="color: "> <?php echo $row->full_name?> </span></label><br>
                                            <label><strong style="color: cornflowerblue">Email:</strong> <span style="color: "> <?php echo $row->email?> </span></label><br>
                                            <label><strong style="color: cornflowerblue"> Phone number:</strong> <span style="color: "> <?php echo $row->phone?> </span></label><br>
                                            <label><strong style="color: cornflowerblue">Email:</strong> <span style="color: "> <?php echo $row->register_date?> </span></label><br>

                                            <a href="#">
                                                <button type="button" data-toggle="modal" data-target="#myModal<?php echo $row->product_id; ?>" style="float: right" class="btn btn-info btn-danger"><i class="fa fa-shopping-cart"></i> Order product</button>
                                            </a>
                                        </div>

                                        <div class="modal fade" id="myModal<?php echo $row->product_id; ?>" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title" style="color: red">Add product to cart</h4>
                                                    </div>
                                                    <form action="<?php echo base_url()?>index.php/Products/DirectOrders?prod=<?php echo $row->product_id; ?>" method="post">
                                                        <div class="modal-body">

                                                            <p>Enter product quantity</p>

                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon">Quantity</span>
                                                                <input class="form-control" placeholder="Product Quantity" name="quantity" required
                                                                       type="number" title="Enter product quantity">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="<?php echo base_url()?>index.php/Products/DirectOrders?prod=<?php echo $row->product_id; ?>">
                                                                    <button type="submit" class="btn btn-primary" name="send_order"><i class="fa fa-shopping-cart"></i> Add Product</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>

<!-- statics end -->
<!-- javascripts -->
<script src="<?php echo base_url()?>nice/js/jquery.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>nice/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url()?>nice/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>nice/js/bootstrap-wysiwyg.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url()?>nice/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url()?>nice/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>nice/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<script src="<?php echo base_url()?>nice/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url()?>nice/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="<?php echo base_url()?>nice/js/calendar-custom.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo base_url()?>nice/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url()?>nice/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url()?>nice/js/scripts.js"></script>
<script src="<?php echo base_url()?>nice/js/wysiwyg.js"></script>
<script src="<?php echo base_url()?>nice/summernote/summernote-lite.js"></script>

<script src="<?php echo base_url()?>/DataTables/js/dataTables.bootstrap.min.js" type="javascript"></script>
<script src="<?php echo base_url()?>/DataTables/js/jquery.dataTables.min.js"></script>
<script href="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.js"></script>

<!-- custom script for this page-->

<script>
    $('#enterprise').dataTable();
</script>
</html>


