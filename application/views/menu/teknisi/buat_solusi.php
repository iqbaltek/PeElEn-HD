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
              <h4><span class="semi-bold">Buat Tutorial</span> untuk <span class="semi-bold">Solusi</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th style="center">ID TIKET</th>
                    <th align="center">JUDUL</th>
                    <th align="center">KATEGORI</th>
                    <th align="center">LOKASI</th>
                    <th align="center">TANGGAL SELESAI KERJA</th>
                    <th align="center">PRIORITAS</th>
                    <th align="center">DAMPAK</th>
                    <th align="center">TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($buat_solusi as $row) { ?>
                  <tr class="odd gradeX" >
                    <td align="center"><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
					<td align="center"><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->date_close))); ?></td>
                    <td align="center"><?php echo $row->nama_level; ?></td>
                    <td align="center"><?php echo $row->nama_dampak; ?></td>
                    <td align="center"><form name="tindakan" id="tindakan" method="POST" action="<?php echo base_url('teknisi/form_solusi')?>">
										<input type="hidden" name="id_tiket" id="id_tiket" value="<?php echo $row->id_tiket?>">
										<input type="submit" value="Buat Solusi" class="btn btn-primary" onclick="showSuccess('Kode <?php echo $row->id_tiket?> akan dibuatkan tutorial solusi')">
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

