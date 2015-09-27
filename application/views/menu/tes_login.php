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
	
	if($level == 1)
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level <b>Admin</b></p>";
 
	}
 
	elseif($level == 2)
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level <b>Manager</b></p>";
	}
 
	elseif($level == 3)
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level <b>Supervisor</b></p> HAYAWA";
	}
 
	elseif($level == 4)
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level <b>Super Admin</b></p>";
	}
	else
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level belum di setting, kontak admin.</p>";
	}
?>
	 </div>
	  <!-- END DASHBOARD TILES -->
          


	</div>
</div>
