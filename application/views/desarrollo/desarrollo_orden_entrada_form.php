 <div class="col-md-10" id="contenedorPrincipal">

  <div class="row">
    <div class="col-md-8 col-md-offset-1">
       <?php
      if(isset($mensaje)){
        echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$mensaje.'</div>';
      }
      ?>
    </div>
  </div>


	<div class="row">
		<div class="col-md-6 col-md-offset-2">

     
			<h2>Ingresar corte a almacen</h2>
			<br>
<form id="form_guarda_orden" class="form-horizontal" action="<?= base_url(); ?>index.php/ordenes_entrada/guarda_orden" method="post" autocomplete="off">

  <div class="form-group">
    <label for="cliente" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
    	<select class="form-control" id="cliente" name="cliente" required>
    		<option></option>
    		<?php 
    			foreach ($clientes as $row) {
    				echo '<option value="'.$row["id"].'">'.$row["nombre"].'</option>';
    			}
    		?>
    	</select>
    </div>
  </div>


  <div class="form-group">
    <label for="estilo" class="col-sm-2 control-label">Estilo</label>
    <div class="col-sm-10">
    	<select class="form-control" id="estilo" name="estilo" required>
    		<option></option>
    		<?php 
    			foreach ($estilos as $row2) {
    				echo '<option value="'.$row2["nombre"].'">'.$row2["nombre"].'</option>';
    			}
    		?>
    	</select>
    </div>
  </div>


  <div class="form-group">
    <label for="marca" class="col-sm-2 control-label">Marca</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required>
    </div>
  </div>


  <div class="form-group">
    <label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
    </div>
  </div>


  <div class="form-group">
    <label for="modelo" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" required>
    </div>
  </div>


  <div class="form-group">
    <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="5" id="observaciones" name="observaciones" required></textarea>
    </div>
  </div>



  <div class="form-group">
    <div class="col-md-4 col-md-offset-5">
      <button type="submit" class="btn btn-default">Ingresar corte</button>
    </div>
  </div>


</form>
<script>

</script>
		</div>	
	</div>

</div>


