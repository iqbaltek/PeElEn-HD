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
		<form method="POST" action="<?php echo base_url('teknisi/terbitkan_solusi'); ?>">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Form Solusi</span></h4>
					<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
				</div>
				<?php foreach($form_solusi as $row) { ?>
				<div class="grid-body no-border">
					<div class="form-group">
						<label class="semi-bold">Nomor Tiket</label>
						<div class="input-with-icon  right">
							<input class="form-control" style="width:100px" type="textarea" name="id_tiket" id="id_tiket" value="<?php echo $row->id_tiket?>" readonly />
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Judul</label>
						<div class="input-with-icon  right">
							<input class="form-control" type="textarea" name="judul" id="judul" value="<?php echo $row->judul_tiket?>" readonly />
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Deskripsi Solusi</label>
						<div class="row">
									<div class="form-group col-md-12">
									<textarea id="text-editor" name="deskripsi" placeholder="Enter text ..." class="form-control" rows="25"></textarea>
									</div>							
								</div>	
					</div>
				</div>
				<?php } ?>
			</div>
				<div class="pull-right">
					<button type="submit" class="btn btn-success btn-cons" onclick="showSuccess('Tutorial Solusi untuk Kode <?php echo $row->id_tiket?> telah diterbitkan')">Save</button>
				</div>
		</div>
	</form>
	</div>
	<!-- END DASHBOARD TILES -->
			


	</div>
</div>