<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Membuat Login Multi Level di CodeIgniter 3 &raquo; Jaranguda.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h3>Dashboard </h3> <a href="<?php echo base_url('index.php/login/logout')?>">Logout</a>
			<hr>
<?php 
	// var_dump($level);
	
	if($level == 6)
	{
		echo "<p>Anda login sebagai <b>". $username . "</b> .Level <b>Helpdesk</b></p>";
 
	}
 
	elseif($level == 7)
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
	</body>
</html>