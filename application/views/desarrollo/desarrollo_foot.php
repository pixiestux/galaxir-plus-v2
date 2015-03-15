	</div> <!-- CIERRO ROW GENERAL -->
</div> <!-- CIERRE CONTAINER-FLUID -->


<div class="container">
	<p class="text-muted">
	<small>Tiempo</small> <strong>{elapsed_time}</strong> <small>segundos</small>.
	<small>Memoria </small><strong>{memory_usage}</strong>
</p>
</div>



<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">
$("#form_guarda_orden").validate();
</script>

</body> <!-- CIERRO EL BODY -->

</html>