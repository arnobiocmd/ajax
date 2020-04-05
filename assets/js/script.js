$(function(){
	$('#post').bind('click','submit',function(e){
		e.preventDefault();	

		var txt = $(this).serialize();

		$.ajax({
			beforeSend:function(){
				
			},
			type:'POST',
			url:'ajax/formulario.php',
			data:txt,
			dataType:'json',
			success:function(dados){
				if(dados.sucesso){
					$('.box-gif').fadeIn();
					$('.box-gif').fadeOut();
					$('.box-gif-mensagem').fadeIn();
					setTimeout(function(){
					$('.box-gif-mensagem').fadeOut();	
					},3000);
				}
			}
		})

	})
})