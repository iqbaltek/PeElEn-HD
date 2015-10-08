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
    <div class="clearfix"></div>
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
	   <!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
		<?php 
	// var_dump($level);
		// echo "<pre>";
		// print_r($this->session->all_userdata());
		// echo "</pre>";
	// echo $tugas_baru->result_id;
		// foreach ($tugas_baru as $row)
		// {
		   // echo $row->id_tiket;
		// }
		// echo "</pre>";
?>

	<div class="row">
	  <div class="grid simple">
		<div class="grid-title no-border">
		  <h4>Data <span class="semi-bold">Pelapor</span></h4>
		  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
		</div>
		<div class="grid-body no-border">
		<form method="POST" id="form_traditional_validation" action="<?php echo base_url('index.php/helpdesk/addTiket')?>">
				   
			  <div class="form-group">
				<label class="form-label">Nama</label>
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="nama" id="form1CardHolderName" class="form-control">                                 
				</div>
			  </div>
			  <div class="form-group">
				<label class="form-label">Nomor HP</label>
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="number" name="nomor_hp" id="form1CardNumber" class="form-control">                                 
				</div>
			  </div>
			  <div class="form-group">
				<label class="form-label">Email</label>
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="email" name="email" id="form1CardNumber" class="form-control">                                 
				</div>
			  </div>
			  <div class="form-group">
				<label class="form-label">Other</label>
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="other" id="form1CardNumber" class="form-control">                                 
				</div>
			  </div>
				
		
		</div>
	  </div>		
	  
     
	</div>
	 
	<div class="row">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Detail <span class="semi-bold">Laporan</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
				           
                      <div class="form-group">
                        <label class="form-label">Judul Tiket</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="judul_tiket" id="form1CardHolderName" class="form-control">                                 
						</div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Detail Masalah</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="detail_masalah" id="form1CardNumber" class="form-control">                                 
						</div>
                      </div>
         	  
					<div class="form-group">
						<label class="form-label">Pilih Teknisi</label>
						<div class="  right">                                       
							<i class=""></i>
							<select name="teknisi" id="cardType" class="select2 form-control"  >
								<option value="">-- pilih --</option>
							<?php 
								foreach ($teknisi as $row){
									echo $row->nip;
							?>
								<option value="<?php echo $row->nip ?>"><?php echo $row->nama_pegawai ?></option>
							<?php 						
								}
							?>
								
							</select>
						</div>
					</div>
				
					
					<input type="hidden" name="customer" id="form1CardNumber" class="form-control" value="">                                 
					<input type="hidden" name="kategori" id="form1CardNumber" class="form-control" value="">                                 
						
                        
				  <div class="form-actions">  
					<div class="pull-right">
					  <button type="submit" class="btn btn-success btn-cons"><i class="icon-ok"></i> Save</button>
					  <button type="button" class="btn btn-white btn-cons">Cancel</button>
					</div>
					</div>
				</form>
                </div>
              </div>		
     
	 </div>
	  <!-- END DASHBOARD TILES -->
          


	</div>
</div>

