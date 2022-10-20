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
<?php echo validation_errors() ?>
<?php if(isset($message)){
  echo $message;
}

?>
<body class="theme-red">
    <!-- Page Loader -->
    <?php if($this->session->flashdata('status')) { ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('status'); ?>
                </div>
              <?php } ?>
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

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                    <b>My Profile</b>
                                    <p>
                                    <div class="row clearfix">
                                            <form method="post" enctype="multipart/form-data">
<?php foreach ($e_data as $row){ ?>




                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person_pin</i>User Id
                                                    </span>
<div class="form-line">
                                                    <strong>  <input type="text" class="form-control date"value=" <?php echo $row['userid']; ?>"  readonly>  </strong>
  </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>NAME
                                                    </span>
                                               <div class="form-line">
                                                  <strong><input type="text" class="form-control date" value=" <?php echo $row['name'] ; ?>" placeholder="Name" readonly>  </strong>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>PHONE
                                                    </span>
<div class="form-line">
                                                        <strong>  <input type="text" class="form-control date" value=" <?php echo $row['phone'] ; ?>" placeholder="Phone Number" readonly>  </strong>
</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">EMAIL
                                                        <i class="material-icons">email</i>
                                                    </span>
<div class="form-line">
                                                      <strong>    <input type="text" class="form-control date" value=" <?php echo $row['email'] ; ?>" placeholder="Email ID" readonly>  </strong>
  </div>
                                                </div>
                                            </div>
                                            <h4>Bank Details</h4><br>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>FULL NAME
                                                    </span>
<div class="form-line">
                                                    <strong>    <input type="text" class="form-control date" value=" <?php echo $row['name'] ; ?>" placeholder="Full Name" readonly></strong>
  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>ACCOUNT NUMBER
                                                    </span>
<div class="form-line">
                                                        <input type="text" class="form-control date" value="<?php echo $row['accountnumber'] ; ?>" placeholder="Account Number" readonly >
  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">token</i>BANK NAME
                                                    </span>
                                                    <div class="form-line">
                                                      <strong>    <input type="text" class="form-control date" value=" <?php echo $row['bankname'] ; ?>" placeholder="Bank Name" readonly >  </strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>IFSC CODE
                                                    </span>
                                                    <div class="form-line">
                                                        <strong>  <input type="text" class="form-control date" value=" <?php echo $row['ifsccode'] ; ?>" placeholder="IFSC Code" readonly >  </strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">account_balance_wallet</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="UPI/PhonePe/GooglePay" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group text-center">
                                                        <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/User/Edit_profile') ?>/<?php echo $row['userid'] ; ?>">Edit</a></td>
                                                </div>
                                            </div>
                                            </form>
                                          <?php }?>
                                    </div>
                                    </p>
                                </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->







    </section>

    <!-- Jquery Core Js -->
    <?php include('includes/foot.php'); ?>


</body>

</html>
