<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/nok.ico">
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
  <!-- datatable -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/datatable/datatables.min.css' ?>">
  <!-- swal -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/swal/js/sweetalert2.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css' ?>">
  <!-- date picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/Ionicons/css/ionicons.min.css' ?>">
  <!--  -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/bower_components/select2/dist/css/select2.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css' ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav" style="font-family: Cursive;">
  <div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url().'mtn' ?>" class="navbar-brand"><b>PT.NOK</b> Indonesia</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url().'mtn' ?>">Home<span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Mesin <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url().'mtn/data_mesin' ?>">Data Mesin</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Section / Karyawan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url().'mtn/karyawan_mtn' ?>">Data Karyawan MTN</a></li>
                <li><a href="<?php echo base_url().'mtn/karyawan_prod' ?>">Data Karyawan PROD</a></li>
                <li><a href="<?php echo base_url().'mtn/data_section' ?>">Data Section</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url().'mtn/tanggal_wr' ?>">Work Request Harian</a></li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
           <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> Hai - <b><?=$this->session->userdata('nama_mtn')?></b><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url().'home/logout_2' ?>" class="btn btn-logout">Logout</a></li>
              </ul>
            </li> -->

            <li class="dropdown user user-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <span class="fa fa-user"></span> Hai - <b><?=$this->session->userdata('username_mtn')?></b><span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/img/user.jpg'; ?>" class="img-circle" alt="User Image">
                <p>
                  <?=$this->session->userdata('nrp_mtn')?> - 
                  <?=$this->session->userdata('nama_mtn')?><br/>
                  <small>MAINTENANCE</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url().'home/logout_mtn' ?>" class="btn btn-default btn-flat btn-logout">Logout</a>
                </div>
              </li>
            </ul>
          </li>

          </ul>
           <!-- nav bar sebelah kanan --> 
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>