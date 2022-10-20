<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Users List </title>

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
              <div class="page-wrapper bg-wrapper">
                  <div class="content">
                      <div class="row">
                          <div class="col-sm-12">
                              <h4 class="page-title">Support </h4>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="card-box">
                                  <h4 class="card-title">Create Ticket </h4>
                                  <form  method="post" enctype="multipart/form-data">
                                      <div class="form-group row">
                                          <label class="col-md-3 col-form-label">Select Issue</label>
                                          <div class="col-md-9">
                                              <select type="text" class="form-control" name="issuetype" required>
                                                  <option value="" selected>Select Issue</option>
                                                  <option>Activation Related</option>
                                                  <option>Payment Related</option>
                                                  <option>Account Related</option>
                                                  <option>Others</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-md-3 col-form-label">Remark </label>
                                          <div class="col-md-9">
                                              <textarea type="text" class="form-control" name="remark" placeholder="Enter message" required></textarea>
                                          </div>
                                      </div>
                                      <div class="text-center">
                                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                      </div>
                                  </form>
                              </div>
                          </div>

                      </div>

                      <div class="row">
                          <div class="col-md-12">
                  <div class="buy-form">
                    <h4 class="page-title">Ticket Report</h4>
                    <div class="table-responsive">
                      <table class="datatable table table-striped custom-table">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Remark</th>
                            <th>Admin Replay</th>
                           <th>Close Date</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($ticket as $row){ ?>
                          <tr>
                            <td><input type="checkbox" > </td>
                            <td><?Php echo $row['date'];?></td>
                             <td><?Php echo $row['issuetype'];?></td>
                                                  <td><?Php echo $row['remark'];?></td>
                                                  <td><?Php echo $row['adminreply'];?></td>
                                                  <td><?Php echo $row['closedate'];?></td>
                            <td><?php
                            $status = $row['status'];
                            if($status == 0)  {  ?> <a  >pending</a>  <?php  }
                          else {  ?> <a  >Completed</a>  <?php  }  ?></td>
                          </tr>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>
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
