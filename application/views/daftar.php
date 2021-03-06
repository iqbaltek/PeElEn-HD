<!DOCTYPE html>
<html lang ="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Helpdesk | PLN Distribusi Jawa Barat Banten </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/elements/forms.css">

<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/icons/spinnericon/spinnericon.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/snippets/login-box.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-ui-position.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/transition.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/login/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
        overflow: hidden;
    }

</style>


<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/wow/wow.js"></script>
<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<img src="<?php echo base_url();?>assets/login/image-resources/blurred-bg/blurred-bg-3.jpg" class="login-img wow fadeIn" alt="" />

<div class="center-vertical">
    <div class="center-content">

        <div class="col-md-3 center-margin">

            <form action="<?php echo base_url('index.php/login/user')?>" method="POST" >
                <div class="content-box wow bounceInDown modal-content">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator" style="padding:0;background:yellow;">
                            <img src="<?php echo base_url();?>assets/login/images/logo-login.png" alt="" />
                        </span>
                        <span class="header-wrapper">
                            PLN Helpdesk Ticketing APD DJBB
                            <small>Pendaftaran Pegawai.</small>
                        </span>
                    </h3>
                    <div class="content-box-wrapper">
                        <div class="form-group">
                            <div class="input-group">
                                <table>
								<tr>
									<td>NIP &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="text" class="form-control" id="nip" name="nip" placeholder="masukkan NIP Anda" required></td>
								</tr>
								<tr>
									<td>Nama &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan Nama Anda" required></td>
								</tr>
								<tr>
									<td>Nomor HP &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="text" class="form-control" id="hp" name="hp" placeholder="masukkan Nomor Handphone Anda" required></td>
								</tr>
								<tr>
									<td>e-Mail &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="email" class="form-control" id="email" name="email" placeholder="masukkan email corporate Anda" required></td>
								</tr>
								<tr>
									<td>Username &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="text" class="form-control" id="username" name="username" placeholder="masukkan Username Anda" required></td>
								</tr>
								<tr>
									<td>Password &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td><input type="password" class="form-control" id="password" name="password" placeholder="masukkan Password Anda" required></td>
								</tr>
								<tr>
									<td>Kantor &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td>
										<select name="kantor" id="cardType" class="select2" style="width:100%" required>
											<option value="">-- pilih --</option>
										<?php 
										foreach ($dampak as $row){
										// echo $row->nama_kategori;
										?>
											<option value="<?php echo $row->id_dampak; ?>"><?php echo $row->nama_dampak; ?></option>
										<?php 						
										}
										?>

										</select>
									</td>
								</tr>
								<tr>
									<td>Jabatan &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td>
										<select name="jabatan" id="cardType" class="select2" style="width:100%" required>
											<option value="">-- pilih --</option>
											<?php 
											foreach ($dampak as $row){
											// echo $row->nama_kategori;
											?>
												<option value="<?php echo $row->id_dampak; ?>"><?php echo $row->nama_dampak; ?></option>
											<?php 						
											}
											?>

										</select>
									</td>
								</tr>
								<tr>
									<td>Sub Divisi &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td>
										<select name="sub_divisi" id="cardType" class="select2" style="width:100%" required>
											<option value="">-- pilih --</option>
										<?php 
										foreach ($dampak as $row){
										// echo $row->nama_kategori;
										?>
											<option value="<?php echo $row->id_dampak; ?>"><?php echo $row->nama_dampak; ?></option>
										<?php 						
										}
										?>

										</select>
									</td>
								</tr>
								<tr>
									<td>Team &nbsp;&nbsp; </td>
									<td>:&nbsp;&nbsp;</td>
									<td>
										<select name="team" id="cardType" class="select2" style="width:100%" required>
											<option value="">-- pilih --</option>
										<?php 
										foreach ($dampak as $row){
										// echo $row->nama_kategori;
										?>
											<option value="<?php echo $row->id_dampak; ?>"><?php echo $row->nama_dampak; ?></option>
										<?php 						
										}
										?>

										</select>
									</td>
								</tr>
                                </table>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">Daftar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>



    <!-- WIDGETS -->

<!-- Bootstrap Dropdown -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/dropdown/dropdown.js"></script>

<!-- Bootstrap Tooltip -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/tooltip/tooltip.js"></script>

<!-- Bootstrap Popover -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/popover/popover.js"></script>

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/button/button.js"></script>

<!-- Bootstrap Collapse -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/collapse/collapse.js"></script>

<!-- Superclick -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="<?php echo base_url();?>assets/login/widgets/theme-switcher/themeswitcher.js"></script>


<script src="<?php echo base_url();?>assets/menu/js/core.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/chat.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/dashboard_v2.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/menu/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->

</body>
</html>
