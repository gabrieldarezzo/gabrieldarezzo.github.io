$(document).ready(function() {
	$( "#btn-action" ).bind( "click", function() {
		
		//verificar
		$.ajax({
			 // url: 'http://www.newlevelstudio.com.br/app/contato.php'
			 url: 'contato.php'
			,data: $('#js-dados *').serialize()
			,type:'POST'
			,dataType: 'json'
			,success: function(json){
				
				if(!json.status){
					alert(json.msg);
				} else {
					
					for(x in json.dados){
						// json.dados[x];
						// console.log(json.dados[x]);
						alert(json.dados[x].NOME);
					}
					
				}
				
				return true;
			}
			,error: function(json){
				console.log(json);
			}
		});
		
	});
});