<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>HELPDESK | PT PLN (Persero) | Distribusi Jawa Barat dan Banten</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    
<link href="<?php echo base_url();?>assets/menu/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/owl-carousel/owl.theme.css" />
<link href="<?php echo base_url();?>assets/menu/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url();?>assets/menu/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url();?>assets/menu/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>

<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo base_url();?>assets/menu/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/css/magic_space.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="index.html"><img src="<?php echo base_url();?>assets/menu/img/logo.png" class="logo" alt=""  data-src="<?php echo base_url();?>assets/menu/img/logo.png" data-src-retina="<?php echo base_url();?>assets/menu/img/logo2x.png" width="216" height="51" style="margin-top:3px;margin-bottom:0px;"/></a>
      <!-- END LOGO -->
      
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks" style=""> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right">
        <ul class="nav quick-section ">
          <li class="quicklinks"> <span class="username"><?php echo $nama_pegawai; ?></span></li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"><a href="<?php echo base_url('index.php/login/logout')?>"> <div class="fa fa-power-off "></div> Log Out</a></li>
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
		<div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username"><span class="bold"><?php echo $username;?></span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
		<?php 
			// var_dump($level);
			// Menu Helpdesk
			if($level == 6)
			{
			?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('index.php/helpdesk/tiket_baru')?>"> <i class="fa fa-edit"></i> <span class="title">Tiket Baru</span></a> </li>
				</ul>
			<?php
			}
		 
			// Menu Teknisi
			elseif($level == 7)
			{
			?>
				<ul>
					<li class="start "> <a href="<?php echo base_url('index.php/teknisi/dashboard')?>" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('index.php/teknisi/tugas_baru')?>"> <i class="fa fa-edit"></i> <span class="title">Tugas Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('index.php/teknisi/tugas_selesai')?>"> <i class="fa fa-check-square-o"></i> <span class="title">Lapor Tugas Selesai</span></a> </li>
					<li class=""> <a href="<?php echo base_url('index.php/teknisi/rekap_tugas')?>"> <i class="fa fa-book"></i> <span class="title">Rekap Tugas</span></a> </li>
				</ul>
			<?php
			}
			// Menu Admin
			elseif($level == 8)
			{
			?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Staf Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Edit Jabatan Pegawai</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Tim Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Kategori Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Divisi Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Sub Divisi Baru</span></a> </li>
				</ul>
			<?php
			}
		 
			elseif($level == 3)
			{
				?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Menu Supervisor</span> <span class="selected"></span></a></li>
					<li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span></a> </li>
				</ul>
			<?php		
			}
		 
			elseif($level == 4)
			{
				?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Menu Superadmin</span> <span class="selected"></span></a></li>
					<li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span></a> </li>
				</ul>
			<?php
			}
			else
			{
				echo "<p>Anda login sebagai <b>". $username . "</b> .Level belum di setting, kontak admin.</p>";
			}
		?>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <!-- END SIDEBAR -->
    