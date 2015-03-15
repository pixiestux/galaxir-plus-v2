<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Galaxir PLUS 2015</title>
	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<script type="text/javascript" src="<?= base_url() ?>assets/js/pace.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pace.loadbar.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/galaxir.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head><!--  CIERRO EL HEAD -->

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navMenu">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Galaxir Plus</a>
			</div>


			<ul class="nav navbar-nav navbar-right">
        		
        		<li><p class="navbar-text">Hola <?= $nombre; ?></li>
        		<li><p class="navbar-text"> - <?= $this->session->userdata('session_id'); ?></p></li>
        		<li><p class="navbar-text"> - <?= $this->session->userdata('ip_address'); ?></p></li>
        		<li>
        			<a href="<?= base_url().'index.php/usuario/logout'; ?>" class="">SALIR <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
        			</a>

        		</li>
        	
        	</ul>
			
		</div>
	</nav>

	<div class="container-fluid">
	<div class="row">
