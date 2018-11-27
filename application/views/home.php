<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?PHP echo $title_page; ?></title>
</head>
<body>

<div class="container">

	<div class="row">
		<div class="text-center">
		<h1>CodeIgniter - Estados e Minicipios Brasileiros</h1>
		</div>

		<div class="form-group">
		
			<label for="estados">Estados</label>

			<select name="estados" id="estados" class="form-control">
				<?PHP echo $options_estados; ?>
			</select>

		</div>

		<div class="form-group">
			<label for="cidades">Cidades</label>
			<select name="cidades" id="cidades" class="form-control" disabled>
				<option value="">Selecione o estado acima</option>
			</select>
		
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">

	var base_url = "<?PHP echo base_url() ?>";
		$(function(){
			$('#estados').change(function(){

				$('#cidades').attr('disabled', 'disabled');
				$('#cidades').html('<option> Carregando ... </option>');

				var id_estado = $('#estados').val();
				//console.log(id_estado + );
				$.post(base_url + 'index.php/cidade/getCidades', {
					id_estado : id_estado
					}, function(data){
						//console.log(data);
						$('#cidades').html(data);
						$('#cidades').removeAttr('disabled');
				});
			});
		});
	</script>
</body>
</html>