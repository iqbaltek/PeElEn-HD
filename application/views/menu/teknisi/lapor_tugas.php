<script>
	var siteURL = "<?php echo site_url('teknisi/getData');?>";
</script>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    
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

<div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4><span class="semi-bold">Laporkan Tugas</span> telah <span class="semi-bold">Selesai</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th style="center">ID TIKET</th>
                    <th align="center">JUDUL</th>
                    <th align="center">KATEGORI</th>
                    <th align="center">LOKASI</th>
                    <th align="center">TANGGAL DIBUAT</th>
					<th align="center">DURASI</th>
                    <th align="center">TANGGAL MULAI KERJA</th>
                    <th align="center">PRIORITAS</th>
                    <th align="center">DAMPAK</th>
                    <th align="center">SOLUSI</th>
                    <th align="center">TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($lapor_tugas as $row) { ?>
                  <tr class="odd gradeX" >
                    <td align="center"><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
					<td align="center"><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->tgl_awal_tiket))); ?></td>
					<td><?php 
						$tgl_tiket = strtotime($row->tgl_awal_tiket);
						$tgl_sekarang = strtotime(date("Y-m-d H:i:s", strtotime('+5 hours')));
						
						$durasi = $tgl_sekarang - $tgl_tiket;
						
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
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->date_open))); ?></td>
                    <td align="center"><?php echo $row->nama_level; ?></td>
                    <td align="center"><?php echo $row->nama_dampak; ?></td>
                    <td align="center"><form name="tindakan" id="tindakan" method="POST" action="<?php echo base_url('teknisi/update_selesai')?>">
							<input type="checkbox" value="1" id="tutorial" name="tutorial">
					</td>
                    <td align="center">
										<input type="hidden" name="id_tiket" id="id_tiket" value="<?php echo $row->id_tiket?>">
										<input type="hidden" name="date_open" id="date_open" value="<?php echo $row->date_open?>">
										<input type="submit" value="Selesai" class="btn btn-primary" onclick="showSuccess('Tugas dengan Kode <?php echo $row->id_tiket?> telah selesai')">
										</form></td>
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
</div>

