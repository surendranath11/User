<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>My Referrals </title>

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
  <?php include('includes/nav1.php'); ?>

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            My Direct Referrals
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
                                            <th>Date</th>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Topup</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php foreach ($data as $row){ ?>



                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['userid']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td class="text-danger"><?php
                                            $status = $row['status'];
                                            if($status == 0)
                                            {
                                            ?>
                                            <a  >Active</a>
                                            <?php
                                          }
                                          else {
                                            ?>
                                            <a  >InActive</a>
                                            <?php
                                          }

                                          ?></td>
                                            <td><?php
                                            $status = $row['status'];
                                            if($status == 0)
                                            {
                                            ?>
                                            <a >Success</a>
                                            <?php
                                          }
                                          else {
                                            ?>
                                            <a  >Not Topup</a>
                                            <?php
                                          }

                                          ?></td>
                                        </tr>
                                      <?php } ?>


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
