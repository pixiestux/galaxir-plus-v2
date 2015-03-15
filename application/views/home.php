
</head><!--  CIERRO EL HEAD -->

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-xs-12 col-lg-12" style="width: 100%; height: 250px; background: #88AEBF"></div>
		</div>
	</div>

	<div class="container">
		<h2>Galaxir Plus 2015</h2>
		<div class="row">
			<div class="col-md-4">
				<? if (isset($error_pass) ){
					echo '<div class="alert alert-danger" role="alert">'.$error_pass.'</div>';
				}
				?>
				<form method="post" accept-charset="utf-8" action="<?= base_url() ?>index.php/usuario/login" autocomplete="off">
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required>
					</div>

					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
					</div>

					<button type="submit" class="btn btn-default">Iniciar</button>

					<?php echo validation_errors(); ?>

				</form>
			</div>

			<div class="col-md-4">
			</div>
		</div>
	</div>


