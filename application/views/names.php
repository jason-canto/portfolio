<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title>Busca por nome</title>
	<script type="text/javascript" src="<?php base_url() ?>content/js/jquery-1.11.2.min.js"></script>
</head>
<body>
	<p>Busca por nome:</p>
	<input type="text" id="busca"/>
	<hr>
	<script type="text/javascript">
	$(document).ready(function(){
		var json = <?php echo $json?>;
		$('#busca').keyup(function(){
			$('#resultado').empty();
			var str = $(this).val().toLowerCase();
			if(str!='' && str!=null)
				busca(str);
		});
		function busca(str){
			$.each(json,function(){
				if(this.name.toLowerCase().indexOf(str)>=0){
					$('#resultado').append('<li>'+this.name+'</li>');
				}
			});			
		}

	});
	</script>
	<ul id="resultado"></ul>
</body>
</html>
