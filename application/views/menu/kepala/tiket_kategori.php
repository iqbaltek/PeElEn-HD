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
	<form  method="POST" action="<?php echo base_url('kepala/get_tiket_kategori'); ?>" enctype="multipart/form-data">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Laporan Tiket tiap Kategori</span></h4>
					<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
				</div>
				<div class="grid-body no-border">
					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Pilih Kategori</label>
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
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="semi-bold">Pilih Bulan</label>
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
					<input type="hidden" name="status" id="form1CardNumber" class="form-control" value="1">                                 
				</div>
			</div>				
		</div>
		<div class="pull-right">
			<button type="submit" class="btn btn-success btn-cons">Generate</button>
		</div>
	</form>
	 
	<!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
		<div class="row-fluid">
			<div class="span12">
			  <div class="grid simple ">
				<div class="grid-title">
				  <h4><span class="semi-bold">Laporan Tiket tiap Kategori bulan ini</span></h4>
				</div>
				<div class="grid-body ">
				 <table id="example" class="table table-striped"  >
					<thead>
					  <tr align="center">
						<th>NO</th>
						<th>KATEGORI</th>
						<th>JUMLAH</th>
						<th>RATA-RATA DURASI</th>
					  </tr>
					</thead>
					<tbody>
					<?php foreach($tiket_kategori as $row) {?>
					  <tr class="odd gradeX" >
						<td><?php echo $row->kategori; ?></td>
						<td><?php echo $row->nama_kategori; ?></td>
						<td><?php echo $row->jumlah; ?></td>
						<td><?php 
						$durasi = $row->rata2; 
										
						$second = 1;
						$minute = 60*$second;
						$hour   = 60*$minute;
						$day    = 24*$hour;

						$ans["day"]    = floor($durasi/$day);
						$ans["hour"]   = floor(($durasi%$day)/$hour);
						$ans["minute"] = floor((($durasi%$day)%$hour)/$minute);
						$ans["second"] = floor(((($durasi%$day)%$hour)%$minute)/$second);
						if($ans["day"] != 0){
							echo $ans["day"] . " hari, " . $ans["hour"] . " jam, "  . $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] != 0){
							echo $ans["hour"] . " jam, "  . $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] != 0){
							echo $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] == 0 && $ans["second"] != 0){
							echo $ans["second"] . " detik";
						}
						?></td>
					  </tr>
					<?php } ?>
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		  </div>

		 </div>
	  <!-- END DASHBOARD TILES -->
	</div>
	  <!-- END DASHBOARD TILES -->
	 
          
</div>