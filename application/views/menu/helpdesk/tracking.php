<script>
	var siteURL = "<?php echo site_url('teknisi/getData');?>";
</script>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix" />
	<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>

	<!-- content --> 
    <div class="content sm-gutter">
	<form  method="POST" action="<?php echo base_url('helpdesk/tracking'); ?>" enctype="multipart/form-data">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">	
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">TRACKING TUGAS</span></h4>
				</div>
				<div class="grid-body no-border">
					<div class="form-group">
							<div class="error-description" > <b>Masukan nomor ID tiket.</b> </div>
							<div class="error-description-mini"> Klik tombol cari untuk memulai pencarian </div>
							<br>
							<div class="row">
								<div class="input-with-icon col-md-12"> <i class="fa fa-search"></i>
								<input type="text" class="form-control" id="form1Name" name="id_tiket">
								</div>
							</div>
							<br>
								<button class="btn btn-primary btn-cons" type="submit">Cari</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">	
			<?php echo $track; ?>
		</div>

			
		</div>
	</form>
	</div>
	  <!-- END DASHBOARD TILES -->
</div>