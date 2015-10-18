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
	<form  method="POST" action="<?php echo base_url('helpdesk/addTiket'); ?>" enctype="multipart/form-data">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Data Pelapor</span></h4>
					</div>
				<div class="grid-body no-border">
					<div class="form-group">
						<label class="semi-bold">Nama</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="nama" id="form1CardHolderName" class="form-control" required/>                                 
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Nomor HP</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="nomor_hp" id="form1CardNumber" class="form-control" required/> 
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Email</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="email" name="email" id="form1CardNumber" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Kantor</label>
						<div class="right">                                       
							<select name="kantor" class="select2" style="width:100%" required>
							<option value="">-- pilih --</option>
							<?php 
							foreach ($kantor as $row){
							// echo $row->nama_kategori;
							?>
								<option value="<?php echo $row->id_kantor; ?>"><?php echo $row->nama_kantor; ?></option>
							<?php 						
							}
							?>

							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="semi-bold">Other</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="other" id="form1CardNumber" class="form-control" />                                 
						</div>
					</div>
				</div>
			</div>		
		</div>
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Detail Laporan</span></h4>
					</div>
				<div class="grid-body no-border">
					<div class="form-group">
						<label class="semi-bold">Judul Tiket</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="judul_tiket" id="form1CardHolderName" class="form-control" required>                                 
						</div>
					</div>
					<div class="form-group">
						<label class="semi-bold">Detail Masalah</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<textarea rows="3" name="detail_masalah" id="form1CardNumber" class="form-control" required></textarea>
					
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Pilih Teknisi</label>
							<div class="  right">                                       
								<i class=""></i>
								<select name="teknisi" id="cardType" class="select2" style="width:100%" required>
									<option value="">-- pilih --</option>
								<?php 
								foreach ($teknisi as $row){
								// echo $row->nip;
								?>
									<option value="<?php echo $row->nip; ?>"><?php echo $row->nama_pegawai; ?></option>
								<?php 						
								}
								?>
								
								<?php 
								foreach ($team as $row){
								// echo $row->nip;
								?>
									<option value="<?php echo $row->id_team; ?>"><?php echo $row->nama_team; ?></option>
								<?php 						
								}
								?>
								
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Kategori</label>
							<div class="  right">                                       
								<i class=""></i>
								<select name="kategori" id="cardType" class="select2" style="width:100%" required>
									<option value="">-- pilih --</option>
								<?php 
								foreach ($kategori as $row){
								// echo $row->nama_kategori;
								?>
									<option value="<?php echo $row->id_kategori; ?>"><?php echo $row->nama_kategori; ?></option>
								<?php 						
								}
								?>

								</select>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Level Prioritas</label>
							<div class="  right">                                       
								<i class=""></i>
								<select name="level_prioritas" id="cardType" class="select2" style="width:100%" required>
									<option value="">-- pilih --</option>
								<?php 
								foreach ($level_prioritas as $row){
								// echo $row->nama_kategori;
								?>
									<option value="<?php echo $row->id_level; ?>"><?php echo $row->nama_level; ?></option>
								<?php 						
								}
								?>

								</select>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Dampak</label>
							<div class="  right">                                       
								<i class=""></i>
								<select name="dampak" id="cardType" class="select2" style="width:100%" required>
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
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							<label class="semi-bold">Status Tiket</label>
							<div class="radio radio-success">
								<input id="yes" type="radio" name="status_tiket" value="1" required />
								<label for="yes">New</label>
								<input id="no" type="radio" name="status_tiket" value="3" required />
								<label for="no">Close</label>
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-6">
						<label class="semi-bold">Lampirkan File (max 2mb, <i>file lebih dari satu di rar / zip) </i></label>
						<div class=" right">                                       
							<input type="file" name="namafile" />
						</div>
						</div>
					</div>	
					
					<input type="hidden" name="status" id="form1CardNumber" class="form-control" value="1">                                 
				</div>
			</div>				
		</div>
		<div class="pull-right">
			<button type="submit" class="btn btn-success btn-cons">Save</button>
			<button type="button" class="btn btn-white btn-cons">Cancel</button>
		</div>
	</form>
	</div>
	  <!-- END DASHBOARD TILES -->
</div>