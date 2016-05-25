<script type="text/javascript">
	$(document).ready(function(){
		$('#facility').hide();
		$("#designation select[name='designation']").on('change',function(){
			if($(this).val() == 6){
			$('#facility').show();	
		}else{
			$('#facility').hide();	
			alert('dsad');
		}
		console.log('dsadas');
		});
		
	});
</script>