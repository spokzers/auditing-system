<script type="text/javascript">
	$(document).ready(function(){

		$('#withImg').click(function(){
			 $(this).toggleClass('orange yellow');
			 $('#withoutImg').toggleClass('orange yellow');
		});
		$('#withoutImg').click(function(){
			 $(this).toggleClass('orange yellow');
			 $('#withImg').toggleClass('orange yellow');
		});

			$('#withVio').click(function(){
			 $(this).toggleClass('purple teal');
			 $('#withoutVio').toggleClass('purple teal');
			});
		
		$('#withoutVio').click(function(){
			 $(this).toggleClass('purple teal');
			 $('#withVio').toggleClass('purple teal');
		});


		$('#withCli').click(function(){
			 $(this).toggleClass('red pink');
			 $('#withoutCli').toggleClass('red pink');
		});

		$('#withoutCli').click(function(){
			 $(this).toggleClass('red pink');
			 $('#withCli').toggleClass('red pink');
		});

	});
</script>