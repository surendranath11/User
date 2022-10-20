<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Topup User </title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <?php include('includes/head.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
function showProduct(str) {
if (str=="") {
  document.getElementById("txtProduct").innerHTML="Select Product";
  return;
}
if (window.XMLHttpRequest) {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
} else { // code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {
    document.getElementById("txtProduct").innerHTML=this.responseText;
  }
}
xmlhttp.open("GET","<?php echo base_url();?>index.php/User/Getprice?q="+str,true);
xmlhttp.send();
}

function showUser1(str) {
if (str=="") {
  document.getElementById("txtUser1").innerHTML="Select User1";
  return;
}
if (window.XMLHttpRequest) {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
} else { // code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {
    document.getElementById("txtUser1").innerHTML=this.responseText;
  }
}
xmlhttp.open("GET","<?php echo base_url();?>index.php/User/Getuser1?q="+str,true);
xmlhttp.send();
}
</script>
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
            <div class="row clearfix">

                <?php $status=$e_data->status;?>
               <?php if($status==1){?>
                <!-- Spinners -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Self Topup
                                <small>Use this form Self Topup Only<span class="badge badge-primary"> <?php echo $e_data->activationwallet;?></span></small>
                            </h2>
                            <?php if($this->session->flashdata('status')) { ?>
                          <div class="alert alert-success">
                          <?php echo $this->session->flashdata('status'); ?>
                          </div>
                          <?php } ?>
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
                            <div class="row clearfix">
                            <form method="post" enctype="multipart/form-data">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">token</i>
                                        </span>
                                        <div class="form-line">
                                          <select class="form-control" name="productid" onChange="showProduct(this.value)" style="width:200px">
                                    <option>Select Product</option>
                                      <?php foreach ($products as $pro){ ?>
                                        <?php $status1=$pro['status']; ?>
                                        <?php if($status1 == 1 ){ ?>
                                      <option value="<?php echo $pro['productid']; ?>">-- <?php echo $pro['productname']; ?></option>
                                   <?php } } ?>
                                  </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="txtProduct"></div>

                                <div class="col-md-12">
                                    <div class="input-group text-center">
                                            <button class="btn btn-danger" name="submit">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <?php }?>
                <!-- #END# Spinners -->
                <!-- Tags Input -->

                  <?php $status=$e_data->status;?>
                 <?php if($status==0){?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                User Topup
                                <small>Other User Topup<span class="badge badge-primary"><?php echo $e_data->activationwallet;?></span></small>
                            </h2>
                            <?php if($this->session->flashdata('status')) { ?>
                          <div class="alert alert-success">
                          <?php echo $this->session->flashdata('status'); ?>
                          </div>
                          <?php } ?>
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
                            <div class="row clearfix">
                                <form method="post" enctype="multipart/form-data">



                                <div class="col-md-8">
                                     <div class="input-group">
                                         <span class="input-group-addon">
                                             <i class="material-icons">person_pin</i>
                                         </span>
                                         <div class="form-line">
                                             <input type="text" class="form-control date" name="userid"  onChange="showUser1(this.value)" placeholder="UserId" required>
                                         </div>
                                     </div>
                                 </div>
                                 <div id="txtUser1"></div>
                                 <div class="col-md-6">
                                     <div class="input-group">
                                         <span class="input-group-addon">
                                             <i class="material-icons">token</i>
                                         </span>
                                         <div class="form-line">
                                           <select class="form-control" name="productid" onChange="showProduct(this.value)" style="width:200px">
                                     <option>Select Product</option>
                                       <?php foreach ($products as $pro){ ?>
                                         <?php $status1=$pro['status']; ?>
                                         <?php if($status1 == 1 ){ ?>
                                       <option value="<?php echo $pro['productid']; ?>">-- <?php echo $pro['productname']; ?></option>
                                    <?php } } ?>
                                   </select>
                                         </div>
                                     </div>
                                 </div>
                                   <div id="txtProduct"></div>
                                <div class="col-md-12">
                                    <div class="input-group text-center">
                                            <button class="btn btn-primary" name="logs" >Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- #END# Tags Input -->
            </div>


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Topup History
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
                                            <th>S No</th>
                                            <th>Date</th>
                                            <th>Userid</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php foreach ($topup as $row){ ?>


                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['userid']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['userphone']; ?></td>
                                            <td><?php echo $row['productname']; ?></td>
                                            <td><?php echo $row['productprice']; ?></td>
                                            <td><?php  $status = $row['status'];
                                          if($status == 0)
                                          {?>  <a>Success</a>  <?php  }
                                        else {  ?><a  >Failed</a>  <?php  }  ?></td>
                                        </tr>
                                      <?php }?>
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
