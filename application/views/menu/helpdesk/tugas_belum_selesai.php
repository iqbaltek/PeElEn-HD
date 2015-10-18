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
<div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4><span class="semi-bold">Tugas Yang Belum Diambil</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr align="center">
                    <th>ID TIKET</th>
                    <th>JUDUL</th>
                    <th>TEKNISI</th>
                    <th>KATEGORI</th>
                    <th>LOKASI</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>DURASI</th>
                    <th>PRIORITAS</th>
                    <th>DAMPAK</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($tugas_belum_selesai as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->date_open))); ?></td>
                    <td><?php 
						$date_open = strtotime($row->date_open);
						$tgl_sekarang = strtotime(date("Y-m-d H:i:s", strtotime('+5 hours')));
						
						$durasi = $tgl_sekarang - $date_open;
						
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
                    <td class="center"><?php echo $row->nama_level; ?></td>
                    <td class="center"><?php echo $row->nama_dampak; ?></td>
                    
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

