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
              <h4><span class="semi-bold">Rekap Tugas Anda</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr align="center">
                    <th>ID TIKET</th>
                    <th>JUDUL</th>
                    <th>KATEGORI</th>
                    <th>LOKASI</th>
                    <th>TANGGAL SELESAI KERJA</th>
                    <th>DURASI</th>
                    <th>PRIORITAS</th>
                    <th>DAMPAK</th>
                    <th>TUTORIAL</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($rekap_tugas as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
					<td><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->date_close))); ?></td>
                    <td><?php echo $row->durasi; ?></td>
                    <td class="center"><?php echo $row->nama_level; ?></td>
                    <td class="center"><?php echo $row->nama_dampak; ?></td>
                    <td class="center">
						<?php 
							if($row->tutorial == '0'){
								echo "Tidak Ada"; 
							}else if($row->tutorial == '1'){
								echo "Belum Dikerjakan"; 
							}else if($row->tutorial == '2'){
								echo "Ada"; 
							}
						?>
					</td>
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

