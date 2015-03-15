 <div class="col-md-10" id="contenedorPrincipal">

  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="alert alert-success" role="alert">

        <h3 class="text-center"><?= $mensaje ?></h3>
        <br>
        <a class="btn btn-default center-block" href="<?= base_url(); ?>index.php/ordenes_entrada/imprimir/<?= $id_orden ?>" role="button" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir orden de entrada</a>

    </div>

  </div>



</div>


