<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    
<link href="<?php echo base_url();?>assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/owl-carousel/owl.theme.css" />
<link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url();?>assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url();?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
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
      <a href="index.html"><img src="<?php echo base_url();?>assets/img/logo.png" class="logo" alt=""  data-src="<?php echo base_url();?>assets/img/logo.png" data-src-retina="<?php echo base_url();?>assets/img/logo2x.png" width="216" height="51" style="margin-top:3px;margin-bottom:0px;"/></a>
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
        <div class="chat-toggler" style="margin-right:-50px;"> <a href="#" class="dropdown-toggle" id="user-options" data-toggle="dropdown">
          <div class="user-details">
            <div class="username"> John <span class="bold">Smith</span> </div>
          </div>
          <div class="iconset top-down-arrow"></div>
		  </a>
		    <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href="#"><div class="fa fa-user "></div>&nbsp;&nbsp;&nbsp;&nbsp; My Account</a> </li>
              <li><a href="#"><div class="fa fa-edit "></div>&nbsp;&nbsp;&nbsp;&nbsp; Edit Account</a> </li>
            </ul>
          
          <div class="profile-pic"> <img src="<?php echo base_url();?>assets/img/profiles/avatar_small.jpg"  alt="" data-src="<?php echo base_url();?>assets/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url();?>assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> </div>
        </div>
        <ul class="nav quick-section ">
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
        <div class="profile-wrapper"> <img src="<?php echo base_url();?>assets/img/profiles/avatar.jpg"  alt="" data-src="<?php echo base_url();?>assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url();?>assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
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
			
			if($level == 1)
			{
			?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Menu Admin</span> <span class="selected"></span></a></li>
					<li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span></a> </li>
				</ul>
			<?php
			}
		 
			elseif($level == 2)
			{
			?>
				<ul>
					<li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Menu Manager</span> <span class="selected"></span></a></li>
					<li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span></a> </li>
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
    