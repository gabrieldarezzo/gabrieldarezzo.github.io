<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<select name="cursos" id="cursos">
		<option value="">-- Selecione --</option>
		<option value="php">PHP</option>
		<option value="css">CSS</option>
	</select>
	
	<hr />
	<div id="resultado"></div>
	
	<script type="text/javascript">
		
		//Fica monitorando o evento 'change' do id=cursos, ao ocorrer este evento é disparado a função
		document.getElementById('cursos').addEventListener('change', function() {
			//Caso queira passar mais de fique com o exemplo abaixo:
			//var params = "lorem=ipsum&name=binny"; 
			
			//Porem só precisamos passar o value do 'cursos'
			var params = "cursos=" + document.getElementById('cursos').value;
			
			var ajax = new XMLHttpRequest();
			ajax.open('POST', 'select.php', true);
			ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			ajax.send(params);
				
			ajax.onreadystatechange = function() {
				if(ajax.readyState == 4 && ajax.status == 200) {
					document.getElementById('resultado').innerHTML = ajax.responseText;
				}
			}
		});
		
	</script>
</body>
</html>