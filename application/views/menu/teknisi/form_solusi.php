<script>
	var siteURL = "<?php echo site_url('teknisi/getData');?>";
</script>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    
    <div class="clearfix"></div>
	   <!-- BEGIN DASHBOARD TILES -->
	  <!-- content --> 
    <div class="content sm-gutter">
		<form method="POST" action="<?php echo base_url('index.php/helpdesk/addTiket'); ?>">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Form Solusi</span></h4>
					<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
				</div>
				<?php foreach($buat_solusi as $row) { ?>
				<div class="grid-body no-border">
					<div class="form-group">
						<label class="semi-bold">Nomor Tiket</label>
						<div class="input-with-icon  right">
							<input class="form-control" style="width:100px" type="textarea" name="id_tiket" id="id_tiket" value="<?php echo $row->id_tiket?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Judul</label>
						<div class="input-with-icon  right">
							<input class="form-control" type="textarea" name="judul" id="judul" value="<?php echo $row->judul_tiket?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Deskripsi Solusi</label>
						<div class="row">
									<div class="form-group col-md-12">
									<textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="25"></textarea>									
									</div>							
								</div>	
					</div>
				</div>
				<?php } ?>
			</div>
				<div class="pull-right">
					<button type="submit" class="btn btn-success btn-cons">Save</button>
				</div>
		</div>
	</form>
	</div>
	<!-- END DASHBOARD TILES -->
			


	</div>
</div>
<script>
		$(document).ready(function() {
			$('#text-editor').wysihtml5();	
			$("#quick-access").css("bottom","0px");				
		});		
	</script>
<link href="<?php echo base_url();?>assets/menu/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>