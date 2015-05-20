<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title>Busca por nome</title>
	<script type="text/javascript" src="<?php base_url() ?>content/js/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('content/css/style.css'); ?>">
</head>
<body>
	<script>
		$(document).ready(function(){
		$.ajax({
	    url: 'http://www.objectedge.com/',
	    type: 'GET',
		    success: function(res) {
		        var headline = $('.dropdown-toggle').text();
		        alert( headline);
		    }
		});
	});
	</script>
	<div id="page">
		<article id="content">
			<?php $this->load->view('menu');?>
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
		</article>
	</div>

</body>
</html>
