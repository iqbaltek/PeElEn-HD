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

<div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4><span class="semi-bold">Tugas</span> Baru untuk <span class="semi-bold">Anda</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID TIKET</th>
                    <th>JUDUL</th>
                    <th>TANGGAL DIBUAT</th>
                    <th>PRIORITAS</th>
                    <th>DAMPAK</th>
                    <th>TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($tugas_baru as $row) { ?>
                  <tr class="odd gradeX">
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->tgl_awal_tiket))); ?></td>
                    <td class="center"><?php echo $row->nama_level; ?></td>
                    <td class="center"><?php echo $row->nama_dampak; ?></td>
                    <td class="center">TINDAKAN</td>
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

