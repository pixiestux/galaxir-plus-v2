<div class="col-md-2" id="asideMenu">
			<div class="row">
				<div class="col-md-12">&nbsp</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="btn-group-vertical" role="group" aria-label="Vertical button group">

            <a class="btn btn-default" href="<?= base_url()."index.php/usuario/logeado"; ?>" role="button"><strong>INICIO</strong></a>

						<div class="btn-group" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Ordenes de entrada <span class="caret"></span>
  						</button>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="<?= base_url()."index.php/ordenes_entrada/agregar_form"; ?>">Ingresar Corte</a></li>
  							<li><a href="#">Asignar proceso a orden</a></li>
  							<li><a href="#">Ver ordenes de entrada</a></li>
  						</ul>
  						</div>

  						<div class="btn-group" role="group">
  						<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-expanded="false">Ordenes en produccion <span class="caret"></span>
  						</button>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="#">Ver ordenes en produccion</a></li>
  							<li><a href="#">Imprimir ordenes</a></li>
  						</ul>
  						</div>

  						<div class="btn-group" role="group">
  						<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-expanded="false">Ordenes de salida <span class="caret"></span>
  						</button>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="#">Ver ultimas salidas</a></li>
  							<li><a href="#">Imprimir ordenes de salida</a></li>
  						</ul>
  						</div>

  						<button type="button" class="btn btn-default">Reportes</button>
					</div>


				</div>
			</div>

			<div class="row">
				<div class="col-md-12">&nbsp</div>
			</div>

		</div>