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
              <h4><span class="semi-bold">Tugas</span> Baru untuk <span class="semi-bold">Anda</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr align="center">
                    <th>ID TIKET</th>
                    <th>JUDUL</th>
                    <th>KATEGORI</th>
                    <th>LOKASI</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>TANGGAL MULAI KERJA</th>
                    <th>PRIORITAS</th>
                    <th>DAMPAK</th>
                    <th>TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($lapor_tugas as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
					<td><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->tgl_awal_tiket))); ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->date_open))); ?></td>
                    <td class="center"><?php echo $row->nama_level; ?></td>
                    <td class="center"><?php echo $row->nama_dampak; ?></td>
                    <td class="center"><form name="tindakan" id="tindakan" method="POST" action="<?php echo base_url('index.php/teknisi/update_selesai')?>">
										<input type="hidden" name="id_tiket" id="id_tiket" value="<?php echo $row->id_tiket?>">
										<input type="hidden" name="date_open" id="date_open" value="<?php echo $row->date_open?>">
										<input type="submit" value="Selesai" class="btn btn-primary">
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

