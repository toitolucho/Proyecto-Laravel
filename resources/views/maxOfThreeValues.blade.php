<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>ejemplo2</title>
	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>">
	<script src="<?php echo asset('js/jquery.min.js') ?>"></script>
	<script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
	

</head>
<body>
	<div class="container"> <!-- div.container -->
		<br>
		<div class="row"> <!-- div.row -->
			<div class="col-lg-6">
				<div class="panel panel-success">
					
					<div class="panel-heading">
						<label>FORMULARIO 2</label>
					</div>

					<div class="panel-body">
						<form id="ejemplo2_res" method="post">
							@method('PUT')
							@csrf

							<div class="form-group">
								<label>VALOR1:</label>
								<input type="text" class="form-control" id ="valor1" name="valor1" required>
							</div>

							<div class="form-group">
								<label>VALOR2:</label>
								<input type="text" class="form-control" id ="valor2" name="valor2" required>
							</div>

							<div class="form-group">
								<label>VALOR3:</label>
								<input type="text" class="form-control" id ="valor3" name="valor3" required>
							</div>

							<div class="form-group">
								<label>RESULTADO:</label>
								<input type="text" class="form-control" id="respuesta" disabled>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-success btn-lg">CALCULAR</button>
							</div>

						</form>
					</div>


				</div>
			</div>
		</div>
	</div>


<script>
$("#ejemplo2_res").submit(function(event) {
	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
	event.preventDefault();
	var token = $("input[name='_token']").val();
	// var token = '{{csrf_token()}}';
	var valora = $('#valor1').val();
    var valorb = $('#valor2').val();
	var valorc = $('#valor3').val();
	var data={valor1:valora, valor2:valorb, valor3:valorc , _method: "POST",_token:token};
	console.log(data);
	$.ajax({
		url: '<?php echo route('maxOfThreeValues_res') ?>',
		type: 'POST',
		// data:  $("form").serialize(),
		data:data,
		success:function(datos){
			var valores=eval(datos)
			$("#respuesta").val(valores[0])
		}
	})
});	
</script>


</body>
</html>