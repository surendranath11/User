<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>My Rewards</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
  <?php include('includes/head.php'); ?>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
  <?php include('includes/nav.php'); ?>

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            My Rewards
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <!-- <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Team</th>
                                            <th>Acheived Team</th>
                                            <th>Reward</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Team</th>
                                            <th>Acheived Team</th>
                                            <th>Reward</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td> 1</td>
                                            <td>6 Direct</td>
                                            <td>6</td>
                                            <td>NO Reward</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                        </tr>
                                        <tr>
                                            <td> 2</td>
                                            <td>36</td>
                                            <td>36</td>
                                            <td>T-Shirt</td>
                                            <td>---</td>
                                            <td class="text-primary">Acheived</td>
                                            <td class="text-success">Active</td>
                                        </tr>
                                        <tr>
                                            <td> 3</td>
                                            <td>6 T-Shirts users</td>
                                            <td>2</td>
                                            <td>Excutive Bag</td>
                                            <td>---</td>
                                            <td class="text-danger">Not Acheived</td>
                                            <td class="text-warning">Pending</td>
                                        </tr>
                                        <tr>
                                            <td> 4</td>
                                            <td>5 Bags users</td>
                                            <td>2</td>
                                            <td>Tab</td>
                                            <td>---</td>
                                            <td>Not Acheived</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td> 5</td>
                                            <td>4 Tabs users</td>
                                            <td>2</td>
                                            <td>Laptop</td>
                                            <td>---</td>
                                            <td>Not Acheived</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td> 6</td>
                                            <td>4 Laptops users</td>
                                            <td>2</td>
                                            <td>20grams Gold</td>
                                            <td>---</td>
                                            <td>Not Acheived</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td> 7</td>
                                            <td>3 (20gram Gold) users</td>
                                            <td>2</td>
                                            <td>Bike</td>
                                            <td>---</td>
                                            <td>Not Acheived</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td> 8</td>
                                            <td>3 Bike users</td>
                                            <td>2</td>
                                            <td>Car</td>
                                            <td>---</td>
                                            <td>Not Acheived</td>
                                            <td>Pending</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->






        </div>
    </section>

    <!-- Jquery Core Js -->
  <?php include('includes/foot.php'); ?>


</body>

</html>
