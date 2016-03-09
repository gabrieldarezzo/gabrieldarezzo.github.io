<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data" style="margin-left:12px; margin-top:-7px;">
<p>Selecione categoría:</p>

  
  <?php
  
	/*
		//Não faz isso se a sua duvida não tem a ver com SQL, afinal a gente não tem o 
		//code pra testar nem consigo imaginar qual campo vem o  ' * ' dentro do select
		
		include "config/conexao.php";
		$idGarcon =$_GET['idGarcon'];
		$salto = mysql_query("SELECT * FROM categoria ORDER BY nome ASC");
		while($aaa = mysql_fetch_array($salto)){
	*/
	
	
	//Verifica se já passou pelo GET
	if(isset($_GET['cod']) && $_GET['cod'] != ''){
		$cod =$_GET['cod'];
	} else {
		$cod = '';
	}
	
	

	
	?>
	
	<select name="categoria_id" id="categoria_id" onchange='MM_jumpMenu(this);'>
		<option value="">-- Selecione a Categoria --</option>
		<option value="1">php</option>
		<option value="2">JavaScript</option>
		<option value="3">Mysql</option>
	</select>
	
    
    <label for="textfield"> Codigo:</label>
	<input name="cod" type="text" id="cod" value="<?php echo $cod ?>" size="5">
	
	
	<script type="text/javascript">
		function MM_jumpMenu(){
			alert(1);
			
		}
	
	</script>
</form>

</body>
</html>