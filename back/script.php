<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script>
	$('input[name=borda]').click(function(){
		
		if($(this).val() == 'sim')
			$('.sabor-borda').show();
		else
			$('.sabor-borda').hide();
	});




	$('input[name=pagamento]').click(function(){
		
		if($(this).val() == 'dinheiro')
			$('.sim').show();
		else
			$('.sim').hide();
	});



$('input[name=troco]').click(function(){
		
		if($(this).val() == 'sim')
			$('.valor').show();
		else
			$('.valor').hide();
	});



</script>