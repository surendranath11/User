<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>My Profile </title>

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
                            My Profile
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#profile" data-toggle="tab"> <i class="material-icons">face</i> PROFILE</a></li>
                                <li role="presentation"><a href="#Changepassword" data-toggle="tab"><i class="material-icons">settings</i> Change Password</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                  <?php echo validation_errors() ?>
                                  <?php if(isset($message)){
                                    echo $message;
                                  }?>
                                    <b>My Profile</b>
                                    <p>
                                    <div class="row clearfix">
                                      <form method="post" action="<?php echo base_url() ?>index.php/User/Updateprofile" enctype="multipart/form-data">

                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person_pin</i>
                                                    </span>
                                                    <div class="form-line">
                                                    <input type="text" class="form-control date" name="userid" value="<?php echo $user->userid; ?>" placeholder="USer ID" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="name" value="<?php echo $user->name;?>" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="phone" value="<?php echo $user->phone; ?>" placeholder="Phone Number" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="email" value="<?php echo $user->email; ?>" placeholder="Email ID" >
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Bank Details</h4>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date"  placeholder="Full Name" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="accountnumber" value="<?php echo $user->accountnumber; ?>" placeholder="Account Number" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">token</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date"  name="bankname" value="<?php echo $user->bankname; ?>" placeholder="Bank Name" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="ifsccode" value="<?php echo $user->ifsccode; ?>" placeholder="IFSC Code" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">account_balance_wallet</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="UPI/PhonePe/GooglePay" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group text-center">
                                                        <button class="btn btn-primary" name="submit" >Update</button>
                                                </div>
                                            </div>
                                            </form>

                                    </div>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Changepassword">
                                    <b>Change Password</b>
                                    <p>
                                      <?php if($this->session->flashdata('status')) { ?>
            <div class="alert alert-success">
              <?php echo $this->session->flashdata('status'); ?>
            </div>
          <?php } ?>
                                  <div>    <?php echo validation_errors() ?>
                                      <?php if(isset($message)){
                                      	echo $message;
                                      }

                                      ?></div>
                                    <div class="row clearfix">
                                              <form method="post" action="<?php echo base_url() ?>index.php/User/Update_password" enctype="multipart/form-data">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person_pin</i>
                                                    </span>
                                                    <div class="form-line">
                                                    <input type="text" class="form-control date" name="old_password" placeholder="OLD Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="new_password" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="confirm_password" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="input-group text-center">
                                                        <button class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                            </form>
                                    </div>
                                    </p>
                                </div>
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
