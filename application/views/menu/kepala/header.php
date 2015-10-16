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
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/menu/plugins/owl-carousel/owl.theme.css" />
<link href="<?php echo base_url();?>assets/menu/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url();?>assets/menu/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/menu/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/menu/plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen">
<script src="<?php echo base_url();?>assets/menu/js/charts.js" type="text/javascript"></script>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url();?>assets/menu/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>


<link href="<?php echo base_url();?>assets/menu/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/menu/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>

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
          <li class="quicklinks"><a href="<?php echo base_url('login/logout')?>"> <div class="fa fa-power-off "></div> Log Out</a></li>
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
      <div class="user-info-wrapper" align="center">
		<div class="user-info">
			
			<div class="greeting">Welcome</div>
			<div class="username"><span class="bold"><?php echo $nama_pegawai;?></span></div>
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
					<li class="start "> <a href="<?php echo base_url('#')?>" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('index.php/helpdesk/tiket_baru')?>"> <i class="fa fa-edit"></i> <span class="title">Tiket Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('index.php/helpdesk/knowledge_base')?>" target="_blank"> <i class="fa fa-lightbulb-o"></i> <span class="title">Knowledge Base</span></a> </li>
				</ul>
			<?php
			}
		 
			// Menu Teknisi
			elseif($level == 7)
			{
			?>
				<ul>
					<li class="start "> <a href="<?php echo base_url('teknisi/dashboard')?>" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('teknisi/tugas_baru')?>"> <i class="fa fa-edit"></i> <span class="title">Tugas Baru</span><span class="<?php if($count_tugas_baru!=0){ echo "badge badge-important pull-right";}else{echo "badge badge-disable pull-right";}?> "><?php echo $count_tugas_baru;?></span></a></li>
					<li class=""> <a href="<?php echo base_url('teknisi/tugas_selesai')?>"> <i class="fa fa-check-square-o"></i> <span class="title">Laporan Tugas</span><span class="<?php if($count_lapor_selesai!=0){ echo "badge badge-important pull-right";}else{echo "badge badge-disable pull-right";}?>"><?php echo $count_lapor_selesai;?></span></a> </li>
					<li class=""> <a href="<?php echo base_url('teknisi/buat_solusi')?>"> <i class="fa fa-thumbs-o-up"></i> <span class="title">Buat Tutorial Solusi</span><span class="<?php if($count_buat_solusi!=0){ echo "badge badge-important pull-right";}else{echo "badge badge-disable pull-right";}?>"><?php echo $count_buat_solusi;?></span></a> </li>
					<li class=""> <a href="<?php echo base_url('teknisi/rekap_tugas')?>"> <i class="fa fa-book"></i> <span class="title">Rekap Tugas</span></a> </li>
				</ul>
			<?php
			}
			// Menu Admin
			elseif($level == 8)
			{
			?>
				<ul>
					<li class="start "> <a href="<?php echo base_url('admin/dashboard')?>" >  <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="<?php echo base_url('admin/aktivasi')?>"> <i class="fa fa-check-square-o"></i> <span class="title">Aktivasi Pegawai</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Tim Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Kategori Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Divisi Baru</span></a> </li>
					<li class=""> <a href="<?php echo base_url('#')?>"> <i class="fa fa-edit"></i> <span class="title">Sub Divisi Baru</span></a> </li>
				</ul>
			<?php
			}
			
			// Menu Kepala Deputi / Supervisor
			elseif($level == 4)
			{
				?>
				<ul>
					<li class="start "><a href="<?php echo base_url('kepala/dashboard')?>" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a></li>
					<li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Laporan Tiket</span> <span class="fa fa-angle-down pull-right"></span> </a>
						<ul class="sub-menu">
							<li > <a href="<?php echo base_url('kepala/tiket_kategori')?>"> Tiap Kategori </a> </li>
							<li > <a href="<?php echo base_url('#')?>"> Tiap Kantor </a> </li>
						</ul>
					</li> 
					<li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Laporan Pegawai</span> <span class="fa fa-angle-down pull-right"></span>  </a>
						<ul class="sub-menu">
							<li > <a href="<?php echo base_url('#')?>"> Perorangan </a> </li>
							<li > <a href="<?php echo base_url('#')?>"> Keseluruhan </a> </li>
						</ul>
					</li>
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
    