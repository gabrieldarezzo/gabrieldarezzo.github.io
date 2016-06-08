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
	
	<script type="text/javascript">
		
		
		document.getElementById('cursos').addEventListener('change', function() {
			alert(1);
			
			/*
			
			ajax = new XMLHttpRequest();
			ajax.open('GET', 'pagina.html', true);
			ajax.send();
			
			ajax.onreadystatechange = function() {
				if(ajax.readyState == 4 && ajax.status == 200) {
					// console.log(ajax.responseText);
					document.getElementById('result').innerHTML = ajax.responseText;
				}
			}
			*/
			
		});
	</script>
</body>
</html>